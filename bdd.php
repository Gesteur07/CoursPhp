<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP et MySQL</title>
</head>

<body>
<?php
    $serveur ="127.0.0.1";
    $login ="root";
    $pass ="";

    try{
        $connexion =  new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $connexion ->exec("CREATE DATABASE test2");//Pour créer une base de donneés dans mysql
        // echo 'Base de données créée';

        // $codesql ="CREATE TABLE Visiteurs(
        //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     nom VARCHAR (50),
        //     prenom VARCHAR (50),
        //     email VARCHAR (70)    // Pour créer une table dans la base de données.
        //     )";
        // $connexion ->exec($codesql);
        // echo 'Table "Visiteurs " créée';

        $insertion ="INSERT INTO Visiteurs(nom,prenom,email)
                    VALUES ('AMADOU','Moustapha','alpha42@gmail.com'),
                    ('LE GESTEUR','Mousse','legesteur07@gmail.com')";
        $connexion ->exec($insertion); 
        echo 'Valeurs ajoutées';           

      }

    catch(PDOException $e){
        echo 'Echec de la connexion : ' .$e->getMessage();
    }  
    


?>
</body>

</html>