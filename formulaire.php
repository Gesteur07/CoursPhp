<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/bootstrap.css">
    <link rel="stylesheet" href="./Css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="formule.css" -->
    <title>Formulaire Raccordement php</title>

</head>

<body>
    <div style="margin-top: 10px; padding:20px;"><h2>Formulaire de raccordement des PME et PMI</h2></div>

    <div class="container" style="margin-top: 20px;">
        
        <form action="traitement.php" method="POST" class="bg-dark text-white" style=" border: 1px solid black; padding:30px; background:dark !important;"> 
            <div class="form-group">
                <legend>Conditions d'elligibilité</legend>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="Oui">L'entreprise est propriétaire de l'immeuble ?</label>
                    <input type="radio" name="proprio" value="Oui" id="Oui" required />
                    <label for="pro">Oui</label> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="Oui">L'immeuble jouit d'un de permis de construire ?</label>
                    <input type="radio" name="permis" value="Oui" id="Oui"/> <label for="prope" >Oui</label>
                    <input type="radio" name="permis" value="En cours" id="En cours"/> <label for="En cours">En cours</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="Oui">L'immeuble est à proximité immédiate du réseau d'eau de la SONEB ?</label>
                    <input type="radio" name="immeuble" value="Oui" id="Oui" required/> <label for="prope">Oui</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="departement">Direction départementale</label>
                    <select name="departement" class="form-control" id="departement">
                        <option value="">-Selectionner-</option>
                        <option value="Atacora-Donga">Atacora-Donga</option>
                        <option value="Atlantique-Littoral">Atlantique-Littoral</option>
                        <option value="Borgou-Alibori">Borgou-Alibori</option>
                        <option value="Mono-Couffo">Mono-Couffo</option>
                        <option value="Oueme-Plateau">Oueme-Plateau</option>
                        <option value="Zou-Collines">Zou-Collines</option>
                    </select>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="agence">Agence</label>
                    <select name="agence" class="form-control" id="agence">
                        <option value="">-Selectionner-</option>
                        <option value="Abomey-Bohicon">Abomey-Bohicon</option>
                        <option value="Abomey-Calavi">Abomey-Calavi</option>
                        <option value="Akpakpa">Akpakpa</option>
                        <option value="Dassa-Zoumé">Dassa-Zoumé</option>
                        <option value="Djougou">Djougou</option>
                        <option value="Gbegamey">Gbegamey</option>
                        <option value="Lokassa">Lokossa</option>
                        <option value="Kandi">Kandi</option>
                        <option value="Natitingou">Natitingou</option>
                        <option value="Parakou">Parakou</option>
                        <option value="Pobè">Pobè</option>
                        <option value="Porto-Novo">Porto-Novo</option>
                        <option value="Vèdoko">Vèdoko</option>
                        <option value="Lokassa">Lokossa</option>
                        <option value="Kandi">Kandi</option>
                        <option value="Natitingou">Natitingou</option>
                        <option value="Parakou">Parakou</option>
                        <option value="Pobè">Pobè</option>
                        <option value="Porto-Novo">Porto-Novo</option>
                        <option value="Vèdoko">Vèdoko</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 form-group">
                    <label for="calibre">Calibre de branchement</label>
                    <select name="calibre" class="form-control" id="calibre">
                        <option value="">Choix calibre</option>
                        <option value="Calibre 15">Calibre 15</option>
                        <option value="Calibre 20">Calibre 20</option>
                    </select>
                    <small>Quel calibre de branchement est sollicité?</small>
                </div>
            </div>
            <div class="form-group">
                <legend>INFOS. ENTREPRISE</legend>  
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="raison" class="control-label">Raison sociale de l'entreprise</label>
                    <input type="text" name="raison" class="form-control"  id="raison" required>
                    <small><span class="help-block">Dénomination de l'entreprise</span></small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="branche">Branche d'activité</label>
                    <input type="text" name="branche" class="form-control" id="branche" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="quartier">Quartier</label>
                    <input type="text" name="quartier" class="form-control" id="quartier" required>
                    <small><span class="help-block">Le branchement se fera dans ce quartier</span></small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="illot">Illot</label>
                    <input type="text" name="illot" class="form-control" id="illot" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="parcelle">Parcelle</label>
                    <input type="text" name="parcelle" class="form-control" id="parcelle" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="rue">Rue</label>
                    <input type="text" name="rue" class="form-control" id="rue" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" id="ville" required>
                </div>
            </div>
            <div class="form-group">
                <legend>INFOS. PERSONNE A CONTACTER</legend>  
            </div>
            <label for="personne" class="form-group">Personne à contacter</label>
            <div class="row">       
                    <div class="form-group form-inline"> 
                        <div class="col-md-2">
                            <select name="titre" class="form-control" id="titre">
                                <option value="">Titre</option>
                                <option value="M.">M.</option>
                                <option value="Mme">Mme</option>
                                <option value="Mlle">"Mlle"</option>
                            </select>                                    
                        </div>                    
                    </div>        
                    <div class="form-group form-inline ">
                        <div class="col-md-4">
                            <input type="text" name="prenom" class="form-control" id="prenom" required placeholder="Prénom">
                        </div>
                    </div>
                    <div class="form-group form-inline">
                        <div class="col-md-4">
                            <input type="text" name="nom" class="form-control" id="nom" required placeholder="Nom">
                        </div>
                    </div>
            </div>
            
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="telephone">Téléphone </label>
                    <input type="tel" name="telephone" class="form-control" id="telephone" required>
                    <small class="help-block">Numéros de téléphone de la personne à contacter dans l'entreprise</small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 form-group">
                    <label for="mail">Email </label>
                    <input type="email" name="mail" class="form-control" id="mail" required>
                    <small class="help-block">Email de la personne à contacter dans l'entreprise</small>
                </div>
            </div>
            <div class="form-group">
                <legend>Documents à joindre</legend>
            </div>
            <label for="registre" class="form-group">Registre de Commerce (RC) </label>
            <div class="row">
                <div class="col-md-4 form-inline">
                    <div class="form-group">
                        <input type="file" name="registre" class="form-control btn-outline-dark" id="registre">
                    </div>
                </div>
                <div class="col-md-4 form-inline">
                    <div class="form-group">
                        <input type="submit" name="registre" class="form-control btn-outline-dark" id="registre" value="Tranférer">
                    </div>
                </div>
            </div>
            <div class="form-inline">
                <small class="help-block">Les fichiers doivent peser moins de <strong>2 Mo.</strong> </small>
            </div>
            <div class="form-inline form-group">
                <small class="help-block"> Extensions autorisées : <strong> gif jpg jpeg png.</strong> </small>
            </div>
            <label for="esquisse_plan" class="form-group">Esquisse du plan d'accès</label>
            <div class="row">
                <div class="col-md-4 form-inline">
                    <div class="form-group">
                        <input type="file" name="esquisse_plan" class="form-control btn-outline-dark" id="esquisse_plan">
                    </div>
                </div>
                <div class="col-md-4 form-inline">
                    <div class="form-group">
                        <input type="submit" name="esquisse_plan" class="form-control btn-outline-dark" id="esquisse_plan" value="Tranférer">
                    </div>
                </div>
            </div>
            <div class="form-inline">
                <small class="help-block">Les fichiers doivent peser moins de <strong> 1 Mo.</strong> </small>
            </div>
            <div class="form-inline form-group">
                <small class="help-block">Extensions autorisées :<strong>gif jpg jpeg png.</strong> </small>
            </div>
            <div class="row">
                <div class="col-md-2 form-group">
                    <input type="submit" value="Aperçu" id="envoi" class="form-control btn-outline-dark">

                </div>

            </div>
        </form>     
    </div>
</body>

</html>