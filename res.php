<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>***</title>

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

<?php 

    // Salvata la parola dell'input
    $inputWord = $_GET['word']; 

    // Modificata con i 3 asterischi
    // prendo il contenuto dell'input, sostituisco con quello che voglio, cercando dentro la variabile
    $newWord = str_replace($_GET['word'], '***', $inputWord);

    // Salvata la frase dell'input
    $inputPhrase = $_GET['phrase'];

    // Controllo se la stringa contiene la parola da censurare
    // $checkPhrase = str_contains($inputPhrase, $inputWord);

    // Prendo la parola da censurare, la sostiuisco con quella nuova, cercando la parola nella frase
    $newPhrase = str_replace($inputWord, $newWord, $inputPhrase);

?>

<body class="bg-black">

    <div class="container p-5 text-center text-white">

        <h1 class="mb-4">
            Il tuo risultato
        </h1>

        <hr class="text-white my-5">

        <h3> 
            <?php echo $newPhrase; ?>
        </h3>
        <p>
            La frase ha 
            <!-- 
                - Scrittura in pagina della frase nuova
                - Scrittura della sua lunghezza
            -->
            <?php
                echo "La frase ha " .strlen($newPhrase)." caratteri.";
            ?>
        </p>

        <hr class="text-white my-5">

        <p class="mb-5 text-secondary">
            <!-- 
                - Scrittura in pagina della frase originale presa dall'input con echo
                - Scritura della sua lunghezza con strlen()
             -->
            La frase digitata in origine:
            <br> 
            <?php
                echo $_GET['phrase']. "<br>ha " .(strlen($_GET['phrase']))." caratteri.";
            ?>

            <br>
            <br>

            <!-- Scrittura in pagina della parola da nascondere presa dall'input -->
            La parola che hai scelto di censurare: 
            <?php 
               echo $_GET['word'];
            ?>
        </p>

        <hr class="text-white my-5">

        <!-- Link alla pragina rpecedente -->
        <a href="index.php" class="btn btn-outline-light">
            Torna alla pagina iniziale
        </a>
    </div>


    <!-- BS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>