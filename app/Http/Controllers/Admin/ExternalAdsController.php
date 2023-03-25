<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExternalAds;
use App\Models\NewsAds;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ExternalAdsController extends Controller
{
    public function external()
    {
        $externals = ExternalAds::get();
        return view('admin.external', compact('externals'));
    }

    public function externalStore(Request $request)
    {


        if ($request->file('files')) {
            $file = $request->file('files');
            $fileName = 'external-' . time() . '.' . $file->getClientOriginalExtension();
            $fileType = $file->getMimeType();
            $file->move(public_path() . '/storage/external', $fileName);
            // Storage::disk('public')->put($path, $fileName);
        }
        ExternalAds::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'details_en' => $request->details_en,
            'details_ar' => $request->details_ar,
            'image' => $fileName,
            'datatype' => $fileType,
            'status' => 1,
        ]);

        return redirect(route('external'));
    }

    public function newsAds()
    {
        $news_externals = NewsAds::get();
        return view('admin.external_news', compact('news_externals'));
    }

    public function newsAdsStore(Request $request)
    {
        NewsAds::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'status' => '1',
        ]);

        return redirect(route('news_ads'));
    }
}
