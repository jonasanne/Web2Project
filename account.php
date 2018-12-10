<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:Login.php");
}

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
    <div class="sets"><span>sets:</span></div>
    
    <div class="sets"><span>parts:</span></div>
    
    <div class="sets"><span>geboren op:</span></div>
    <div class="btn">
    <a href="logout.php">
    <button  class="btn submits sign-up" >Sign out </button>
      </a>
      </div>
    </div>
    </div>
  </section>
  
  <section class="content col-lg-8">
  
  <div class="all-small-cards">
      
    <div class=" small-cards col-lg-4">
      <a href="">
      <!-- icon -->
      <div class="icon"><i class="fas fa-shopping-bag"></i></div>

     <!-- tekst -->
     <div class="tekst">Mijn collectie <i class="fas fa-angle-right"></i> </div>
       <!-- <span class="tekst">Verlanglijst <i class="fas fa-angle-right"></i></span> -->
       </a>
      </div>
    <div class=" small-cards col-lg-4">
      <a href="">
      <!-- icon -->
      <div class="icon"><i class="far fa-heart"></i></div>

     <!-- tekst -->
     <div class="tekst">Verlanglijst <i class="fas fa-angle-right"></i> </div>
       <!-- <span class="tekst">Verlanglijst <i class="fas fa-angle-right"></i></span> -->
       </a>
      </div>
    <div class=" small-cards col-lg-4">
      <a href="">
      <!-- icon -->
      <div class="icon"><i class="far fa-heart"></i></div>

     <!-- tekst -->
     <div class="tekst">Verlanglijst <i class="fas fa-angle-right"></i> </div>
       <!-- <span class="tekst">Verlanglijst <i class="fas fa-angle-right"></i></span> -->
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
        <th>buy date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>

  </div>
      
    
  
  </section>
  </div>
  </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>

