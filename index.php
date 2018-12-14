<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
//mocs
$authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";
$moclink="https://rebrickable.com/api/v3/lego/mocs/MOC-";
$setlink="https://rebrickable.com/api/v3/lego/sets/";

$url_moc = $url_sets = "https://rebrickable.com/api/v3/lego/mocs/MOC-";
//dit zijn de sets
$url_sets = "https://rebrickable.com/api/v3/lego/sets/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="scripts/css/screen.css">
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>index</title>
</head>
<body id="index">
<?php include_once 'include/header.php'; ?>
<main id="home">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/carousel2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/carousel1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/carousel3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container" id="moc">
  <h2 style="margin-bottom: 0;">Mocs</h2>
  <div class="row">
  <?php for ($i = 1; $i < 13; $i++){
                       //Databadse van rebrickable bevat mocs met nummers tussen 1000 & ongeveer 25 000
                       $randNum = random_int (1000, 25000);
                       //Check of resultaat in db zit op basis van de header (terug te vinden onder het 11e item)
                       try {
                   
                       if(get_headers($url_moc . $randNum . $authkey)[11] == 'HTTP/1.1 200 OK'){
                            //data ophalen
                            $data_moc=json_decode(file_get_contents($url_moc . $randNum . $authkey), true);
                            ?>
                                <!-- html per item -->
                              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
                                <a href="detail.php?moc=<?php print($data_moc['set_num']) ?>"><img src="<?php  print($data_moc['moc_img_url']);?>" alt=""></a>
                              </div>
                            <?php
                       }else{
                        $i--;
                       }
                      } catch (Exception $e) {
                        echo 'Caught exception: ',  $e->getMessage(), "\n";
                    }
                       ?>
                    <?php } ?>
  </div>
  <div class="link">
<a href="moc.php">Click here for all mocs!</a>
  </div>
</div>
<div class="container" id="moc" name="lego">
  <h2 style="margin-bottom: 0;">Lego</h2>
  <div class="row">
  <?php for ($ii = 1; $ii < 13; $ii++){
                       //Databadse van rebrickable bevat mocs met nummers tussen 1000 & ongeveer 25 000
                       $randNum = random_int (1000, 15000);
                       //Check of resultaat in db zit op basis van de header (terug te vinden onder het 11e item)
                       try {
                       if(get_headers($url_sets . $randNum. "-1" . $authkey)[11] == 'HTTP/1.1 200 OK'){
                            //data ophalen
                            $data_set=json_decode(file_get_contents($url_sets . $randNum ."-1" . $authkey), true);
                            ?>
                                <!-- html per item -->
                              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
                                <a href="detail.php?nummer=<?php print($data_set['set_num']) ?>"><img src="<?php  print($data_set['set_img_url']);?>" alt=""></a>
                              </div>
                            <?php

                       }else{
                        $ii--;
                       }
                      } catch (Exception $e) {
                        echo 'Caught exception: ',  $e->getMessage(), "\n";
                    }
                       ?>
                    <?php } ?>
   
  </div>
  <div class="link">
<a href="lego.php">Click here for the new legosets!</a>
  </div>
    
    
    
    </main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="scripts/javascript/script.js"></script>
</body>
</html>