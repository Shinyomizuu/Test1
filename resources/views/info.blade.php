<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="https://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <title>Minecraft-Website</title>
    
</head>
<body>
    <!--Navbar-->
    <header class="header">
        <nav class="navbar">
            <a href="#">Wiki</a>
            <a href="#">Support</a>
        </nav>

        <a href="#" class="logo"><img src="{{asset('/assets/minecraft-title.png')}}"></a>
        <nav class="navbar">
            <a href="#"></a>
            <a href="#"></a>
            <a href="#">Test</a>
            <a href="#">Test</a>
        </nav>
        
    </header>
    <!--End Navbar-->

    <!--Section Paralax Effect-->
    <div class= "wrapper" > 

        <!--Home (Paralax)-->
        <section class="home">
            <img src="{{asset('/assets/Fourth_Layer.png')}}" class="Fourth_Layer" >
            <img src="{{asset('/assets/Third_Layer.png')}}" class="Third_Layer">         
            <img src="{{asset('/assets/sonne2.png')}}" class="Sun_Layer">  
            <img src="{{asset('/assets/Page1 - Kopie.png')}}" class="Second_Layer">
            <img src="{{asset('/assets/First_Layer.png')}}" class="First_Layer">
        
        </section>
        <!--Ende Home (Paralax)-->

        <!--ÜbergangsLayer-->
        <section class="pre">   
            <img src="{{asset('/assets/PreLayer.png')}}" class="pre-image">
        </section>
        <!--Ende ÜbergangsLayer-->

        <!--Section Carousel-->
        <section class="info_section">
            <div class="row">
                <div class="col-md-12 text-center d-flex align-items-center" >
                    <h2 >Erforsche die Tiefen</h2>
                </div>
                <div class="col-md-12 text-center d-flex align-items-center">
                    <p>
                        Minecraft ist ein populäres Sandbox-Spiel.
                        In einer offenen Welt können Sie Blöcke abbauen und platzieren, um ihre eigenen Kreationen zu erschaffen. 
                        Das Spiel bietet kreative Freiheit, Überlebensherausforderungen und verschiedene Spielmodi für Einzelspieler und Mehrspielererlebnisse.
                    </p>
                </div>
            </div>
            <div class="carousel slide container-fluid" id="carouselDemo" data-bs-wrap="true" data-bs-ride="carousel">
                <div class="carousel-inner c-inner">
                    <div class="carousel-item active" data-bs-interval="3000"> 
                        <img src="{{asset('/assets/Cave.png')}}" class="w-100 c-img">
                        <div class="carousel-caption">
                            <h5>Höhle</h5>
                            <p>Erforsche Höhlen, sammle Resourcen um in die Tiefen der Minecraft Welt zu tauchen</p>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{asset('/assets/nether.jpg')}}" class="w-100 c-img">
                        <div class="carousel-caption">
                            <h5>Nether</h5>
                            <p>Bekämpfe starke Monster und mache dich bereit auf das Ende</p>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{asset('/assets/end.jpg')}}" class="w-100 c-img">
                        <div class="carousel-caption">
                            <h5>End</h5>
                            <p>Besiege den Drachen und beende dein Abenteuer</p>
                        </div>
                    </div>
                </div>
            
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDemo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDemo" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <div class="carousel-indicators">
                    <button type="button" class="active" data-bs-target="#carouselDemo" data-bs-slide-to="0">
                        <img src="{{asset('/assets/Cave.png')}}">
                    </button>
                    <button type="button" data-bs-target="#carouselDemo" data-bs-slide-to="1">
                        <img src="{{asset('/assets/nether.jpg')}}">
                    </button>
                    <button type="button" data-bs-target="#carouselDemo" data-bs-slide-to="2">
                        <img src="{{asset('/assets/end.jpg')}}">
                    </button>
                </div>
            </div>
        </section>
        <!--Ende Section Carousel-->

        <!--Player -->
        <section class="player-layer">
            <div class="container card-container">
                <div class="row gy-3">
                    <div class="col-md-12 text-center d-flex align-items-center spiel-titel">
                        <h2>Spielmodis</h2>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="{{asset('/assets/Steve.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Einzelspieler</h5>
                            <p>Spiele alleine und erfrosche die Welt von Minecraft</p>
                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="{{asset('/assets/Steve&Alex.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">Mehrspieler</h5>
                            <p>Habe Spaß mit deinen Freunden </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card">
                            <img src="{{asset('/assets/Minecraft-Creeper-PNG.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5 class="card-title">Mods</h5>
                            <p>Erweitere deine Spielmöglichkeiten mit Mods</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        <!--Ende Player-->
        
        <!--WeltGallery-->
        <section class="world-gallery">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="{{asset('/assets/Oberwelt.png')}}" class="d-block w-100 c-img">
                    </div>

                <div class="carousel-item active">
                    <img src="{{asset('/assets/SeaTemple.png')}}" class="d-block w-100 c-img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assets/Kliff.png')}}" class="d-block w-100 c-img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assets/Inseln.png')}}" class="d-block w-100 c-img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assets/Asia.png')}}" class="d-block w-100 c-img">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/assets/Aqua.png')}}" class="d-block w-100 c-img">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!--Ende WeltGallery-->

        <!--Plattform-->
        <section class="platformen">
            <div class="row gy-6">     
                <div class="col-md-12 text-center d-flex align-items-center">
                    <h2>Plattformen</h2>
                </div>

                <div class="col-md-12 text-center d-flex align-items-center">
                    <p>Minecraft ist auf verschiedenen Plattformen verfügbar und kann bequem über offizielle Downloadseiten heruntergeladen werden.
                        Egal ob Sie auf einem PC, einer Konsole oder einem mobilen Gerät spielen möchten, Minecraft steht Ihnen auf unterschiedlichen Plattformen zur Verfügung.
                        Der Download von Minecraft ist einfach und unkompliziert – besuchen Sie einfach die offizielle Website oder die entsprechenden App-Stores, um das Spiel auf Ihrer bevorzugten Plattform zu installieren.
                    </p>
                </div>

                <div class="col-md-4 d-flex align-items-center  platform-item">
                    <i class="fa-solid fa-desktop"></i>
                    <h5>WINDOW/MAC/LINUX</h5>
                </div>

                <div class="col-md-4 d-flex align-items-center platform-item">
                    <i class="fa-brands fa-android"></i>
                    <h5>ANDROID</h5>
                </div>
                <div class="col-md-4 d-flex align-items-center platform-item">
                    <i class="fa-brands fa-apple"></i>
                    <h5>IOS</h5>
                </div>

                <div class="col-md-4 d-flex align-items-center platform-item">
                    <i class="fa-brands fa-xbox"></i>
                    <h5>XBOX</h5>
                </div>

                <div class="col-md-4 d-flex align-items-center platform-item">
                    <i class="fa-brands fa-playstation"></i>
                    <h5>PLAYSTATION</h5>
                </div>
                <div class="col-md-4 d-flex align-items-center platform-item">
                    <i class="fa-solid fa-gamepad"></i>
                    <h5>NINTENDO</h5>
                </div>
            </div>
        </section>
        <!--Ende Platform-->

        <section class="last-prelayer">
            
        </section>


        <section class="cube">
            <h2>Einblicke in die Welt</h2>
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper-pic1"></div>
                <div class="swiper-slide swiper-pic2"></div>
                <div class="swiper-slide swiper-pic3"></div>
                <div class="swiper-slide swiper-pic4"></div>
                ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
            
            
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        
        </section>



        <!--Footer-->
        <section class="foot">
            <div class="container-fluid text-dark">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('/assets/Mojang-Logo.png')}}">
                        <p class="mb-0">Straße: Maria Skolgata 83</p>
                        <p class="mb-0">Email: mojang@example.com</p>
                        <p class="mb-0">Phone: +1 234 567 890</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <h6>Kontakt</h6>
                        <p class="mb-0">Minecraft Support</p>
                        <p class="mb-0">Email: mojangsupport@example.com</p>
                        <p class="mb-0">Phone: +1 234 567 890</p>
                    </div>
                    
                    <div class="col-md-4 text-center">
                        <h6>Spiele</h6>
                        <ul class="list-unstyled">
                            <p class="mb-0">Minecraft</p>
                            <p class="mb-0">Minecraft Dungeons</p>
                            <p class="mb-0">Minecraft Legends</p>
                            <p class="mb-0">Minecraft Education</p>
                        </ul>
                    </div>
            
                    <div class="col-md-12 text-center">
                        <h6>Folge uns</h6>
                        <a href="#" class="btn btn-social mx-1 btn-light"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-social mx-1 btn-light"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-social mx-1 btn-light"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="btn btn-social mx-1 btn-light"><i class="fab fa-instagram"></i></a>
                    </div>

                    <div class="col-md-12 text-center ">
                        <p class="text-white">&copy; 2024 Copyright. Designed by Martin Le.</p>
                    </div>
                </div>
    
            </div>
        </section>
    
        <!--Ende Footer-->

    <script src="https://kit.fontawesome.com/6e287c5267.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                    
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script> 
        

</body>

<footer>
    
</footer>

</html>
