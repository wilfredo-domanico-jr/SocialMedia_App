<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function store(Request $request){

        // $request->validate([
        //     'profile_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        // ]);

        if($request->has('profile_img')){

            $file = $request->file('profile_img');

            $fileName = $file->getClientOriginalName();

            $destinationPath = public_path().'/images/profiles/' ;

            $fullDirectory = $destinationPath.$fileName;

            $file->move($destinationPath, $fileName);

            User::where('id', auth()->user()->id)->update([
                'profile_pic' => $fullDirectory
            ]);

            // $trimedLogo = preg_replace('/\s+/', ' ', $fileName);

            return redirect()->route('home');
        }

        return back()->with('error','error upload a data first');
    }
}
