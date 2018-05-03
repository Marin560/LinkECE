<!DOCTYPE html>
<html>
        <meta charset="utf-8">
        <link rel="stylesheet" type = "text/css" href="inscription.css" media ="all"/>
        <title>Inscription LinkECE</title>
    <head>
           <p class="logo"> <img src="ece.jpg" alt = "ECE" height =300 width = 300></p>
           <h2>Quel utilisateur souhaitez-vous modifier?</h2>
    </head>

    <body>
        <?php
            if(isset($_GET['number'])){
                echo $_GET['number'];
            }
        ?>
        
        <form method = "post" action ="traitement_suppression.php" onsubmit="return  checkChampsVides(this)"> 
            <input type="text" name="email" id="email" placeholder="Votre e-mail.." onblur="verifEmail(this)" > 
            <input type="submit" name="Supprimer" value="Supprimer">
        </form>
        
        <form method = "post" action ="modifier1.php" onsubmit="return  checkChampsVides(this)"> 
            <input type="text" name="email" id="email" placeholder="Votre e-mail.." onblur="verifEmail(this)" > 
            <input type="submit" name="Modifier" value="Modifier User">
        </form>
        
        
            
            
    
        <input type="submit" name="envoyerinvitation" value="Envoyer l'invitation" > 

            
        <script>
            function verifEmail(champ){
                if(document.getElementById('email').value == ""){ 
                    return false;
                }
                else{
                    return true;
                }
            }
            
            function checkChampsVides(champsRemplis)
            {
               var mailOk = verifEmail(champsRemplis.email);

               if(verifEmail(champsRemplis.email))
                  return true;
               else
               {
                  alert("Veuillez remplir correctement le mail de l'utilisateur à modifier");
                  return false;
               }
            }
        </script>
        
        
        
        
        
    <a href="connexion.php"> <input type="submit" name="connexionretour" value="Retour à la page de connexion" style="background-color: #A52A2A"  > </a>


</body>



<footer >
  <p>
    <div id="footer">Copyright &copy; LinkECE<br />
      <a href="mailto:linkece@gmail.com">linkece@gmail.com </a>
  </div>
</p>
</footer>


</html>