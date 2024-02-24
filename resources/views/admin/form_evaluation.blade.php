<div class="container">
    <div class="border border-dark shadow p-4 rounded mx-auto" style="max-width: 700px; background-image: url('../assets/stonebg.jpg');">
    @if(session()-> has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session()->get('message')}}
            </div>
            @endif
        <h1 class="text-center mb-4 fs-2" style="font-weight: bold; color: white; text-shadow: 2px 2px 4px black;">Block erstellen</h1>
        <div class="form-container">
            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                @csrf   <!--Cross Site request Forgery sendet CSRF Token-Feld für Sicherheit vor Angreifern-->
                <div class="mb-3">
                    <label for="title" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Name:</label>
                    <input type="text" class="form-control" id="item_name" name="item_name" style="font-weight: bold;">
                </div>
                <div class="mb-3">
                    <label for="mc_item_type" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Item-Typ:</label>
                    <select class="form-select" id="mc_item_type" name="mc_item_type">
                        <option value="blocks" style="color: black;">Block</option>
                        <option value="tools" style="color: black;">Gegenstand</option>
                        <option value="objects" style="color: black;">Objekt</option>
                    </select>   
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Beschreibung:</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="icon" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Icon:</label>
                    <input type="file" class="form-control" id="icon" name="icon" style="color: white; text-shadow: 2px 2px 4px black;">
                </div>

                <div class="mb-3">
                    <label for="recipe" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Rezept:</label>
                    <input type="file" class="form-control" id="recipe" name="recipe" style="color: white; text-shadow: 2px 2px 4px black;">
                </div>
                <div class="text-center"> 
                    <button type="submit" class="btn btn-light" style="color: white; text-shadow: 2px 2px 4px black;">Beitrag erstellen</button>
                </div>
               
            </form>
        </div>
    </div>
</div>
