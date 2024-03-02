<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="{{asset('css/homestyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">
    <title>Wiki</title>

    <style>

        .sidebar-heading {
            border-bottom: none; /* Entfernt die untere Linie */
        }

        .list-group-item {
            display: flex;
            align-items: center; /* Zentriert die Inhalte vertikal */
            justify-content: flex-start; /* Ausrichtung der Inhalte nach links */
            border-bottom: none; /* Entfernt die untere Linie */
        }
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
    
        .col-sm-1 .icon1 {
            padding-top:10px;
            font-size: 24px;
            color: rgba(255, 255, 255, 0); /* Standardmäßig unsichtbar */
            transition: color 0.3s ease; /* Übergangseffekt */
        }
        .col-sm-1:hover .icon1 {
            color: #FFD43B; /* Bei Hover sichtbar machen */
        }

        .col-sm-1 .icon2 {
            padding-top:10px;
            margin-left:25px;
            font-size: 24px;
            color: rgba(255, 255, 255, 0); /* Standardmäßig unsichtbar */
            transition: color 0.3s ease; /* Übergangseffekt */
        }
        .col-sm-1:hover .icon2 {
            color: #FF0000; /* Bei Hover sichtbar machen */
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
            <div class="sidebar-wrapper white-text " id="sidebar-wrapper">
                <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase" data-aos="fade-up" data-aos-delay="100">Wikimedia  
                </div>
                <div class="list-group list-group-flush my-3 border-top">
                    <div class="list-group-item list-group-item-action bg-transparent active" ></div>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent white-text fw-bold"></a>
                    @if (Route::has('login'))
                        @auth
                        <a href="{{ route('wiki') }}" class="list-group-item list-group-item-action bg-transparent white-text fw-bold" data-aos="fade-up" data-aos-delay="100"><i class="fa-solid fa-house" style="margin-right:10px"></i>Home </a>
                        <a href="{{url('my_post')}}" class="list-group-item list-group-item-action bg-transparent white-text fw-bold" data-aos="fade-up" data-aos-delay="200"><i class="fa-solid fa-address-book" style="margin-right:10px"></i>Meine Blocks</a>
                        <a href="{{url('create_post')}}" class="list-group-item list-group-item-action bg-transparent white-text fw-bold" data-aos="fade-up" data-aos-delay="300"> <i class="fa-solid fa-book" style="margin-right:10px"></i>Block erstellen</a>
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
                    <i class="fas fa-align-left fs-4 me-3 white-text" id="menu-toggle" data-aos="fade-right" data-aos-delay="200"></i>
                    <h2 class="fs-2 m-3 white-text" data-aos="fade-right" data-aos-delay="200">Meine Blocks</h2>
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

            @if(session()-> has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session()->get('message')}}
            </div>
            @endif
            
            
            <div class="row">
            @foreach($post as $post)
                <div class="col-sm-1"  style="background-image: url('/icons/{{$post->icon}}')" data-aos="zoom-in" data-aos-delay="500" ><a href="{{url('post_details_user', $post->id)}}">
                    <div class="overlay">
                        <p>{{$post->item_name}}</p>
                    </div>
                    </a> 
                    <a href="{{url('user_post_update',$post->id)}}"><i class="fa-solid fa-screwdriver-wrench icon1"></i></a>
                    <a href="{{url('my_pos_del',$post->id)}}" ><i class="fa-solid fa-trash icon2"></i></a>
                </div>
            @endforeach
            </div>

           
        </div>
    </div>
    <!-- Ende der Seite-->
    </div>
    
    @include('user.user_java_scripts') 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration:700,
        });
    </script>
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
