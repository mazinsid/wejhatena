<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Ads;
use App\Models\AdsTypes;
use App\Models\Category;
use App\Models\Country;
use App\Models\ExternalAds;
use App\Models\NewsAds;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $ads = Ads::has('adsDetails')->where('status', 0)->get();
        $categories = Category::with('subcategories')->get();
        $countries = Country::get();
        $types = AdsTypes::get();
        $news_externals = DB::table('news_ads')->where('status', 0)->get();
        $externals = DB::table('external_ads')->where('status', 0)->get();
        $lastAds = Ads::has('adsDetails.cover_image')->has('adsDetails')->where('status', 0)->limit(4)->latest()->get();
        $viewsAds = Ads::has('adsDetails.cover_image')->has('adsDetails')->where('status', 0)->orderBy('view_count', 'ASC')->limit(6)->get();
        // dd($externals);
        return view('home', compact(
            'ads',
            'categories',
            'countries',
            'types',
            'lastAds',
            'externals',
            'viewsAds',
            'news_externals',
            'setting',
        ));
    }

    public function language($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
