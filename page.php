<?php 
//load main page data
$censoredWord= trim($_GET['word']); //load and clean word from user
$paragraph= trim($_GET['text']); //load and clean paragraph from user
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

        <h5>La tua frase completa:</h5>
        <p><?php echo $paragraph ?></p>

        <h5>Quanto è lunga la tua frase:</h5>
        <p><?php  echo strlen($paragraph); ?></p>

        <h5>La tua frase con la parola censurata:</h5>
        <p>
            <?php if(str_contains($paragraph, $censoredWord)){
                //se presente sostituisco con gli asterischi
                $censoredTxt= str_replace($censoredWord,' *** ', $paragraph);
                
             }
             echo $censoredTxt;?>
        </p>
        
    </div>


        

    </main>
</body>

</html>

