<?php

namespace App\Http\Controllers;

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


            $file->move($destinationPath, $fileName);

            $trimedLogo = preg_replace('/\s+/', ' ', $fileName);

            dd($trimedLogo);

            // $isTrue = GLOBALS::where('FIELD','LOGO')->first();
            // $trimedLogo = preg_replace('/\s+/', ' ', $fileName);

            // if($isTrue){
            //     GLOBALS::where('FIELD','LOGO')
            //             ->update(['VALUE' => $trimedLogo]);
            // }else{
            //     GLOBALS::create([
            //         'FIELD' => 'LOGO',
            //         'VALUE' => $trimedLogo
            //     ]);
            // }

            // return redirect()
            //       ->route('accountSettings.index')
            //       ->with('success','logo updated');
        }

        return back()->with('error','error upload a data first');
    }
}
