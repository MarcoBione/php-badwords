<?php 
//load main page data
$word=$_GET['word'];
$paragraph= $_GET['text'];

//test
//echo "Ciao " . $word;
//echo "Ciao " . $paragraph;


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

    <div class="container text-center">
        <h1>Il risultato</h1>

        <p>La tua frase completa:</p>
        <p><?php echo $paragraph ?></p>

        <p>Quanto è linga la tua frase:</p>
        <p><?php  echo $strlen($paragraph); ?></p>

        <!-- <p>La tua frase con la parola censurata:</p>
        <p><?php  ; ?></p> -->
    </div>
        

    </main>
</body>

</html>

