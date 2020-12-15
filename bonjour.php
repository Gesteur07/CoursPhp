<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>

<body>
    <?php
        $prenoms = array ('hamadou','moustapha','gesteur');
        $v = true;
        /*for ($x=0; $x<=2; $x++){
            echo $prenoms[$x].'</br>';
        }*/

        foreach ($prenoms as $valeurs)
        echo $valeurs.'</br>';

        $age = array(
                'hamadou'=>25,
                'moustapha'=>24,
                'gesteur'=>'non renseigné');

        foreach ($age as $clef=>$val)
        echo 'L\'age de ' .$clef. ' est : ' .$val. '.</br>';        


        
    
    ?>
   
</body>

</html>