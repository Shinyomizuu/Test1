
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
   
    <title>Wiki</title>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">Wikimedia  
        </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active" ></a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">News Erstellen</a>
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
        <div id="page-content-wrapper" stlye="background-image: url ('{{asset('/assets/minecraft-title.png')}}')">
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