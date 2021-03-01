<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>

<body>
<?php
    
   
    $serveur ="127.0.0.1";
    $login ="root";
    $pass ="";

    $proprio =$_POST['proprio'];
    $permis =$_POST['permis'];
    $immeuble =$_POST['immeuble'];
    $departement =$_POST['departement'];
    $agence =$_POST['agence'];
    $calibre =$_POST['calibre'];
    $raison =$_POST['raison'];
    $branche =$_POST['branche'];
    $quartier =$_POST['quartier'];
    $illot =$_POST['illot'];
    $parcelle =$_POST['parcelle'];
    $rue =$_POST['rue'];
    $ville =$_POST['ville'];
    $titre=$_POST['titre'];
    $prenom =$_POST['prenom'];
    $nom=$_POST['nom'];
    $telephone =$_POST['telephone'];
    $mail =$_POST['mail'];
    

    try{
        $connexion =  new PDO("mysql:host=$serveur;dbname=soneb", $login, $pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $requete=$connexion->prepare("INSERT INTO formulaire (proprio,permis,immeuble,departement,agence,calibre,raison,
        branche,quartier,illot,parcelle,rue,ville,titre,prenom,nom,telephone,mail)
                    VALUES (:proprio,:permis,:immeuble,:departement,:agence,:calibre,:raison,:branche,:quartier,:illot,:parcelle,
                    :rue,:ville,:titre,:prenom,:nom,:telephone,:mail)");
        $requete->bindParam(':proprio',$proprio);            
        $requete->bindParam(':permis',$permis);            
        $requete->bindParam(':immeuble',$immeuble);            
        $requete->bindParam(':departement',$departement);            
        $requete->bindParam(':agence', $agence);  
        $requete->bindParam(':calibre',$calibre);            
        $requete->bindParam(':raison',$raison);            
        $requete->bindParam(':branche',$branche);            
        $requete->bindParam(':quartier',$quartier);            
        $requete->bindParam(':illot',$illot);            
        $requete->bindParam(':parcelle',$parcelle);            
        $requete->bindParam(':rue',$rue);            
        $requete->bindParam(':ville',$ville);            
        $requete->bindParam(':titre',$titre);            
        $requete->bindParam(':prenom',$prenom);            
        $requete->bindParam(':nom',$nom);            
        $requete->bindParam(':telephone',$telephone);            
        $requete->bindParam(':mail',$mail);
        $requete->execute();
        
        
        
       // $connexion->prepare($inserer)->execute([$proprio,$permis,$immeuble,$departement,$agence,$calibre,$raison,$branche,
        //$quartier,$illot,$parcelle,$rue,$ville,$titre,$prenom,$nom,$telephone,$mail]);
        // echo 'Valeurs ajoutées';           
        }

    catch(PDOException $e){
        echo 'Echec de la connexion : ' .$e->getMessage();
    }
    include('affichage.php');
     
?>
</body>
</html>