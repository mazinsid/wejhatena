<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $subscriptions = DB::table('subscriptions')->get();
        return view('admin.subscription', compact('subscriptions'));
    }

    public function store(Request $request)
    {
        Subscription::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'ads_number' => $request->ads_number,
            'number_date' => $request->number_date,
        ]);
        return redirect(route('subscription'));
    }
}
