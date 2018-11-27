<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
//mocs
$authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";
$moclink="https://rebrickable.com/api/v3/lego/mocs/MOC-";
//"https://rebrickable.com/api/v3/lego/mocs/?key=3058fe9f830ab53859bf5e7668abe35d";

//zo vraag je data op lol
//$random=rand(999,25000);
$create_url = "https://rebrickable.com/api/v3/lego/mocs/MOC-" . "18916"  . $authkey ;
$data_moc = json_decode(file_get_contents($create_url), true);
$moc_url=$data_moc['moc_img_url'];

$create_url1 = "https://rebrickable.com/api/v3/lego/mocs/MOC-" . "19433"  . $authkey ;
$data_moc1 = json_decode(file_get_contents($create_url1), true);

$create_url2 = "https://rebrickable.com/api/v3/lego/mocs/MOC-" . "15881"  . $authkey ;
$data_moc2 = json_decode(file_get_contents($create_url2), true);

$create_url3 = "https://rebrickable.com/api/v3/lego/mocs/MOC-" . "19561"  . $authkey ;
$data_moc3 = json_decode(file_get_contents($create_url3), true);

$create_url4 = "https://rebrickable.com/api/v3/lego/mocs/MOC-" . "14898"  . $authkey ;
$data_moc4 = json_decode(file_get_contents($create_url4), true);

$create_url5 = "https://rebrickable.com/api/v3/lego/mocs/MOC-" . "15292"  . $authkey ;
$data_moc5 = json_decode(file_get_contents($create_url5), true);






// if(!$moc_url){
// do {
//   $create_url_moc;
//   break;
// } while (!$moc_url);
// }else{
//   print($moc_url);
// }
// if(isset($moc_url)){
//   print($moc_url);
//   print($moc_nr);
// }else{
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="screen.css">
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <title>index</title>
</head>
<body id="body">
<header>


  <nav class="navbar navbar-expand-lg ">
  <div class="container">
  
  <img src="image/batman.png" id="minifigure" alt="">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class=""><i class="fas fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul>
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="moc.php">MOCs</a></li>
  <li><a href="lego.php">Lego</a></li>
  <li class=""><a href="account.php"><i class="fas fa-user-alt"></i>Account</a></li>
  </ul>
  </nav>    
  </div>

  </div>
</header>
<main id="home">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/falcon.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/castle.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/aragog.jpg" alt="Third slide">
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
  <h2>Moc's</h2>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href=""><img src="<?php  print($data_moc['moc_img_url']);   ?>" alt=""></a>
    </div>
    
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href=""><img src="<?php  print($data_moc1['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href=""><img src="<?php  print($data_moc2['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href=""><img src="<?php  print($data_moc3['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href=""><img src="<?php  print($data_moc4['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href=""><img src="<?php  print($data_moc5['moc_img_url']);?>" alt=""></a>
    </div>
 


  </div>
  <div class="link">
<a href="">Klik hier!</a>
  </div>
</div>
<div class="container">
<div class="row">

</div>
</div>
    
    
    
    </main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>