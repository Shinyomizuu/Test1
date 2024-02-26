<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
   
    <title>Wiki</title>

    <style>
        /* Hintergrundbild für die Karte festlegen */
        

        .col-sm-1{
            min-height: 100px;
            min-width: 100px;
            max-width:100px;
            border-radius: 25px;
            background-size: cover; /* Das Hintergrundbild wird skaliert, um den gesamten verfügbaren Platz auszufüllen */
            background-position: center; /* Das Hintergrundbild wird zentriert */
            margin-left:20px;
            position: relative; /* Relative Position für Overlay */
            transition: transform 0.3s ease; /* Übergangseffekt für Transform */
        }
        
        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Standardmäßig transparent */
            color: white;
            padding: 10px; /* Innenabstand */
            border-bottom-left-radius: 25px; /* Border-Radius für untere linke Ecke */
            border-bottom-right-radius: 25px; /* Border-Radius für untere rechte Ecke */
            opacity: 0; /* Standardmäßig unsichtbar */
            transition: opacity 0.3s ease; /* Übergangseffekt für Opazität */
            text-shadow: 2px 2px 4px black; /* Schwarzer Schatten für Text */
            text-align: center; /* Zentriert den Text */
            font-size: 12px; /* Kleinerer Text */
        }

        .col-sm-1:hover {
            transform: translateY(-10px); /* Hochbewegen bei Hover */
            animation: bounce 0.5s infinite alternate; /* Bounce-Effekt */
        }

        .col-sm-1:hover .overlay {
            opacity: 1; /* Bei Hover undurchsichtig machen */
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">Wikimedia  
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active" ></a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"></a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Platzhalter</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Platzhalter</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Platzhalter</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Platzhalter</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
            </a>
            </div>
        </div>
        <!-- Ende Sidebar -->

        <!-- Seite -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-3">ITEMS</h2>
                </div>

                <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown ">

                            @if (Route::has('login'))

                            @auth
                            <x-app-layout>
                            </x-app-layout>

                            @else
                            <button><a href="{{route('login')}}">Login</button></a>
                            <button><a href="{{route('register')}}">Register</button></a>    
                            @endif

                            @endauth
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="row">
            @foreach($post as $post)
                <div class="col-sm-1"  style="background-image: url('/icons/{{$post->icon}}')" ><a href="{{url('post_details', $post->id)}}">
                    <div class="overlay">
                        <p>{{$post->item_name}}</p>
                    </div>
                    </a>        
                </div>
            @endforeach
            </div>

           
        </div>
    </div>
    <!-- Ende der Seite-->
    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="https://kit.fontawesome.com/6e287c5267.js" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>
