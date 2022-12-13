<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();
        return view('public.index', compact('speakers'));
    }

    public function discoverNairobi()
    {
        return view('public.discover-nairobi');
    }

    public function sightseeing()
    {
        return view('public.sightseeing');
    }

    public function restaurants()
    {
        return view('public.restaurants');
    }

    public function shopping()
    {
        return view('public.shopping');
    }
}
