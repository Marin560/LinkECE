<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type = "text/css" href="modifier1.css" media ="all"/>
<title>Inscription LinkECE</title>
<head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="essai.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <p class="logo"> <img src="ece.jpg" alt = "ECE" height =300 width = 300></p>
 <p class="logo"> <img src="ece.jpg" alt = "ECE" height =300 width = 300></p>
 <h1>Modifier un utilisateur</h1>

</head>

<body>
  
  <form action ="connexion.php" method="post" >
    E-mail :
    <input type="text" name="email" placeholder="e-mail...">
    Nouveau mot de passe :
    <input type="text" name="nvmdp" placeholder="mot de passe...">
    Nom :
    <input type="text" name="nom" placeholder="nom...">
    Prénom :
    <input type="text" name="prenom" placeholder="prénom...">  
    Age :
    <input type="text" name="age" placeholder="âge...">            
    
    <div class="form-group">
        Activité :
        <select type="activite" class="form-control form-control-lg" id="Activite" >
            <option>Etudiant en licence</option>
            <option>Etudiant en master</option>
            <option>Etudiant apprenti</option>
            <option>Etudiant en recherche de stage</option>
            <option>Enseignant</option>
            <option>Employé</option>
        </select>
    </div>
    Ville :
    <input type="text" name="ville" placeholder="ville...">
    Code postale :
    <input type="text" name="codepostale" placeholder="code postale...">
    CV :
        <input type="submit" name="suppcv" value="Supprimer" style = "background-color: #585858 " > 

   <div class="form-group">
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <input type="submit" name="inscription" value="Enregistrer les modifications"  > 
 </form>
    <a href="connexion.html"> <input type="submit" name="connexionretour" value="Retour à la page de connexion" style="background-color: #A52A2A"  > </a>


    
    


 

</body>



<footer >
  <p>
    <div id="footer">Copyright &copy; LinkECE<br />
      <a href="mailto:linkece@gmail.com">linkece@gmail.com </a>
    </div>
  </p>
</footer>


</html>