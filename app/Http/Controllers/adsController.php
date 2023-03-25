<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Country;
use App\Models\City;
use App\Models\Ads;
use App\Models\AdsFiles;
use App\Models\AdsDetails;
use App\Models\AdsTypes;
use App\Models\Setting;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

use Image;

class adsController extends Controller
{

    public function create(Request $request)
    {
        $categories = Category::get();
        // dd($categories);
        // return view('admin.category', compact('categories'));
        $types = AdsTypes::get();
        $cities = City::get();
        $countries = Country::get();
        // $subscriptions = Subscription::with('subscription_features')->get();

        $is_searchable = false;
        $notifications = null;
        $chatNotifications = null;
        return view('ads.ad-post', compact('categories', 'countries', 'cities', 'types'));
    }

    public function getCities($id)
    {
        $cities = DB::table('cities')->select('id', 'name_ar', 'name_en')->where('country_id', $id)->get();

        return response()->json($cities);
    }

    public function stepOne(Request $request)
    {
        $categories = Category::with('subcategories')->get();
        $types = AdsTypes::get();
        $cities = City::orderBy('name_en', 'ASC')->get();
        $countries = Country::orderBy('name_en', 'ASC')->get();
        $is_searchable = false;
        $notifications = null;
        $chatNotifications = null;
        $fileSizeSettings = 4342;
        if (Auth::check()) {
            $notifications = "message";
            $chatNotifications = "chat notifications";
        }
        $subscriptions = Subscription::with('subscription_features')->get();
        if ($request->category) {
            $validatedData = $request->validate([
                'cities' => 'required',
            ]);

            if (empty($request->session()->get('ads'))) {
                $adsDetails = new AdsDetails();
                $ads = new Ads();
            } else {
                $ads = $request->session()->get('ads');
                $adsDetails = $request->session()->get('adsDetails');
            }

            $ads->city_id = $request->cities;
            $ads->country_id = $request->countries;
            // $adsDetails->district_id = $request->district ? $request->district : null;
            $adsDetails->name_en = $request->name_en;
            $adsDetails->name_ar = $request->name_ar;
            $adsDetails->description_en = $request->description_en;
            $adsDetails->description_ar = $request->description_ar;
            $category = $request->category;
            if (strpos($category, "s-") !== false) {
                $subcategoryId = (int) str_replace("s-", "", $category);
                $subcategory = Subcategory::find($subcategoryId);
                $category = $subcategory->category_id;
                $ads->subcategory_id = $subcategoryId;
            }
            $ads->category_id = $category;
            $ads->type_id = $request->types;
            $ads->status = 1;

            $request->session()->put('adsDetails', $adsDetails);
            $request->session()->put('ads', $ads);
            return view('ads.step2', compact('categories', 'fileSizeSettings', 'cities', 'types', 'is_searchable', 'ads', 'adsDetails', "notifications", "chatNotifications"));

            // return redirect()->route('ads.stepTwo');
        } else {
            return view('ads.ad-post', compact('categories', 'cities', 'types', 'is_searchable', 'subscriptions', "notifications", "chatNotifications"));
        }
    }



    public function stepTwo(Request $request)
    {
        $is_searchable = false;
        $notifications = null;
        $chatNotifications = null;
        $fileSizeSettings = 999;
        $isFeatured = false;

        if (empty($request->session()->get('ads'))) return redirect()->route('ads.stepOne');
        if (empty($request->session()->get('adsDetails'))) return redirect()->route('ads.stepTwo');
        $adsFiles = array();

        if ($request->all()) {
            $adsDetails = $request->session()->get('adsDetails');
            $ads = $request->session()->get('ads');
            //     $folderName = "default";
            if ($request->hasFile('files')) {
                $folderName = rand(100, 999) . time();
                $images = $request->file('files');
                $unique = 1;
                \File::makeDirectory(public_path('storage/ads/' . $folderName), $mode = 0777, true, true);
                foreach ($images as $image) {
                    $imageName = 'pic_' . $unique .  time();
                    if (str_contains($image->getMimeType(), 'video')) $imageName = 'video_' . $unique .  time() . '.' . $image->getClientOriginalExtension();
                    $adsFiles[] = array(
                        "display_name" => $imageName,
                        "name" => $image->getClientOriginalName(),
                        "file_type" =>  $image->getMimeType()
                    );
                    $image->move(public_path() . '/storage/ads/' . $folderName . '/', $image->getClientOriginalName());
                    $unique++;
                }

                $ads->folder_name = $folderName;
                $request->session()->put('adsFiles', $adsFiles);
                // if ($request->is_feature == "featured") $isFeatured = true;
                // $request->session()->put('is_featured', $isFeatured);
                // dd($request->file('files'));
                return redirect()->route("ads.stepThree", $isFeatured);
            } else {
                $ads->folder_name = 'default';
                $ads->image_caver = 'default.png';
                $request->session()->put('adsFiles', $adsFiles);
                return redirect()->route("ads.stepThree");
                dd($adsFiles);
            }
        } else {
            $ads = $request->session()->get('ads');
            $adsDetails = $request->session()->get('adsDetails');
            return view('ads.step2', compact('categories', 'fileSizeSettings', 'cities', 'types', 'is_searchable', 'ads', 'adsDetails', "notifications", "chatNotifications"));
        }
    }

