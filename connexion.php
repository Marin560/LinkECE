<!DOCTYPE html>
<html>
        
    <head>
        <title>Page de connexion LinkECE</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="script_connexion.js"></script>
        
        <p class="logo"> <img src="ece.jpg" alt = "ECE" height =300 width = 300></p>
        <link rel="stylesheet" type = "text/css" href="connexion.css" media ="all"/>  
        
    </head>
    
<body>
    
    <h1>LinkECE</h1>
    <h2> Connexion </h2>
    
        <?php
            if(isset($_GET['information'])){
               echo '<script type="text/javascript">window.alert("'.$_GET['information'].'");</script>';
            }
        ?>

     <form method = "post" action ="traitement_connexion.php" onsubmit="return checkChampsVides(this)">
        
        E-mail : 
        <input type="text" name="email" id="email" placeholder="Votre e-mail.." onblur="verifEmail(this)" > 
        Mot de passe : 
        <input type="text" name="mdp" id="mdp" placeholder="Votre mot de passe.." onblur="verifMdp(this)">   
        <input type="submit" name="Valider" value="Se connecter">
        <input type="submit" name="Modifier" value="Modifier">





    </form>

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