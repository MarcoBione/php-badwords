<?php 

$paragraph='';
$word='';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <main>


        <form class="row g-3">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Inserisci la parola che vuoi censurare nel
                    testo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Censura.." required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Inserisci un testo</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-warning mb-3">Censura</button>
            </div>
        </form>

    </main>
</body>

</html>