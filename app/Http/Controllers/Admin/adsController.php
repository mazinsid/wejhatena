<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ads;

class adsController extends Controller
{
    public function index()
    {
        $adss = Ads::has('adsDetails')->get();
        // dd($adss);
        return view('admin.ads', compact('adss'));
    }
}
