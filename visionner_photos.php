<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id=$_SESSION['id'];

include 'connexion_bdd.php';


      
if($db_found){
  
      $sql = "SELECT DISTINCT id_photo, id_albumphotos FROM user INNER JOIN albums INNER JOIN photos WHERE `id_user` = '".$id."'";
      $recu = mysqli_query($db_handle, $sql);
      $photos=array();
      $albums=array();
      $truc=array();
      $i=0;
}


else{
  die('Arrêt du script; Bdd non trouvée');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <h2> Photos </h2>  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      

      <!-- Wrapper for slides -->
   <!--  <div class="carousel-inner">

        <div class="item active">
          <img src="images/alienor.png" alt="photo1" style="width:100%;" >
        </div>

        <div class="item">
          <img src="<?php echo $repertoire.$truc[1]; ?>" alt="photo2" style="width:100%;" >
        </div>

        <div class="item">
          <img src="<?php echo $repertoire.$truc[2]; ?>" alt="photo3" style="width:100%;">
        </div>
      </div> 
    -->
        <!-- php -->
            <div class="carousel-inner">
                        <?php 
                        while($resultat = mysqli_fetch_assoc($recu)){
                          
                        $photos[$i]=$resultat["id_photo"];
                        $albums[$i]=$resultat["id_albumphotos"];
                        $truc[$i]= $albums[$i].$photos[$i];
                        echo '
                              <div class="item active">
                              <img src="'.$repertoire.$truc[$i].'" alt="impossible de charger la photo" style="width:100%;">
                              </div>
                              
                               <div class="item ">
                              <img src="'.$repertoire.$truc[$i].'" alt="impossible de charger la photo" style="width:100%;">
                              </div>
                               
                        
                        ';

                        $i++;

                        };

                        ?>
                </div>    
                
                <!-- fin php -->




      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</body>
</html>
