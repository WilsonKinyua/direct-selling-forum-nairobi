<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
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

    public function aboutUs()
    {
        return view('public.about-us');
    }

    public function program()
    {
        return view('public.program');
    }

    public function speakers()
    {
        $speakers = Speaker::all();
        return view('public.speakers', compact('speakers'));
    }

    public function contactUs()
    {
        return view('public.contact-us');
    }

    public function createContactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactUs::create($request->all());

        return redirect()->back()->with('message', 'Message sent successfully. We will get back to you shortly.');
    }
}
