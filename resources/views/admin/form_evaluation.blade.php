<div class="container">
        <div class="">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            @endif
            <h1 class="text-center mb-4">Block erstellen</h1>
            <div class="form-container">
                <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf   <!--Cross Site request Forgery sendet CSRF Token-Feld für Sicherheit vor Angreifern-->
                    <div class="mb-3">
                        <label for="title" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="item_name" name="item_name">
                    </div>
                    <div class="mb-3">
                        <label for="mc_item_type" class="form-label">Item-Typ:</label>
                        <select class="form-select" id="mc_item_type" name="mc_item_type">
                            <option value="blocks">Block</option>
                            <option value="tools">Gegenstand</option>
                            <option value="objects">Objekt</option>
                        </select>   
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Beschreibung:</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
    
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon:</label>
                        <input type="file" class="form-control" id="icon" name="icon">
                    </div>
    
                    <div class="mb-3">
                        <label for="recipe" class="form-label">Rezept:</label>
                        <input type="file" class="form-control" id="recipe" name="recipe">
                    </div>
                    <div class="text-center"> 
                        <button type="submit" class="btn btn-light">Beitrag erstellen</button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>