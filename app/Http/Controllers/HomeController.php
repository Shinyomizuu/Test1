<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\User;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{

    //wiki
    public function index()
    {  
        $usertyp = Auth() -> user() -> usertyp;
        if($usertyp =='admin'){
            return view('admin_dashboard');
        }
        elseif ($usertyp =='user'){
            return view('wiki');
        }
        else{
            return redirect()->back();
        }
    }

    public function wikihome()
    {
        $post = Post::all();

        return view('wiki', compact('post'));
    }

    public function homepage()
    {
        return view('info');
    }
}
