<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;

class SampleController extends Controller
{
    public function login()
    {
        $userName = URL::getDefaultParameters()['user'];

        return view('auth.login', [
            'userName' => $userName
        ]);
    }


    public function home()
    {
        $userName = URL::getDefaultParameters()['user'];

        return view('sample.home', [
            'userName' => $userName
        ]);
    }
}
