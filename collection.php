<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php include_once 'scripts/databaseconnect.php';
session_start();

$userID = $_SESSION['userID'];
$queryID = "SELECT * FROM user_lijst WHERE userID= '$userID'";
$result = $mysqli->query($queryID);
$table = $result->fetch_assoc();

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
 <main id="verlanglijst">
 <div class="container-fluid">
     <h1 style="align">My Collection</h1>
 <div class="cards">
 <?php

 foreach($result as $row ){
    $set_num =$row['set_num'];
    $set_name =$row['name'];
    $set_year =$row['year'];
    $set_parts =$row['parts'];
    $set_img =$row['img_url'];
    ?>
<!-- html -->
<div class="card-">
    <div class="top">
  <a href="detail.php?nummer=<?php print($set_num); ?> "><img class="card-img-top" src="<?php print($set_img); ?> " alt="Card image cap"></a>
  </div>
  <div class="card-body">
  <h5 class="card-title"><?php print($set_name); ?></h5>
    <div class="card-text">
      <div class="set_num"><span>number: </span><?php print($set_num);?></div>
      <div class="parts"><span> parts: </span><?php print($set_parts);?></div>
      <div class="year"><span> year: </span><?php print($set_year);?></div>
    </div>
  </div>
  </div>
    <?php
}
?>
 </div>
 </div>
 </main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="scripts/javascript/script.js"></script>
</body>
</html>