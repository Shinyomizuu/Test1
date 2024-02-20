<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {   

        $usertyp = Auth() -> user() -> usertyp;
        if($usertyp =='admin'){
            return view('admin.dashboard');
        }
        else{
            return view('user.dashboard');
        }
    }
}
