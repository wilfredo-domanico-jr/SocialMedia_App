<?php
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Notifications\AssetMovementNotification;


function getCurrentUserProfile(){
    $userProfile = auth()->user()->profile_pic;


   return $userProfile;
}





