<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type = "text/css" href="inscription.css" media ="all"/>
<title>Inscription LinkECE</title>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="essai.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <p class="logo"> <img src="ece.jpg" alt = "ECE" height =300 width = 300></p>
    <h1>Inscription</h1>

</head>

    <body>

        <?php
        echo'
            <form method="post"  action ="traitement_inscription.php" enctype="multipart/form-data" >
                E-mail :
                <input type="text"  placeholder="Votre e-mail..." name = "email">
                Mot de passe :
                <input type="text"  placeholder="Votre mot de passe..." name = "mdp">
                Nom :
                <input type="text" placeholder="Votre nom..." name ="nom">
                Prénom :
                <input type="text"  placeholder="Votre prénom..." name = "prenom">  
                Age :
                <input type="text"  placeholder="Votre âge..." name = "age">            

                <div class="form-group">
                    Activité :
                    <select type="activite" class="form-control form-control-lg" id="Activite" name = "activite">
                        <option>Etudiant en licence</option>
                        <option>Etudiant en master</option>
                        <option>Etudiant apprenti</option>
                        <option>Etudiant en recherche de stage</option>
                        <option>Enseignant</option>
                        <option>Employé</option>
                    </select>
                </div>
                Ville :
                <input type="text"  placeholder="Votre ville..." name = "ville">
                Code postale :
                <input type="text" placeholder="Votre code postale..." name = "postale">
                CV :

                <div class="form-group">
                    <input type="file" name="fichier" id="fichier"/><br />    
                </div>

                <input type="submit" name="inscription" value="Sinscrire"> 
                
                <a href="connexion.php"> <input type="text" name="connexionretour" value="Retour à la page de connexion" style="background-color: #A52A2A"> </a> 
            </form>
        ';
        ?>
    </body>
<footer >
  <p>
    <div id="footer">Copyright &copy; LinkECE<br />
      <a href="mailto:linkece@gmail.com">linkece@gmail.com </a>
  </div>
</p>
</footer>


</html>