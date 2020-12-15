<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formule.css"
    <title>Formulaire Raccordement php</title>

</head>

<body>
    <form action="traitement.php" method="POST">

       <fieldset>
            <legend>Conditions d'elligibilité</legend> 

                <label for="Oui">L'entreprise est propriétaire de l'immeuble ? *</label> 
                <input type="radio" name="pro" value="Oui" id="Oui" /> <label for="pro">Oui</label>
                <br>
                <label for="Oui">L'immeuble jouit d'un de permis de construire ? *</label> 
                <input type="radio" name="prop" value="Oui" id="Oui" /> <label for="prope">Oui</label>
                <input type="radio" name="prop" value="En cours" id="En cours" /> <label for="En cours">En cours</label> <br>
                <label for="Oui">L'immeuble est à proximité immédiate du réseau d'eau de la SONEB ? *</label> 
                <input type="radio" name="prope" value="Oui" id="Oui" /> <label for="prope">Oui</label> <br>
        
                <label for="depart" class="depart">Direction départementale *</label> <br>
                <select name="depart" id="depart">
                <option value="">-Selectionner-</option>
                <option value="Atacora-Donga">Atacora-Donga</option>
                <option value="Atlantique-Littoral">Atlantique-Littoral</option>
                <option value="Borgou-Alibori">Borgou-Alibori</option>
                <option value="Mono-Couffo">Mono-Couffo</option>
                <option value="Oueme-Plateau">Oueme-Plateau</option>
                <option value="Zou-Collines">Zou-Collines</option>
                </select> <br>

                <label for="agence">Agence *</label> <br>
                <select name="agence" id="agence">
                <option value="">-Selectionner-</option>
                <option value="Abomey-Bohicon">Abomey-Bohicon</option>
                <option value="Abomey-Calavi">Abomey-Calavi</option>
                <option value="Akpakpa">Akpakpa</option>
                <option value="Dassa-Zoumé">Dassa-Zoumé</option>
                <option value="Djougou">Djougou</option>
                <option value="Gbégamey">Gbégamey</option>
                <option value="Lokassa">Lokossa</option>
                <option value="Kandi">Kandi</option>
                <option value="Natitingou">Natitingou</option>
                <option value="Parakou">Parakou</option>
                <option value="Pobè">Pobè</option>
                <option value="Porto-Novo">Porto-Novo</option>
                <option value="Vèdoko">Vèdoko</option><option value="Gbégamey">Gbégamey</option>
                <option value="Lokassa">Lokossa</option>
                <option value="Kandi">Kandi</option>
                <option value="Natitingou">Natitingou</option>
                <option value="Parakou">Parakou</option>
                <option value="Pobè">Pobè</option>
                <option value="Porto-Novo">Porto-Novo</option>
                <option value="Vèdoko">Vèdoko</option>
                </select> <br>
            
                <label for="calibre">Calibre de branchement *</label><br>
                <select name="calibre" id="calibre">
                <option value="">Choix calibre</option>
                <option value="Calibre 15">Calibre 15</option>
                <option value="Calibre 20">Calibre 20</option>
                </select><br>
                <small id="petit">Quel calibre de branchement est sollicité?</small>     
        </fieldset>

        <fieldset>
            <legend>INFOS. ENTREPRISE</legend>
                <label for="raison">Raison sociale de l'entreprise *</label> <br>
                <input type="text" name="raison" id="raison" required><br>
                <small>Dénomination de l'entreprise</small> <br>
                <label for="branche">Branche d'activité *</label> <br>
                <input type="text" name="branche" id="branche"required> <br>
                <label for="quartier">Quartier *</label> <br>
                <input type="text" name="quartier" id="quartier"required> <br>
                <small>Le branchement se fera dans ce quartier</small><br>
                <label for="lot">Illot *</label> <br>
                <input type="text" name="lot" id="lot" required> <br>
                <label for="branche">Parcelle *</label> <br>
                <input type="text" name="parcelle" id="parcelle" required> <br>
                <label for="rue">Rue</label> <br>
                <input type="text" name="rue" id="rue" required> <br>
                <label for="ville">Ville *</label> <br>
                <input type="text" name="ville" id="ville" required> <br>

        </fieldset>

        <fieldset>
            <legend>INFOS. PERSONNE A CONTACTER</legend>
                <label for="personne">Personne à contacter *</label> <br>
                <select name="titre" id="titre">
                    <option value="">--</option>
                    <option value="M.">M.</option>
                    <option value="Mme">Mme</option>
                    <option value="Mlle">"Mlle"</option>
                </select> 
                <label for="titre">Titre</label>
                <input type="text" name="prenom" id="prenom" required> 
                <label for="prenom">Prénom</label>&nbsp;
                <input type="text" name="nom" id="nom" required>
                <label for="nom">Nom</label> <br>
                <label for="telephone">Téléphone</label> <br>
                <input type="tel" name="telephone" id="telephone"><br>
                <small>Numéros de téléphone de la personne à contacter dans l'entreprise </small><br>
                <label for="mail">Email</label><br>
                <input type="email" name="mail" id="mail"> <br>
                <small>Email de la personne à contacter dans l'entreprise</small><br>      
        </fieldset>

        <fieldset>
            <legend>Documents à joindre</legend>
                <label for="">Registre de Commerce (RC) *</label> <br>
                <input type="file" name="registre" id="registre">
                <input type="submit" name="registre" id= "registre" value="Transférer"> <br>
                <small>Les fichiers doivent peser moins de <strong> 2 Mo.</strong></small> <br>
                <small> Extensions autorisées :<strong>gif jpg jpeg png.</strong> </small> <br>
                <label for="esquisse_plan">Esquisse du plan d'accès</label><br>
                <input type="file" name="esquisse_plan" id="esquisse_plan">
                <input type="submit" name="esquisse_plan" id= "esquisse_plan" value="Transférer"><br>
                <small>Les fichiers doivent peser moins de <strong> 1 Mo.</strong></small> <br>
                <small> Extensions autorisées :<strong>gif jpg jpeg png.</strong> </small> <br>
        </fieldset>
           
                <input type="submit" value="Aperçu" id="envoi" name="envoi">
   </form>
    
</body>

</html>