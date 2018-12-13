<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php
//mocs
$authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";
$moclink="https://rebrickable.com/api/v3/lego/mocs/MOC-";
//"https://rebrickable.com/api/v3/lego/mocs/?key=3058fe9f830ab53859bf5e7668abe35d";

//zo vraag je data op lol
//$random=rand(999,25000);
//dit zijn de mocs
$url_moc = $url_sets = "https://rebrickable.com/api/v3/lego/mocs/MOC-";
$data_moc1=json_decode(file_get_contents($url_moc . "15849" . $authkey), true);
$data_moc2=json_decode(file_get_contents($url_moc . "15881" . $authkey), true);
$data_moc3=json_decode(file_get_contents($url_moc . "19683" . $authkey), true);
$data_moc4=json_decode(file_get_contents($url_moc . "14898" . $authkey), true);
$data_moc5=json_decode(file_get_contents($url_moc . "15292" . $authkey), true);
$data_moc6=json_decode(file_get_contents($url_moc . "19950" . $authkey), true);
$data_moc7=json_decode(file_get_contents($url_moc . "16003" . $authkey), true);
$data_moc8=json_decode(file_get_contents($url_moc . "13999" . $authkey), true);
$data_moc9=json_decode(file_get_contents($url_moc . "17649" . $authkey), true);
$data_moc10=json_decode(file_get_contents($url_moc . "14637" . $authkey), true);
$data_moc11=json_decode(file_get_contents($url_moc . "13424" . $authkey), true);
$data_moc12=json_decode(file_get_contents($url_moc . "16083" . $authkey), true);
//dit zijn de legosets

$url_sets = "https://rebrickable.com/api/v3/lego/sets/";
$data_set1 = json_decode(file_get_contents( $url_sets . "75212" . "-1" . $authkey), true);
$data_set2 = json_decode(file_get_contents( $url_sets . "75190" . "-1" . $authkey), true);
$data_set3 = json_decode(file_get_contents( $url_sets . "21125" . "-1" . $authkey), true);
$data_set4 = json_decode(file_get_contents( $url_sets . "60154" . "-1" . $authkey), true);
$data_set5 = json_decode(file_get_contents( $url_sets . "71043" . "-1" . $authkey), true);
$data_set6 = json_decode(file_get_contents( $url_sets . "75953" . "-1" . $authkey), true);
$data_set7 = json_decode(file_get_contents( $url_sets . "75218" . "-1" . $authkey), true);
$data_set8 = json_decode(file_get_contents( $url_sets . "75187" . "-1" . $authkey), true);
$data_set9 = json_decode(file_get_contents( $url_sets . "60197" . "-1" . $authkey), true);
$data_set10 = json_decode(file_get_contents( $url_sets . "41332" . "-1" . $authkey), true);
$data_set11 = json_decode(file_get_contents( $url_sets . "41314" . "-1" . $authkey), true);
$data_set12 = json_decode(file_get_contents( $url_sets . "75181" . "-1" . $authkey), true);

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
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
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
  <h2>Moc's</h2>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc1['set_num']) ?>"><img src="<?php  print($data_moc1['moc_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc2['set_num']) ?>"><img src="<?php  print($data_moc2['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc3['set_num']) ?>"><img src="<?php  print($data_moc3['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc4['set_num']) ?>"><img src="<?php  print($data_moc4['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc5['set_num']) ?>"><img src="<?php  print($data_moc5['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc6['set_num']) ?>"><img src="<?php  print($data_moc6['moc_img_url']);?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc7['set_num']) ?>"><img src="<?php  print($data_moc7['moc_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc8['set_num']) ?>"><img src="<?php  print($data_moc8['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc9['set_num']) ?>"><img src="<?php  print($data_moc9['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc10['set_num']) ?>"><img src="<?php  print($data_moc10['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc11['set_num']) ?>"><img src="<?php  print($data_moc11['moc_img_url']);?>" alt=""></a>
    </div><div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?moc=<?php print($data_moc12['set_num']) ?>"><img src="<?php  print($data_moc12['moc_img_url']);?>" alt=""></a>
    </div>
 


  </div>
  <div class="link">
<a href="moc.php">Klik hier voor alle mocs!</a>
  </div>
</div>
<div class="container" id="moc" name="lego">
  <h2>Lego</h2>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set1['set_num']); ?>"><img src="<?php  print($data_set1['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set2['set_num']); ?>"><img src="<?php  print($data_set2['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set3['set_num']); ?>"><img src="<?php  print($data_set3['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set4['set_num']); ?>"><img src="<?php  print($data_set4['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set5['set_num']); ?>"><img src="<?php  print($data_set5['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set6['set_num']); ?>"><img src="<?php  print($data_set6['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set7['set_num']); ?>"><img src="<?php  print($data_set7['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set8['set_num']); ?>"><img src="<?php  print($data_set8['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set9['set_num']); ?>"><img src="<?php  print($data_set9['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set10['set_num']); ?>"><img src="<?php  print($data_set10['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set11['set_num']); ?>"><img src="<?php  print($data_set11['set_img_url']);   ?>" alt=""></a>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
    <a href="detail.php?nummer=<?php print($data_set12['set_num']); ?>"><img src="<?php  print($data_set12['set_img_url']);   ?>" alt=""></a>
    </div>
    
    
 


  </div>
  <div class="link">
<a href="lego.php">Klik hier voor alle legosets!</a>
  </div>
    
    
    
    </main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="scripts/javascript/script.js"></script>
</body>
</html>