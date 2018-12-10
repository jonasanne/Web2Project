<?php 
 include_once 'scripts/databaseconnect.php';
 //$checkusername = $_SESSION['username'];
//controleren of username al bestaat
if(!empty($_POST) ){

   //Als de pagina gepost is & de email & pwd zijn geset
   if(isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["password"]) ){
       //Check of geposte username al in de db zit
       session_start();
       $username = mysqli_real_escape_string($mysqli,$_POST['username']);
       $password = mysqli_real_escape_string($mysqli,$_POST['password']);

       $sql= "SELECT * FROM `account` WHERE `username` = '$username'";
       $result = $mysqli->query($sql);
       $user = $result->fetch_assoc();
       print_r($user);
       if($result != NULL){
           //De gebruiker zit in de DB (gechecked op username)
           $sugar = $user['password'];
           $usernamecontrole = $user['username'];
           if($sugar == md5($_POST["password"])){
               //Het ingegeven wachtwoord komt overeen met het geïncripteerde wachtwoord in de DB
               //Check of het vinkje "ingelogd blijven" is aangevinkt
               $_SESSION["username"] = $username;
               // print_r($_SESSION["email"]);
               header("location:account.php");
               exit;
            }
           else if($usernamecontrole != $_POST["username"]){
               //De gebruiker zit NIET in de DB (gechecked op username)
               $error="No active account was found for this email address.";
           }
           else{
               //Het ingegeven wachtwoord komt niet overeen met het wachtwoord in de DB
               $error = "The password is incorrect";
           }
       }
   }else{
      $_SESSION['message']='error';
   }
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    
        <title>detail</title>
</head>
<body id="login">
<main id="login">
<div class="overlay">
<form method="post" action="<?php  print ($_SERVER['PHP_SELF']);  ?>">
   <div class="con">
   <header class="head-form">
      <h2>Log In</h2>
      <p>login here using your username and password</p>
   </header>
   <div class="main">
   <div class="field-set">
     
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
         <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="username" >
     
      <br>
     
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" >
     
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>

     
     
      <br>
      <button class="log-in"> Log In </button>
   </div>
  
   <div class="other">
    
      <a  class="signup" href="register.php">
      <div  class="btn submits sign-up test">Sign Up 
      <i class="fa fa-user-plus" aria-hidden="true"></i>
</div>
      </a>
   </div>
   </div>

     
  </div>
 
  
</form>
</div>
</main>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>