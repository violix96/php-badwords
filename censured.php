<?php
$badwords = $_GET['censured-text'];
$badtext = $_GET['censured-word'];

$censoredParagraph = str_replace($badtext, '***', $badwords);
$originalLength = strlen($badwords);
$censoredLength = strlen($censoredParagraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Risultati</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="py-5">Stampa dei paragrafi</h1>
                <p>Il testo originale è: <span class="text-white text-danger fs-5"><?php echo $badwords ?></span></p>
                <p>La lunghezza del testo originale è: <span class="text-danger text-danger fs-5"><?php echo $originalLength ?></span> <span class="text-white text-danger fs-5">caratteri</span></p>
                <p>La parola censurata è: <span class="text-danger fs-5"><?php echo $censoredParagraph ?></span></p>
                <p>La lunghezza della parola censurata è: <span class="text-danger text-danger fs-5"><?php echo $censoredLength ?> <span class="text-white text-danger fs-5">caratteri</span></p>
            </div>
        </div>
    </div>
</body>

</html>