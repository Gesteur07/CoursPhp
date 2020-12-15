<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour, <?php echo $_POST['nom']?></h1>
    <h2> Vous semblez avoir <?php echo $_POST ['age'] ?></h2>
    <?php
       $n= $_REQUEST ['nom'];
       $a =$_REQUEST ['age'];
    ?>
    Votre nom est stocké dans la variable $n dont le type est <?php echo gettype($n) ?>
    Votre age est stocké dans la variable <b> $a </b>
    <br/> dont le type est <i> <?php echo gettype ($a); ?> </i>
    <br/> On peut la transformer en <i> integer </i> en faisant:
       // <?php settype ($a, "integer"); ?>
        <br/>
           Type de $a : <?php echo gettype ($a); ?>

           file
</body>
</html>