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
    <div class="container">
        <form class="row g-3" action="page.php" method="GET">
            <!-- censored word -->
            <div class="mb-3">
                <label for="input" class="form-label">Inserisci la parola che vuoi censurare nel
                    testo</label>
                <input type="text" class="form-control" id="input" placeholder="Censura.." name="word" required>
            </div>
            <!-- text -->
            <div class="mb-3">
                <label for="txt" class="form-label">Inserisci un testo</label>
                <textarea class="form-control" id="txt" rows="3" name="text" required></textarea>
            </div>
            <!-- btn for censored text -->
            <div class="col-auto">
                <button type="submit" class="btn btn-warning mb-3">Censura</button>
            </div>
        </form>
    </div>
    </main>
</body>

</html>