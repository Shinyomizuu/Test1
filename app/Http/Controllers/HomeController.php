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
        $post = Post::all();

        if($usertyp =='admin'){
            return view('admin_dashboard');
        }
        elseif ($usertyp =='user'){
            return view('wiki', compact('post'));
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

    public function post_details($id)
    {   
        $post = POST::find($id);
        return view('user.post_details', compact('post'));
    }
}
