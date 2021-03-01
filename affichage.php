<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/bootstrap.css">
    <link rel="stylesheet" href="./Css/bootstrap.min.css">
    <title>Affichage</title>
</head>

<body>

</body>
    <div class="row" style="margin-top: 10px; padding:20px;">
        <div class="col-md-12 bg-dark text-white text-center">
            <h3>Les données du tableaux</h3>
        </div>
    </div>

    <?php
        $sql = "SELECT * from formulaire";
        if (!$connexion->query($sql))
            echo "Pb d'accès à Soneb";
             else{
    ?>   
    <table class="table" style="margin-top: 10px; padding:50px;">
            <tr class="bg-dark text-white">
              <th>Propriétaire</th> 
              <th>Permis de construire</th> 
              <th>Immeuble</th> 
              <th>Département</th> 
              <th>Agence</th> 
              <th>Calibre</th> 
              <th>Raison</th> 
              <th>Branche</th> 
              <th>Quartier</th> 
              <th>Illot</th> 
              <th>Parcelle</th> 
              <th>Rue</th> 
              <th>Ville</th> 
              <th>Titre</th> 
              <th>Prenom</th> 
              <th>Nom</th> 
              <th>Telephone</th> 
              <th>Email</th> 
            </tr>
  <?php
             foreach($connexion->query($sql) as $ligne)
             echo 
             ' <tr> 
                      <td> '.$ligne['proprio'].'</td> '.
                     '<td> '.$ligne['permis'].'</td> '.
                     '<td> '.$ligne['immeuble'].' </td> '.
                     '<td> '.$ligne['departement'].' </td> '.
                     '<td> '.$ligne['agence'].' </td> '.
                     '<td> '.$ligne['calibre'].' </td> '.
                     '<td> '.$ligne['raison'].' </td> '.
                     '<td> '.$ligne['branche'].' </td> '.
                     '<td> '.$ligne['quartier'].' </td> '.
                     '<td> '.$ligne['illot'].' </td> '.
                     '<td> '.$ligne['parcelle'].' </td> '.
                     '<td> '.$ligne['rue'].' </td> '.
                     '<td> '.$ligne['ville'].' </td> '.
                     '<td> '.$ligne['titre'].'</td>'.
                     '<td> '.$ligne['prenom'].' </td> '.
                     '<td> '.$ligne['nom'].' </td> '.
                     '<td> '.$ligne['telephone'].' </td> '.
                     '<td> '.$ligne['mail'].' </td>
                 </tr> ';
    ?>            
                 
        </table> 
        <button class="btn btn-dark"><a href="./formulaire.php">Retour</a></button>  
      <?php    }?>


</html>