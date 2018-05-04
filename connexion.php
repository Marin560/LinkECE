<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="connexion.css" media ="all"/>
    <script type="text/javascript" src="monscript.js"></script>
    <title>Page de connexion LinkECE</title>
<head>

    <p class="logo"><img src="ece.jpg" alt = "ECE" height =300 width = 300></p>
     <font color="#FFFFFF"><h1>LinkECE<br>Connexion</h1></font>
</head>

<body>

        <?php
            if(isset($_GET['information'])){
                //Si on reçoit un problème de connexion ou de mdp/mail, on affiche l'erreur
                echo $_GET['information'];
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
    
    <a href="modifier.php"><input type="submit" name="modifier" value="Modifier un utilisateur"></a>

  <h3> Pas de compte? Inscrivez-vous!</h3>
  <a href="inscription.php"> <input type="submit" name="inscription" value="S'inscrire" > </a>

</body>


<footer>
  <p>
    <div id="footer">Copyright &copy;LinkECE<br> 
      <a href="mailto:linkece@gmail.com">linkece@gmail.com</a>
    </div>
  </p>
</footer>


</html>