<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php include_once 'scripts/databaseconnect.php';
session_start();

if(!isset($_SESSION['username'])){
   header("Location:Login.php");
}


$userid =$_SESSION['userID'];
$sql= "SELECT COUNT(*) as num_sets FROM `user_lijst` where userID='$userid'";
$result = $mysqli->query($sql);
$table = $result->fetch_assoc();

$sql_parts= "SELECT sum(parts) as total_parts FROM `user_lijst` WHERE userID='$userid'";
$result_parts = $mysqli->query($sql_parts);
$table_parts = $result_parts->fetch_assoc();

$sql_last= "SELECT * FROM `user_lijst` WHERE userID='$userid' ORDER BY mijn_lijstID DESC";
$result_last = $mysqli->query($sql_last);
$table_last = $result_last->fetch_assoc();


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
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <title>index</title>
</head>
<body id="account">
<?php include_once 'include/header.php'; ?>
 <main id="account"> 
   <div class="container-fluid ">
     <div class="row">
  <section class="col-lg-3" id="navigatie">
    
    <div class=" profile">
      <div class="img">
      <img src="image/lego_avatar.png" width="" height="100px" alt="">
    </div>
    <div class="username"><h2><?php print($_SESSION['username']); ?></h2></div>
    <div class="align">
    <div class="sets"><span>sets: </span> <?php print($table['num_sets']); ?> </div>
    
    <div class="sets"><span>parts: </span><?php print($table_parts['total_parts']); ?> </div>
    
    <div class="btn">
    <a href="logout.php">
    <button  class="btn submits sign-up" >Sign out</button>
      </a>
      </div>
    </div>
    </div>
  </section>
  
  <section class="content col-lg-8">
  
  <div class="all-small-cards">
      
    <div class=" small-cards">
      <a href="collection.php">
      <!-- icon -->
      <div class="icon"><i class="fas fa-shopping-bag"></i></div>

     <!-- tekst -->
     <div class="tekst">My collection <i class="fas fa-angle-right"></i> </div>
       </a>
      </div>
    <div class=" small-cards">
      <a href="verlanglijst.php">
      <!-- icon -->
      <div class="icon"><i class="far fa-heart"></i></div>

     <!-- tekst -->
     <div class="tekst">wishlist <i class="fas fa-angle-right"></i> </div>
       </a>
      </div>
    
  </div>
  
  <div class="second-row">
    <h3>Last bought</h3>  
  <table class="table table-condensed">
  <thead>
      <tr>
        <th>name</th>
        <th>Set_num</th>
        <th>parts</th>
      </tr>
    </thead>
    <tbody>
    <?php
  foreach($result_last as $row ){
    $set_num =$row['set_num'];
    $set_name =$row['name'];
    $set_year =$row['year'];
    $set_parts =$row['parts'];
    $set_img =$row['img_url'];
    ?>
<!-- html -->

      <tr>
        <td> <?php print($set_name);?> </td>
        <td><?php print($set_num) ?></td>
        <td><?php print($set_parts); ?></td>
      </tr>
   
  <?php
}
?> 
 </tbody>
  </table>
  </div>
  </section>
  </div>
  </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="scripts/javascript/script.js"></script>
</body>
</html>

