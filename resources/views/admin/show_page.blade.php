
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @include('admin.header')

    <style type="text/css">
        .title {
            font-size: 1.5rem;
            font-weight: bold;
            padding: 20px;
            color: black;
            text-align: center;
        }

        .table_wrapper {
            width: 100%;
            overflow-x: auto;
        }

        .table_design {
            width: 100%;
            max-width: 1200px; /* Maximalbreite der Tabelle */
            margin: 20px auto;
            border: 1px solid #ccc;
            border-collapse: collapse;
        }

        .table_design th,
        .table_design td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .icon_design,
        .recipe_design {
            max-width: 100px;
            height: auto;
            padding: 5px;
        }

        .text-center {
            text-align: center;
        }

        /* Stil für das Schließen-Icon */
        .close {
            font-size: 1.2rem;
            position: absolute;
            right: 10px;
            top: 5px;
            color: #000;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        @include ('admin.sidebar')
        <!-- Ende Sidebar -->

        <!-- Seite -->
        <div id="page-content-wrapper">
            @include ('admin.nav')

            @if(session()-> has('message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session()->get('message')}}
            </div>
            @endif
            <h1 class="title">Alle Post</h1>

            <div class="table_wrapper">
                <table class="table_design">
                    <thead>
                        <tr>
                            <th>Block</th>
                            <th>Mc_Item_Typ</th>
                            <th>Ersteller</th>
                            <th>Beschreibung</th>
                            <th>Status</th>
                            <th>Usertyp</th>
                            <th>Icon</th>
                            <th>Rezept</th>
                            <th>Bearbeiten</th>
                            <th>Löschen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Post von Controller nehmen -->
                        @foreach($post as $post)
                        <tr>
                            <td>{{$post->item_name}}</td>
                            <td>{{$post->mc_item_type}}</td>
                            <td>{{$post->name}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->post_status}}</td>
                            <td>{{$post->user_type}}</td>
                            <td class="text-center">
                                <img class="icon_design" src="icons/{{$post->icon}}">
                            </td>
                            <td class="text-center">
                                <img class="recipe_design" src="recipes/{{$post->recipe}}">
                            </td>

                            <td>
                                <a href="{{url('edit_post', $post->id)}}" class="btn btn-success">Bearbeiten</a>
                            </td>
                            <td>
                                <!--post id übergeben-->
                                <a href="{{url('delete_post', $post->id)}}" class="btn btn-danger" onclick ="confirmation(event)">Löschen</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
        // Warte darauf, dass das DOM vollständig geladen ist
        document.addEventListener("DOMContentLoaded", function () {
             // Selektiere alle Elemente mit der Klasse "close"
            var closeButton = document.querySelectorAll(".close");
            // Für jedes gefundene "close"-Element füge einen Klick-Event-Handler hinzu
            closeButton.forEach(function (button) {
                   // Wenn ein "close"-Button geklickt wird, wird die folgende Funktion ausgeführt:
                button.addEventListener("click", function () {
                    this.parentElement.style.display = "none";
                });
            });
        });


        function confirmation(event){
    // Stopp Button von der Standardaktion (hier dem Navigieren zur URL)
    event.preventDefault();

    // Holen der URL aus dem Attribut 'href' des angeklickten Links
    var urlToRedirect = event.currentTarget.getAttribute('href');

    // Anzeigen des Bestätigungs-Popups mit SweetAlert
    swal({
        title: "Sind Sie sicher, dass Sie den Post löschen möchten?", 
        text: "Sie können diese Aktion nicht rückgängig machen.",
        icon: "warning", // Ändern von "Achtung" zu "warning"
        buttons: ["Abbrechen", "OK"],
        dangerMode: true, 
        // Timer für automatisches Schließen des Popups nach 5 Sekunden
        timer: 5000,
        // Schließen des Popups, wenn der Timer abläuft
        closeOnTimer: true
    })
    .then((willCancel) => {
        // Wenn der Benutzer "Abbrechen" wählt, wird nichts gemacht
        // Wenn der Benutzer "OK" wählt, wird die URL aufgerufen, um den Post zu löschen
        if(willCancel) {
            window.location.href = urlToRedirect;
        }
    });
}
    </script>
</body>

</html>
