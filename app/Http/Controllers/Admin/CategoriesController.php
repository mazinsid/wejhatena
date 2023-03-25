<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdsTypes;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('admin.category', compact('categories'));
    }

    public function subcategory($id)
    {
        $subcategories = DB::table('subcategories')->where('category_id', $id)->get();
        $category = DB::table('categories')->where('id', $id)->get()->first();
        return view('admin.subcategory', compact('subcategories', 'category'));
    }

    public function adsType()
    {
        $types = DB::table('ads_types')->get();

        return view('admin.ads_type', compact('types'));
    }

    public function country()
    {
        $countries = DB::table('countries')->get();

        return view('admin.country', compact('countries'));
    }

    public function city($id)
    {
        $cities = DB::table('cities')->where('country_id', $id)->get();
        $country = DB::table('countries')->where('id', $id)->get()->first();

        return view('admin.city', compact('cities', 'country'));
    }

    public function store(Request $request)
    {
        $file = $request->file('icon');
        $fileName = 'category-' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/storage/category', $fileName);
        Category::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'icon' => $fileName,
        ]);
        return redirect(route('category'));
    }

    public function storeSubcategory(Request $request)
    {
        Subcategory::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'status' => '0',
            'category_id' => $request->category_id,
        ]);

        return redirect(route('subcategory', $request->category_id));
    }

    public function storeType(Request $request)
    {
        AdsTypes::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
        ]);

        return redirect(route('ads_type'));
    }

    public function storeCountry(Request $request)
    {
        $file = $request->file('image');
        $fileName = 'country-' . time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/storage/countries', $fileName);
        Country::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'image' => $fileName,
        ]);

        return redirect(route('country'));
    }

    public function storeCity(Request $request)
    {
        City::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'country_id' => $request->country_id,
        ]);
        return redirect(route('city', $request->country_id));
    }
}
