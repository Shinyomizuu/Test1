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
        //nur Post die angenommen worden sind werden angezeigt.
        $usertyp = Auth() -> user() -> usertyp;
        $post = Post::where('post_status','=','active')->get();

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
        $post = Post::where('post_status','=','active')->get();

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

    public function create_post(){
        return view('user.upost');
    }

    public function user_post(Request $request){
        $user = Auth()->user(); //speichert Userdaten in der variabel
        $user_id = $user->id;
        $user_name = $user->name;
        $user_type = $user-> usertyp;

        // Erstellen einer neuen Post-Instanz
        $post = new Post;

        // Befüllen der Post-Instanz mit den Daten aus dem Formular-Reques
        $post -> item_name = $request-> item_name; //db info -> form info
        $post -> mc_item_type = $request-> mc_item_type;
        $post -> description = $request-> description;
        $post -> post_status = 'pending';
        
        $post -> user_id = $user_id; 
        $post -> name = $user_name;
        $post -> user_type = $user_type;

         // Speichern des Icons
        $icon = $request-> icon;

        if($icon)
        {
            $iconname=time().'.'.$icon -> getClientOriginalExtension(); //sorgt dafür wenn mehre Benutzer datein hochladen wollen die eindeutig bleiben, dass es nicht zu Konflikte kommt
            $request -> icon -> move('icons', $iconname);// Verschieben des Bildes in den "icons"-Ordner
            $post-> icon = $iconname; // Speichern des Dateinamens in der Datenbank
        }
        
        //Speichern rezept
        $recipe = $request-> recipe;

        if($recipe)
        {
            $recipename=time().'.'.$recipe -> getClientOriginalExtension();
            $request -> recipe -> move('recipes', $recipename);
            $post-> recipe = $recipename; 
        }
        
        $post -> save();

        return redirect()->back()->with('message','Block wurde erfolgreich erstellt');
        return redirect()->back();
    }

    public function my_post(){
        $user = Auth::user();
        $user_id = $user->id;

        //wenn es die id mit der id in der datenbank passt dann in post storen
        $post = POST::where('user_id','=',$user_id)->get();
        return view('user.my_post',compact('post'));
    }

    public function post_details_user($id){
        $post = POST::find($id);
        return view('user.post_details_user', compact('post'));
    }

    public function my_pos_del($id){
        $post_del= POST::find($id);
        $post_del->delete();
    
        return redirect()->back();
    }

    public function user_post_update($id){
        $post = POST::find($id);

        return view('user.post_update', compact('post'));
    }

    public function update_user_post (Request $request, $id) {
        $post = POST::find($id);

        $post-> item_name = $request -> item_name;
        $post-> mc_item_type = $request -> mc_item_type;
        $post-> description = $request -> description;

        $icon = $request -> icon;


        if ($request->hasFile('icon')) {
            // Wenn ja, das hochgeladene Icon erhalten
            $icon = $request->file('icon');
            // Einen eindeutigen Dateinamen generieren, um Konflikte zu vermeiden
            $iconname = time().'.'.$icon->getClientOriginalExtension();
            // Das Icon in das Verzeichnis "icons" verschieben
            $icon->move('icons', $iconname);
            // Den Dateinamen des Icons in der Datenbank speichern
            $post->icon = $iconname;
        }
    
        if ($request->hasFile('recipe')) {
    
            $recipe = $request->file('recipe');
    
            $recipename = time().'.'.$recipe->getClientOriginalExtension();
    
            $recipe->move('recipes', $recipename);
        
            $post->recipe = $recipename;
        }
    
        // Die aktualisierten Daten des Posts in der Datenbank speichern
        $post->save();
        
        return redirect()->back()->with('message', 'Post wurde erfolgreich geupdated');
    }
    
    public function search(Request $request)
    {
        $search = $request->input('search');

        // Suchanfrage nur für autorisierte Benutzer
        $post = Post::where('item_name', 'LIKE', "%$search%")
                    ->where('post_status', 'active')
                    ->get();

        return view('wiki', compact('post'));
    }

}
