<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';

$authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";

$url_moc = $url_sets = "https://rebrickable.com/api/v3/lego/mocs/MOC-";
$url_sets = "https://rebrickable.com/api/v3/lego/sets/";
$data_moc1=json_decode(file_get_contents($url_moc . "20097" . $authkey), true);
$data_moc2=json_decode(file_get_contents($url_moc . "20098" . $authkey), true);
$data_moc3=json_decode(file_get_contents($url_moc . "20044" . $authkey), true);
$data_moc4=json_decode(file_get_contents($url_moc . "20047" . $authkey), true);

$data_moc5=json_decode(file_get_contents($url_moc . "16915" . $authkey), true);
$data_moc6=json_decode(file_get_contents($url_moc . "19433" . $authkey), true);
$data_moc7=json_decode(file_get_contents($url_moc . "18916" . $authkey), true);
$data_moc8=json_decode(file_get_contents($url_moc . "15881" . $authkey), true);

$data_moc9=json_decode(file_get_contents($url_moc . "19485" . $authkey), true);
$data_moc10=json_decode(file_get_contents($url_moc . "18829" . $authkey), true);
$data_moc11=json_decode(file_get_contents($url_moc . "16980" . $authkey), true);
$data_moc12=json_decode(file_get_contents($url_moc . "17099" . $authkey), true);





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
<body id="body">
<?php include_once 'include/header.php'; ?>
<main id="moc">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/carousel14.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/carousel11.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/carousel12.jpg" alt="Third slide">
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
    <span class="new-moc"> <h2> New MOCs</h2> <hr class="container"></span>
<div class="container-fluid" id="moc">
  <div class="row">
    
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc1['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc1['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc1['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc1['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc1['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc1['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc2['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc2['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc2['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc2['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc2['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc2['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc3['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc3['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc3['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc3['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc3['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc3['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc4['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc4['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc4['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc4['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc4['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc4['year']); ?></div>
          </div>
       </div>
      </div>
    </div>

</div>

<span class="new-moc"> <h2> Popular MOCs</h2> <hr class="container"></span>
<div class="container-fluid" id="moc">
  <div class="row">
    
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc5['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc5['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc5['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc5['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc5['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc5['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc6['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc6['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc6['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc6['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc6['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc6['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc7['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc7['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc7['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc7['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc7['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc7['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc8['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc8['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc8['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc8['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc8['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc8['year']); ?></div>
          </div>
       </div>
      </div>
    </div>

</div>
<span class="new-moc"> <h2>MOCs with free building instructions</h2> <hr class="container"></span>
<div class="container-fluid" id="moc">
  <div class="row">
    
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc9['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc9['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc9['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc9['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc9['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc9['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc10['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc10['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc10['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc10['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc10['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc10['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc11['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc11['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc11['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc11['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc11['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc11['year']); ?></div>
          </div>
       </div>
      </div>
      <div class="card col-lg-3 col-md-6 col-sm-12" style="">
        <a href="detail.php?moc=<?php print($data_moc12['set_num']) ?>"><img class="card-img-top" src="<?php print($data_moc12['moc_img_url']); ?>" alt="Card image cap"></a>
        <div class="card-body">
        <h5 class="card-title"> <?php print($data_moc12['name']); ?></h5>
          <div class="card-text">
            <div class="set_num"><span class="bold">number: </span> <?php print($data_moc12['set_num']); ?></div>
            <div class="parts"><span class="bold"> parts: </span><?php print($data_moc12['num_parts']); ?></div>
            <div class="year"><span class="bold"> year: </span> <?php print($data_moc12['year']); ?></div>
          </div>
       </div>
      </div>
    </div>

</div>


  
    </main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="scripts/javascript/script.js"></script>
</body>
</html>