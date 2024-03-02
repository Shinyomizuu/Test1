<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">

    <title>Block bearbeiten</title>
   
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar-wrapper white-text " id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase border-bottom ">Wikimedia  
            </div>
            <div class="list-group list-group-flush my-3">
                <div class="list-group-item list-group-item-action bg-transparent active " ></div>
                <a href="" class="list-group-item list-group-item-action bg-transparent white-text fw-bold"></a>
                <a href="{{ route('wiki') }}" class="list-group-item list-group-item-action bg-transparent white-text fw-bold"><i class="fa-solid fa-house" style="margin-right:10px"></i>Home</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{url('my_post')}}" class="list-group-item list-group-item-action bg-transparent white-text fw-bold">Meine Blocks</a>
                        <a href=" {{url('create_post')}}" class="list-group-item list-group-item-action bg-transparent white-text fw-bold">Block erstellen</a>
                @endauth
                @endif
            </a>
            </div>
        </div>
        <!-- Ende Sidebar -->

        <!-- Seite -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3 white-text" id="menu-toggle"></i>
                    <h2 class="fs-2 m-3 white-text">Block bearbeiten</h2>
                </div>

                <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">

                            @if (Route::has('login'))

                            @auth
                            <x-app-layout>
                            </x-app-layout>

                            @else
                            <button type="button" class="btn btn-light "><a href="{{route('login')}}">Login</button></a>
                            <button type="button" class="btn btn-light"><a href="{{route('register')}}">Register</button></a>    
                            @endif

                            @endauth
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="shadow p-4 rounded mx-auto" style="max-width: 700px; background-color:transparent; backdrop-filter:blur(20px); border: 2px solid white;">
        
                    @if(session()-> has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{session()->get('message')}}
                        </div>
                    @endif

                    <h1 class="text-center mb-4 fs-2" style="font-weight: bold; color: white; text-shadow: 2px 2px 4px black; font-weight:700;">Block bearbeiten</h1>
                    <div class="form-container">

                        <!--Form-->
                        <form action="{{url('update_user_post', $post->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf   <!--Cross Site request Forgery sendet CSRF Token-Feld für Sicherheit vor Angreifern-->

                             <!--Item-Name -->
                            <div class="mb-3">
                                <label for="title" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Name:</label>
                                <input type="text" class="form-control" id="item_name" name="item_name" value="{{$post->item_name}}">
                            </div>

                            <!--Mc-Type-->
                            <div class="mb-3">
                                <label for="mc_item_type" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Item-Typ:</label>
                                <select class="form-select" id="mc_item_type" name="mc_item_type">
                                    <option value="blocks" style="color: black;" @if($post->mc_item_type == 'blocks') selected @endif>Block</option>
                                    <option value="tools" style="color: black;" @if($post->mc_item_type == 'tools') selected @endif>Gegenstand</option>
                                    <option value="objects" style="color: black;" @if($post->mc_item_type == 'objects') selected @endif>Objekt</option>
                                </select>   
                            </div>

                            <!--Description-->
                            <div class="mb-3">
                                <label for="description" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">Beschreibung:</label>
                                <textarea class="form-control" id="description" name="description">{{$post->description}}</textarea>
                            </div>

                            <!--Icon Form-->
                            <div class="mb-3">
                                <label for="icon" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">(Alt)Icon:</label>
                                <img src="/icons/{{$post -> icon}}" style="height:150px">
                            </div>

                            <div class="mb-3">
                                <label for="icon" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">(Neuer)Icon:</label>
                                <input type="file" class="form-control" id="icon" name="icon" style="color:grey; text-shadow: 1px 1px 1px black; font-size:20px">
                            </div>

                            
                            <!--Recipe -->
                            <div class="mb-3">
                                <label for="recipe" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">(Alt)Rezept:</label>
                                <img src="/recipes/{{$post -> recipe}}" style="height:150px;">
                            </div>

                            <div class="mb-3">
                                <label for="recipe" class="form-label" style="color: white; text-shadow: 2px 2px 4px black;">(Neues)Rezept:</label>
                                <input type="file" class="form-control" id="recipe" name="recipe" style="color:grey;  text-shadow: 1px 1px 1px black; font-size:20px">
                            </div>

                           <!--Submit -->
                            <div class="text-center"> 
                                <button type="submit" class="btn btn-light" style="color: white; text-shadow: 2px 2px 4px black;">Beitrag bearbeiten</button>
                            </div>
                        
                        </form>
                    </div>
                </div>
        </div>        
    </div>
</div>

        </div>
    </div>
    <!-- Ende der Seite-->
    </div>
    
    @include('user.user_java_scripts') 
    
    <script>
          document.addEventListener("DOMContentLoaded", function () {
            var closeButton = document.querySelectorAll(".close");
            closeButton.forEach(function (button) {
                button.addEventListener("click", function () {
                    this.parentElement.style.display = "none";
                });
            });
        });
    </script>
</body>

</html>
