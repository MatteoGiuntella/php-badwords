
<?php
$paragrafo = $_GET ['paragrafo'];
$censura = $_GET['censura'];
$paroleCensurate = str_replace($censura,'***',$paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<div>
        <a href="./index.html">
            Vai alla pagina index.html
        </a>
    </div>
    <p>
    <?php
    echo $paragrafo;
    echo strlen($paragrafo) ." ". 'lunghezza paragrafo'
    ?>
    </p>
    <p>
    <?php
    echo $paroleCensurate;
    echo strlen($paroleCensurate) ." ". 'lunghezza paragrafo censurato'
    ?>
    </p>
    
</body>
</html>