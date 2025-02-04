<?php

namespace App\Http\Controllers;
use App\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile()
    {
        return view('profile');
    }

    public function saveProfile(Request $request)
    {
        $user = UserProfile::where('user_id',auth()->user()->id)->delete();

        $new_user = new UserProfile;
        $new_user->user_id = auth()->user()->id;
        $new_user->first_name = $request->first_name;
        $new_user->middle_name = $request->middle_name;
        $new_user->last_name = $request->last_name;
        $new_user->company = $request->company;
        $new_user->address = $request->address;
        $new_user->country = $request->country;
        $new_user->city = $request->city;
        $new_user->state = $request->state;
        $new_user->zipcode = $request->zipcode;
        $new_user->contact_number = $request->contact_number;
        $new_user->save();

        return back();
    }
}
