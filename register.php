<?php 
include_once 'scripts/databaseconnect.php';
session_start();
$_SESSION['message'] = "";

if ($_SERVER['REQUEST_METHOD']== 'POST') {
      //variabele aanmaken van de post
      $username = $mysqli->real_escape_string($_POST['username']);
      $email = $mysqli->real_escape_string($_POST['email']);
      $password = md5($_POST['password']);
      $_SESSION['username'] =$username;
      $_SESSION['email'] =$email;
      //controleer of de passworden gelijk aan elkaar zijn
    if($_POST['password'] == $_POST['confirmpassword']){
      //als de 2 passworden hetzelfde zijn
      
      $sqlquery="SELECT * from account WHERE username='$username' ";
      $resultquery= mysqli_query($mysqli,$sqlquery);
      $count= mysqli_num_rows($resultquery);
      if($count>0){
        $_SESSION['message']="user not available";
      }else{
        echo 'tis gelukt!!!!';
        $sql = "INSERT INTO  account (username,password,email)"."VALUES('$username','$password','$email')";
        if($mysqli->query($sql) == true){
          $_SESSION['message']= "your account has been created!";
          header('location:login.php');
      
      }


      }
    }else{
      $_SESSION['message']="two passwords did not match!!";
    }
  }
  print($_SESSION['message']);
//controleer als username al bestaat
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
    
        <title>detail</title>
</head>
<body id="register">
<main id="register">
<div class="overlay">
<form method="post" action="<?php  print ($_SERVER['PHP_SELF']);  ?>">
   <div class="con">
   <header class="head-form">
      <h2>Register</h2>
      <p>Register here for your own account!</p>
   </header>
   <br>
   <div class="field-set">
     
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
         <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="username" required>
     <div>
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
         <input class="form-input" id="txt-input" type="email" placeholder="@Email" name="email" required>
         </div>
      
     
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
     
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     <div class="passwordconfirm">
     <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <input class="form-input" type="password" placeholder=" Confirm Password" id="pwd1"  name="confirmpassword" required>
      
     
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye1"></i>
     </span>
     </div>

     
     
      <br>
   </div>
  
   <div class="other">

      <button  class="btn submits sign-up" >Sign Up 
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
   </div>

     
  </div>
 
  
</form>
</div>
</main>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="scripts/javascript/script.js"></script>
</body>
</html>


