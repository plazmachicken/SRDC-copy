<?php

namespace App\Http\Controllers;


use App\Models\copyinfo;
use App\Models\geoinfo;
use App\Models\Indust;
use App\Models\info;
use App\Models\Patinfo;
use App\Models\UtilInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class custdashcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']); // Apply auth middleware to all methods except publicMethod

    }

    public function index()
    {
        $utilEntries = UtilInfo::where('user_id', Auth::user()->id)->get();
        $patEntries = Patinfo::where('user_id', Auth::user()->id)->get();
        $geoEntries = geoinfo::where('user_id', Auth::user()->id)->get();
        $industEntries = Indust::where('user_id', Auth::user()->id)->get();
        $tradeEntries = info::where('user_id', Auth::user()->id)->get();
        $copyEntries = copyinfo::where('user_id', Auth::user()->id)->get();

        $allEntries = collect();
        $allEntries = $allEntries->merge($utilEntries)
            ->merge($patEntries)
            ->merge($geoEntries)
            ->merge($industEntries)
            ->merge($tradeEntries)
            ->merge($copyEntries)
            ->sortByDesc('created_at')
            ->take(100);

        $utilEntries = UtilInfo::where('user_id', Auth::user()->id)->where('is_complete', 'Pending')->get();
        $patEntries = Patinfo::where('user_id', Auth::user()->id)->where('is_complete', 'Pending')->get();
        $geoEntries = geoinfo::where('user_id', Auth::user()->id)->where('is_complete', 'Pending')->get();
        $industEntries = Indust::where('user_id', Auth::user()->id)->where('is_complete', 'Pending')->get();
        $tradeEntries = info::where('user_id', Auth::user()->id)->where('is_complete', 'Pending')->get();
        $copyEntries = copyinfo::where('user_id', Auth::user()->id)->where('is_complete', 'Pending')->get();
        $pending = $utilEntries->count() + $patEntries->count() + $geoEntries->count() + $industEntries->count() + $tradeEntries->count() + $copyEntries->count();

        $utilEntries = UtilInfo::where('user_id', Auth::user()->id)->where('is_complete', 'approved')->get();
        $patEntries = Patinfo::where('user_id', Auth::user()->id)->where('is_complete', 'approved')->get();
        $geoEntries = geoinfo::where('user_id', Auth::user()->id)->where('is_complete', 'approved')->get();
        $industEntries = Indust::where('user_id', Auth::user()->id)->where('is_complete', 'approved')->get();
        $tradeEntries = info::where('user_id', Auth::user()->id)->where('is_complete', 'approved')->get();
        $copyEntries = copyinfo::where('user_id', Auth::user()->id)->where('is_complete', 'approved')->get();
        $approved = $utilEntries->count() + $patEntries->count() + $geoEntries->count() + $industEntries->count() + $tradeEntries->count() + $copyEntries->count();

        $utilEntries = UtilInfo::where('user_id', Auth::user()->id)->where('is_complete', 'denied')->get();
        $patEntries = Patinfo::where('user_id', Auth::user()->id)->where('is_complete', 'denied')->get();
        $geoEntries = geoinfo::where('user_id', Auth::user()->id)->where('is_complete', 'denied')->get();
        $industEntries = Indust::where('user_id', Auth::user()->id)->where('is_complete', 'denied')->get();
        $tradeEntries = info::where('user_id', Auth::user()->id)->where('is_complete', 'denied')->get();
        $copyEntries = copyinfo::where('user_id', Auth::user()->id)->where('is_complete', 'denied')->get();
        $denied = $utilEntries->count() + $patEntries->count() + $geoEntries->count() + $industEntries->count() + $tradeEntries->count() + $copyEntries->count();

        // dd($denied);
        return view('customerdash', ['allEntries' => $allEntries, 'approved' => $approved, 'pending' => $pending, 'denied' => $denied,]);
    }


}

