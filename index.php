<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Bad Words</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Inserisci la tua frase e la parola da censurare</h1>
            <form method="GET" action="censured.php">
                <div class="mb-3">
                    <label class="label" for="censured-text" class="form-label">Frase da censurare</label>
                    <input name="censured-text" type="text" class="form-control" id="censured-text" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label class="label" for="censured-word" class="form-label">Parola censurata</label>
                    <input name="censured-word" type="text" class="form-control" id="censured-word">
                </div>
                <button type="submit" class="btn btn-primary">Invio</button>
            </form>
        </div>
    </div>
</body>

</html>