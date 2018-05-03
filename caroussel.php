<?php

session_start();
$prenom=$_SESSION['prenom'];
$pp=$_SESSION['pp'];
$repertoire = $_SESSION['repertoire'];
$id=$_SESSION['id'];

include 'connexion_bdd.php';

if(isset($_GET['album_selec'])){
      
     $id_album = $_GET['album_selec'];

    if($db_found){
  
      $sql = "SELECT DISTINCT id_photo FROM photos WHERE `id_albumphotos` = '".$id_album."'";
      $sql2 = "SELECT DISTINCT id_photo, id_albumphotos FROM albums INNER JOIN photos ON photos.id_albumphotos=albums.id_album WHERE  nom_album='".$id_album."' ";
      $recu = mysqli_query($db_handle, $sql2);
      $photos=array();
      $truc=array();
      $id_albumphotos=array();
      $h=0;
      $p=1;
 
    }
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
    <h2> <?php echo $id_album; ?> </h2>  
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
                          
                        $photos[$h]=$resultat['id_photo'];
                        
                        $id_albumphotos[$h]=$resultat['id_albumphotos'];
                       //echo $repertoire.$id_albumphotos[$h].$photos[$h];
                        echo '
                              <div class="item active">
                              <img src="'.$repertoire.$id_albumphotos[$h].$photos[$h].'" alt="impossible de charger la photo" style="width:100%;">
                              </div>
                              
                               <div class="item ">
                              <img src="'.$repertoire.$id_albumphotos[$h].$photos[$h].'" alt="impossible de charger la photo" style="width:100%;">
                              </div>
                               
                        
                        ';

                        $h++;

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
