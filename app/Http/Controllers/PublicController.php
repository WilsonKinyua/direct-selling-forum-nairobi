<?php

namespace App\Http\Controllers;

use App\Mail\ThankYouForRegistering;
use App\Models\ContactUs;
use App\Models\Country;
use App\Models\Speaker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

    public function userAccount()
    {
        $countries = Country::all();
        return view('public.user-account', compact('countries'));
    }

    public function userAccountUpdate(Request $request)
    {
        $request->validate([
            'attendee_type' => 'required',
            'title' => 'required',
            'name' => 'required',
            'country_id' => 'required',
            'organization' => 'required',
            'phone_number' => 'required|min:10',
        ]);

        $user = User::find(auth()->user()->id);
        abort_if(!$user, 404, 'Account not found!');
        $user->attendee_type = $request->attendee_type;
        $user->title = $request->title;
        $user->name = $request->name;
        $user->country_id = $request->country_id;
        $user->organization = $request->organization;
        $user->phone_number = $request->phone_number;
        $user->update();
        
        // send email to user
        Mail::to($user->email)->send(new ThankYouForRegistering($user));

        // log out user
        auth()->logout();
        
        return redirect()->route('index');
    }
}
