<?php
 
session_start();
 
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id=$_SESSION['id'];
$profilpicture=$_SESSION['pp'];
$i=0;
include 'connexion_bdd.php';
 
if($db_found){
  
  $sql1 = "SELECT prenom, nom, age, ville, mdp, cv FROM informations INNER JOIN user ON id_user=id WHERE `id_user`='".$id."'";
  $recu1 = mysqli_query($db_handle, $sql1) ;
  
}
else{
  die('Arrêt du script; Bdd non trouvée');
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="general.css">
 
 
</head>
 
<body>
 

<?php
//Vérification s'il faut afficher les candidatures ou non 
    if(isset($_GET['modif'])){ //Si on a cliqué sur le bouton, on reçoit une variable 
                
        $resultat = mysqli_fetch_assoc($recu1);
 
        $age = $resultat['age'];
        $ville=$resultat['ville'];
        $mdp=$resultat['mdp'];
        $cv=$resultat['cv'];  
        $prenom=$resultat['prenom'];
        $nom=$resultat['nom']; 
                
                    
 
            }
    else{  
            $resultat = mysqli_fetch_assoc($recu1);
 
            $age = $resultat['age'];
            $ville=$resultat['ville'];
            $mdp=$resultat['mdp'];
            $cv=$resultat['cv'];
            $prenom=$resultat['prenom'];
            $nom=$resultat['nom']; 
        
            $modif = "0";
 
    }
 
 
echo '
  <nav class="navbar navbar-default" id="tabcol">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="'.$repertoire.$pp.'" class="img-circle" height="30" alt="Avatar"></a>
      </div>
      <ul class="nav navbar-nav" >
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="reseau.php">Mon réseau</a></li>
        <li class="active"><a href="mur.php">Vous</a></li>
        <li><a href="notifications.php">Notifications</a></li>
        <li><a href="messagerie.php">Messagerie</a></li>
        <li ><a href="emplois.php">Emplois</a></li>
        <li ><a href="albums.php">Photos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span> Déconnecter</a></li>
      </ul>
    </div>
        
   </nav>
  
 
  <div class="container text-center">
    <div class="row">
      <br><br>
    </div>
 
    <div class="row">
      <img src="'.$repertoire.$pp.'" class="img-rounded"  alt="Avatar">
    </div>
    <div class="row">
      <br>
      <form>
      <div class="form-group">
<label for="exampleFormControlFile1">Modifier la photo</label>
      <div class="col-sm-12">
      <div class="col-sm-5"></div>
      <div class="col-sm-2"><input type="file" name="cv" /></div>
      <div class="col-sm-5"></div>
      
      
       </div>
      </form>
    </div>
    <br>
    <div class="row well ">
      <br>
      
      <form method = "post" action ="traitement_modifs_infos.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Prénom</label>
          <input type="firstname" class="form-control" name="prenom" value='.$prenom.'>
 
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nom</label>
          <input type="name" class="form-control" name="nom" value='.$nom.'>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Activité</label>
          <select type="activite" class="form-control" id="Activite" >
             <option>Etudiant en licence</option>
            <option>Etudiant en master</option>
            <option>Etudiant apprenti</option>
            <option>Etudiant en recherche de stage</option>
            <option>Enseignant</option>
            <option>Employé</option>
          </select>
        </div>
      
 
      <div class="col-sm-4">
        <div class="row">
          
            <div class="form-group">
              <label for="exampleInputEmail1">Ville</label>
              <input type="city" class="form-control" name="ville" value='.$ville.'>
 
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Age</label>
              <input type="age" class="form-control" name="age" value='.$age.'>
            </div>
 
          
        </div>
        
          </div>
      <div class="col-sm-4">
        <div class="row">
          <br><br><br><br><br><br><br><br>
        </div>
        <div class="row">
           <a href ="accueil.php"><input type="submit" class="btn btn-info" value="Enregistrer les modifications"><p><br></p></a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="row">
          
            <div class="form-group">
              <label for="exampleInputEmail1">Mot de passe</label>
              <input type="postale" class="form-control" name="mdp" value='.$mdp.'>
            </div>
            <br>
            <label for="exampleInputEmail1">CV : </label>
            <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
              <div class="form-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="cv" />
             </div>
  
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
 
';
 
 
 
?>
</body>
 
</html>
