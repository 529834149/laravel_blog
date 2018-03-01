<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
//use App\User;
use Auth;
use Log;
use Exception;
use Illuminate\Http\Request;
use Socialite;
use SocialiteProviders\Weixin\Provider;

class WeixinController extends Controller{
    public function redirectToProvider(Request $request)
    {
        dd(Socialite::with('weixin'));
        return Socialite::with('weixin')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        $user_data = Socialite::with('weixin')->user();
        var_dump($user_data);
        //todo whatever
    }
}

