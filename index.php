<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
</head>

<body class="bg-black">

    <div class="container p-5 text-center">

        <h1 class="text-white mb-4">
            Censurami le "bad w***s"
        </h1>

        <hr class="text-white my-5">

        <form action="./res.php" method="GET">

            <div class="form-floating mb-4">
                <!-- Frase -->
                <!-- name="" è obbligatorio per passare il dato -->
                <input name="phrase" class="form-control" placeholder="Scrivi una frase.." id="floatingTextarea"></input>
                <label for="floatingTextarea">Scrivi una frase...</label>
            </div>

            <div class="form-floating mb-4">
                <!-- Parola da censurare -->
                <input name="word" class="form-control" placeholder="Scrivi la parola da censurare..." id="floatingTextarea"></input>
                <label for="floatingTextarea">Scrivi la parola da censurare...</label>
            </div>

            <hr class="text-white my-5">

            <button type="submit" class="btn btn-outline-light">
                Invia
            </button>

        </form>

    </div>

    <!-- BS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>