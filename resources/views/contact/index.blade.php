<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat en ligne</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        input,
        textarea {
            margin-bottom: 10px;
        }

        #htmlContent {
            height: 80vh;
            overflow-y: auto;
            border: 1px solid #ddd;
        }
    </style>

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-12 mb-4">
                <div id="htmlContent" class="bg-white p-4 rounded">

                </div>
            </div>
                <form action="{{ route('contact.store') }}" method="post" id="monFormulaire" class="form-inline">

                    @csrf

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="name" class="sr-only">{{ __('Pseudo') }}</label>
                        <input type="text" class="form-control" name="name" id="name" required minlength="2"
                            maxlength="50" placeholder="Pseudonyme">
                    </div>

                    <div class="form-group mx-sm-3 mb-2">
                        <label for="message" class="sr-only">{{ __('Message') }}</label>
                        <input type="text" class="form-control" name="message" id="message" required minlength="2"
                            maxlength="200" rows="5" placeholder="Écrivez votre message...">
                    </div>

                    <button type="submit" class="btn btn-info mb-2">{{ __('Envoyer') }}</button>

                </form>
            </div>
        </div>

    </div>

    <script>
        function loadHTML() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("htmlContent").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "http://messagerie.test/api", true);
            xhttp.send();
        }

        loadHTML();
        setInterval(() => {
            loadHTML();
        }, 500);


        let monFormulaire = document.getElementById("monFormulaire");

        monFormulaire.addEventListener('submit', function(e) {

            let name = document.getElementById("name");
            let message = document.getElementById("message");
            if (name.value.trim() == "") {
                e.preventDefault();
            } else {

            }

            if (message.value.trim() == "") {
                e.preventDefault();
            } else {

            }
        });
    </script>
</body>

</html>
