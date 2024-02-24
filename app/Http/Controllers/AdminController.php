<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth; // für Überprüfung ob der User angemeldet ist

class AdminController extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }
     // Verarbeitet das Formular zum Erstellen eines neuen Posts
    public function add_post(Request $request)
    {   

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
        $post -> post_status = 'active';
        
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

    public function show_page()
    {

        $post = Post::all(); // nimmt alle daten von der Postdb
        return view('admin.show_page', compact('post')); //sendet alle Daten von post in die View
    }

    public function post_delete($id) //übergebene ID
    {
        $post = Post::find($id); // findet in den Post daten ob die Id übereinstimmt
        $post->delete();
        return redirect()->back()->with('message', 'Wurde erfolgreich gelöscht');
    }
}
