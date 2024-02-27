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