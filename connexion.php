<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type = "text/css" href="connexion.css" media ="all"/>  
<title>Page de connexion LinkECE</title>
<head>

 <p class="logo"> <img src="ece.jpg" alt = "ECE" height =300 width = 300></p>
 <h1>LinkECE</h1>
 <h2> Connexion </h2>

</head>

<body>

  <form method="post" action ="traitement_connexion.php"  >
         <!-- Formulaire pour envoyer les données de l'utilisateur - Connexion -->  
    <input type="radio" name="type_user" value="admin">Administrateur<br>
    <input type="radio" name="type_user" value="utilisateur">Utilisateur <br>
    E-mail : 
    <input type="text" name="email" placeholder="Votre e-mail..">
    Mot de passe : 
    <input type="text" name="mdp" placeholder="Votre mot de passe..">
    <input type="submit" name="Valider" value="Se connecter"> 
  </form>
    
    <h1>LinkECE</h1>
    <h2> Connexion </h2>
    
        <?php
            if(isset($_GET['number'])){
                echo $_GET['number'];
            }
        ?>

     <form method = "post" action ="traitement_connexion.php" onsubmit="return checkChampsVides(this)">
        <input type="radio" name="type_user" id="admin" value="admin" >Administrateur<br>
        <input type="radio" name="type_user" id="utilisateur" value="utilisateur">Utilisateur <br>
        E-mail : 
        <input type="text" name="email" id="email" placeholder="Votre e-mail.." onblur="verifEmail(this)" > 
        Mot de passe : 
        <input type="text" name="mdp" id="mdp" placeholder="Votre mot de passe.." onblur="verifMdp(this)">   
        <input type="submit" name="Valider" value="Se connecter">
    </form>
    
     <a href="modifier.html"><input type="submit" name="modifier" value="Modifier un utilisateur"></a>

    <a href="modifier.php"><input type="submit" name="modifier" value="Modifier un utilisateur"></a>

  <h3> Pas de compte? Inscrivez-vous!</h3>
  <a href="inscription.php"> <input type="submit" name="inscription" value="S'inscrire" > </a>

</body>


<footer>
  <p>
    <div id="footer">Copyright &copy; LinkECE<br /> 
      <a href="mailto:linkece@gmail.com">linkece@gmail.com </a>
    </div>
  </p>
</footer>


</html>