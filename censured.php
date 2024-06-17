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
    <title>Risultati</title>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Stampa de paragrafi</h1>
                <p>Il testo originale è: <?php echo $badwords ?></p>
                <p>La lunghezza del testo originale è: <?php echo $originalLength ?> caratteri</p>
                <p>La parola censurata è: <?php echo $censoredParagraph ?></p>
                <p>La lunghezza della parola censurata è: <?php echo $censoredLength ?> caratteri</p>
            </div>
        </div>
    </div>
</body>

</html>