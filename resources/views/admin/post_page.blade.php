
<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.header')
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
       @include ('admin.sidebar')
        <!-- Ende Sidebar -->

        <!-- Seite -->
        <div id="page-content-wrapper">
            @include ('admin.nav')

            @include ('admin.form_evaluation')
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
    </script>
</body>

</html>