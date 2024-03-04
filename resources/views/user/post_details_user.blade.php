<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->item_name}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <style>
        /* Custom CSS für die Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px; 
            background-color: #f8f9fa; 
            padding-top: 20px; /* Platz oben in der Sidebar */
            display: flex;
            flex-direction: column;

            align-items: center;
        }
        .col-md-3 img{
            max-height:140px;
            max-width:140px;
        }

        .col-md-3 button{
            margin-bottom: 10px;
        }

      
        .content {
            margin-left: 250px; /* Breite der Sidebar */
            padding: 20px; /* Platz um den Inhalt */
        }
        
         /* Benutzerdefinierte Stil für die Tabelle */

     
         table {
            border-collapse: collapse; /* Zusammenführen der Zellengrenzen */
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd; /* Rahmen um Zellen */
            text-align: center; /* Zentrieren des Inhalts */
            padding: 8px;
        }

        .item-table {
            border: 1px solid #dddddd; /* Border-Radius für die col-4, in der sich die Tabelle befindet */
            border-radius: 3px !important;
            padding: 10px; /* Innenabstand für die col-4 */
        }
        
        .dark-mode {
            background-color: #121212;
            color: #ffffff;
        }

        .dark-mode .sidebar {
            background-color: #333333;
        }

        .dark-mode table {
            border-color: #ffffff;
        }

        /* Responsives Verhalten für die Sidebar */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                margin-bottom: 30px;
                height: auto;
                position: relative;
            }
            .content {
                margin-left: 0;
            }

            .col-md-3 img{
                top:0%;
                max-height:100px;
                max-width:100px;
            }
            
            .space-content{
                width:40px;
            }

            .item-table {
                border: none !important;
                border-radius: 3px !important;
            }
        }

       
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <img src="{{asset('/assets/earthlogo.gif')}}" class="mx-auto d-block">
                <hr>
                <button onclick="toggleDarkMode()">Dark Mode</button> <!-- Dark Mode Schalter -->
            </div>

        
            <!-- Content -->
            <div class="col-md-9 content">
                <h1>{{$post->item_name}} von {{$post->name}}</h1>
                <hr>
                <p>Hier finden Sie Informationen zu den Blöcken/Gegenstände/Item-Typen. Beachten Sie dabei, dass dort nur die wichtigsten Informationen
                    stehen die Sie für das Minecraft spielen gebrauchen könnten. Es werden Ihnen auch notwendige Rezepte angezeigt, die Sie für das Craften von Gegenstände / Blöcke gebrauchen werden.
                </p>

                <div class="row">
                    <div class="col-4">
                        <h4>{{$post->item_name}}</h4>
                        <p>{{$post->description}}</p>
                    </div>

                    <div class="col-4 space-content">
                    </div>

                    <div class="col-4 item-table">
                        <table>
                        <div class="test text-center"><img style="margin-bottom: 20px; height:200px; width:200px;" src="/icons/{{$post->icon}}"></div>
                            <thead>
                                <tr>
                                    <th>Name: </th>
                                    <th>{{$post->item_name}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item Typ: </td>
                                    <td>{{$post->mc_item_type}}</td>
                                </tr>

                                <tr>
                                    <td>Blocker: </td>
                                    <td>{{$post->name}}</td>
                                </tr>
                                
                                <tr>
                                    <td>Status: </td>
                                    <td>{{$post->post_status}}</td>
                                </tr>
                               
                                <tr>
                                    <td>Erstellungsdatum: </td>
                                    <td>{{$post->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Item Typ: </td>
                                    <td>{{$post->updated_at}}</td>
                                </tr>
                              
                               
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <hr>

                <h3>Rezept</h3>
                <p>
                    Ein Minecraft-Rezept ist eine Anleitung, die angibt,
                    welche spezifischen Gegenstände und in welcher Anordnung sie platziert werden müssen,
                    um ein bestimmtes Objekt oder eine bestimmte Aktion im Spiel zu erstellen oder auszuführen.
                    Falls die Anleitung leer ist, heißt es dass man es nicht craften kann oder es in der Minecraft-Welt zu finden ist.
                </p>

                <div class="row">
                    <div class="col-5"><img style="margin-bottom: 20px; height:200px; width:350px;" src="/recipes/{{$post->recipe}}">
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>   
</body>
</html>
