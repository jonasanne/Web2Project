<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';
 
 $authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";
 
 if(isset($_GET['moc'])) {
  $number = "https://rebrickable.com/api/v3/lego/mocs/" . $_GET['moc']. $authkey;
  $img = "moc_img_url";
} else {
  $number ="https://rebrickable.com/api/v3/lego/sets/" . $_GET['nummer']. $authkey;
  $img = "set_img_url";
}
$data=json_decode(file_get_contents($number), true);
 
$url_moc = $url_sets = "https://rebrickable.com/api/v3/lego/mocs/MOC-";
$url_sets = "https://rebrickable.com/api/v3/lego/sets/";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="scripts/css/screen.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <title>detail</title>
</head>
<body id="detail">
    <?php include_once 'include/header.php'; ?>
    <main id="detail">
        <div class="container-fluid">
            <div class="top">
                <div class="left">
                    <img src=" <?php print($data[$img]); ?>"  alt="">
                </div>
                <div class="right">
                    <div class="title">
                        <h2><?php print($data['name']); ?> </h2>
                    </div>
                    <div class="information">
                        <div class="number">
                            <div class="align">number</div>
                            <div class="align"><?php print($data['set_num']); ?></div>
                        </div>
                        <div class="parts">
                            <div class="align">parts</div>
                            <div class="align"><?php print($data['num_parts']); ?></div>
                        </div>
                        <div class="year">
                            <div class="align">year</div>
                            <div class="align"><?php print($data['year']); ?></div>
                        </div>
                    </div>
                    <div class="btn">
                        <a href="add_wishlist.php?
                            <?php
                            if(isset($_GET['moc'])) {
                                print("moc=".$_GET['moc']);
                            } else {
                                print("nummer=".$_GET['nummer']);
 
                            } ?>">
                                <button  class="btn submits sign-up" >Add to wishlist </button>
                        </a>
                    </div>
                    <div class="btn">
                        <a href="add_collection.php?
                            <?php
                            if(isset($_GET['moc'])) {
                                print("moc=".$_GET['moc']);
                            } else {
                                print("nummer=".$_GET['nummer']);
 
                            } ?>">
                                <button  class="btn submits sign-up" >Add to my collection</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section">People also like:</div>
            <div class="cards">
                <div class="row">
                    <!-- aanmaken van 4 mocs -->
                   <?php for ($i = 1; $i < 5; $i++){
                       //Databadse van rebrickable bevat mocs met nummers tussen 1000 & ongeveer 25 000
                       $randNum = random_int (1000, 25000);
                       //Check of resultaat in db zit op basis van de header (terug te vinden onder het 11e item)
                       if(get_headers($url_moc . $randNum . $authkey)[11] == 'HTTP/1.1 200 OK'){
                            //data ophalen
                            $data_moc=json_decode(file_get_contents($url_moc . $randNum . $authkey), true);
                            ?>
                                <!-- html per item -->
                                <div class="card col-lg-3 col-md-4 col-sm-12" style="">
                                    <a href="detail.php?moc=<?php print($data_moc['set_num']); ?>">
                                        <img class="card-img-top" src=" <?php print($data_moc['moc_img_url']) ?>" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php print($data_moc['name']); ?></h5>
                                        <div class="card-text">
                                            <div class="set_num">
                                                <span>number: </span>
                                                <?php print($data_moc['set_num']); ?>
                                            </div>
                                            <div class="parts">
                                                <span> parts: </span>
                                                <?php print($data_moc['num_parts']); ?>
                                            </div>
                                            <div class="year">
                                                <span> year: </span>
                                                <?php print($data_moc['year']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                       }else{
                        $i--;
                       }
                       ?>
                    <?php } ?>
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