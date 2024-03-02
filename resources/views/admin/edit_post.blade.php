<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')

    <style>
        /* Allgemeine Anpassungen für das Formular */
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: white;
        }
        form .img{
            max-width:400px
        }

        /* Stil für die Formular-Labels */
        label {
            font-weight: bold;
            color: white;

            margin-bottom: 5px;
            display: block;
        }

        /* Stil für die Formular-Textfelder */
        input[type="text"],
        .form-select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: #555;
            color: white;
            font-size: 16px;
        }

        h2 {
            font-weight: bold;
            color: white; /* Textfarbe */
        
            margin-bottom: 20px; /* Abstand nach unten */
            text-align: center; /* Zentrierte Ausrichtung */
        }

        /* Stil für das Beschreibungsfeld */
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: #666; /* Hintergrundfarbe des Beschreibungsfeldes */
    
            font-size: 16px;
            resize: vertical; /* Erlaubt vertikales Scrollen, wenn der Textbereich zu groß ist */
            min-height: 100px; /* Mindesthöhe des Textbereichs */
        }

        .description-titel{
            color:white;
        }
        .description-tag{
            color:black;
        }

        /* Stil für den Formular-Submit-Button */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Änderung des Hover-Effekts für den Submit-Button */
        button[type="submit"]:hover {
            background-color: #0056b3;
        }

      
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- Ende Sidebar -->

        <!-- Seite -->
        <div id="page-content-wrapper">
            @include('admin.nav')

            @if(session()-> has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session()->get('message')}}
            </div>
            @endif

            <form action="{{url('update_post', $post ->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <h2>Post Bearbeiten</h2>
                <div class="mb-3">
                    <label for="item_name">Name:</label>
                    <input type="text" id="item_name" name="item_name" value="{{$post->item_name}}"  >
                </div>
                <div class="mb-3">
                    <label for="mc_item_type">Item-Typ:</label>
                    <select id="mc_item_type" name="mc_item_type" class="form-select">
                            <option value="blocks"  @if($post->mc_item_type == 'blocks') selected @endif>Block</option>
                            <option value="tools"  @if($post->mc_item_type == 'tools') selected @endif>Gegenstand</option>
                            <option value="objects"  @if($post->mc_item_type == 'objects') selected @endif>Objekt</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="description-titel">Beschreibung:</label>
                    <textarea id="description" name="description" class="description-tag">"{{$post->description}}"</textarea>
                </div>

                <!--Icon-->
                <div>
                    <label>Alt Icon</label>
                    <img src="/icons/{{$post -> icon}}">
                </div>

                <div class="mb-3">
                    <label for="icon">(Alt)Icon:</label>
                    <input type="file" id="icon" name="icon">
                </div>

                <!--Rezept-->
                <div>
                    <label>Alt Rezept</label>
                    <img src="/recipes/{{$post -> recipe}}" class="test">
                </div>

                <div class="mb-3">
                    <label for="recipe">(Alt)Rezept:</label>
                    <input type="file" id="recipe" name="recipe">
                </div>
                <div class="text-center">
                    <button type="submit">Beitrag </button>    
                </div>
            </form>
        </div>

    </div>
    <!-- Ende der Seite-->

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="https://kit.fontawesome.com/6e287c5267.js" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

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