    public function stepThree(Request $request)
    {

        $adsDetails = $request->session()->get('adsDetails');
        $ads = $request->session()->get('ads');
        $files = $request->session()->get('adsFiles');
        $isFeatured = $request->session()->get('is_featured');
        if (!$ads) return redirect()->route("ads.step1");

        $ads->user_id = Auth::user()->id;
        $ads->approved_by = null;
        $ads->status = 0;
        $ads->save();

        $adsDetails->ads_id = $ads->id;
        $adsDetails->status = 1;
        $adsDetails->save();

        foreach ($files as $file) {
            $adsFiles = new AdsFiles();
            $adsFiles->ads_details_id = $adsDetails->id;
            $adsFiles->name = $file['name'];
            $adsFiles->display_name = $file['display_name'];
            $adsFiles->file_type = $file['file_type'];
            $adsFiles->save();
        }

        $request->session()->forget('ads');
        $request->session()->forget('adsDetails');
        $request->session()->forget('adsFiles');
        $request->session()->put('ads_id', $ads->id);
        // if ($isFeatured) return redirect()->route("payment.index");

        return redirect()->route('ads.confirm');
    }

    public function confirm()
    {
        // $categories = Category::where('status', 1)->orderBy('order', 'ASC')->get();
        // $types = Types::where('status', 1)->get();
        // $cities = CityList::orderBy('city_en', 'ASC')->get();
        // $subscriptions = Subscription::with('subscription_features')->get();

        // $is_searchable = false;
        // $notifications = null;
        // $chatNotifications = null;
        // if (Auth::check()) {
        //     $notifications = Notifications::select("message_type", DB::raw('count(is_read) as total'))->where(["user_id" => Auth::user()->id, "is_read" => 0])->where("message_type", '<>', 'chat_message')->groupBy("message_type")->get();
        //     $chatNotifications = Notifications::select("message_type", DB::raw('count(is_read) as total'))->where(["user_id" => Auth::user()->id, "is_read" => 0])->where("message_type", 'chat_message')->groupBy("message_type")->get();
        // }

        // $adsDetails = $request->session()->get('adsDetails');
        // $ads = $request->session()->get('ads');
        // $files = $request->session()->get('adsFiles');
        // $isFeatured = $request->session()->get('is_featured');
        // if (!$ads) return redirect()->route("ads.step1");

        // $ads->user_id = Auth::user()->id;
        // $ads->approved_by = null;
        // $ads->status = $isFeatured ? 0 : 1;
        // $ads->save();

        // $adsDetails->ads_id = $ads->id;
        // $adsDetails->status = 1;
        // $adsDetails->save();

        // if ($isFeatured) {
        //     $settings = FeatureSettings::first();
        //     $feature = new Feature();
        //     $expirationDate = "Now + " . $settings->expiration_days . " Days";
        //     $feature->expiration_date = date("Y-m-d H:i:s", strtotime($expirationDate)); //temp
        //     $feature->ads_id = $ads->id;
        //     $feature->save();
        //     $updateAds = Ads::find($ads->id);
        //     $updateAds->feature_id = $feature->id;
        //     $updateAds->save();
        // }

        // foreach ($files as $file) {
        //     $adsFiles = new AdsFiles();
        //     $adsFiles->ads_details_id = $adsDetails->id;
        //     $adsFiles->name = $file['name'];
        //     $adsFiles->display_name = $file['display_name'];
        //     $adsFiles->file_type = $file['file_type'];
        //     $adsFiles->save();
        // }

        // $request->session()->forget('ads');
        // $request->session()->forget('adsDetails');
        // $request->session()->forget('adsFiles');
        // $request->session()->put('ads_id', $ads->id);
        // if ($isFeatured) return redirect()->route("payment.index");

        return view('ads.confirm');
    }

    public function payment()
    {
        return view('ads.ad-list');
    }
    public function adsList()
    {
        $setting = Setting::first();

        return view('ads.ad-list', compact('setting'));
    }
    /**
     * Display the specified resource.
     * @return \Illuminate\Http\Response
     */
    public function adsDetails($id)
    {
        $ads =  Ads::where('id', $id)->with(['adsDetails.adsFiles', 'user', 'category', 'subcategory'])->has("adsDetails")->has("adsDetails.adsFiles")->first();
        $lastAds = Ads::has('adsDetails.cover_image')->has('adsDetails')->where('user_id', $ads->user->id)->where('status', 0)->limit(3)->latest()->get();
        $similarAds = Ads::has('adsDetails.cover_image')->has('adsDetails')->where('category_id', $ads->category->id)->where('status', 0)->limit(5)->latest()->get();
        return view('ads.ad-details', compact('ads', 'lastAds', 'similarAds'));
    }
    public function adsPost()
    {
        return view('ads.ad-post');
    }
}
