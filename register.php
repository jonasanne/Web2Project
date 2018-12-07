<?php 
include_once 'scripts/databaseconnect.php';
session_start();
$_SESSION['message'] = "";
if ($_SERVER['REQUEST_METHOD']== 'POST') {
    if($_POST['password'] == $_POST['confirmpassword']){

        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']);
        $_SESSION['username'] =$username;
        $_SESSION['email'] =$email;
        $_SESSION['password'] =$password;
        $sql = "INSERT INTO  account(username,password,email)"."VALUES('$username','$password','$email')";
        //alst is gelukt keer redirect
        if($mysqli->query($sql) == true){
            $_SESSION['message']= "your account has been created!";
            header('location:login.php');
        }else{
            $_SESSION['message'] = "your account has not been created!";
        }
    }else{
        $_SESSION['message']="two passwords did not match!!";
    }
}else{
    $_SESSION['message']="two passwords did not match!!";

    
    
}


// $stmt->bind_param("sss", $_POST['username'], $_POST['password']);
// $stmt = mysqli_prepare($sql);
// $stmt->execute();


// if(isset($_POST['save'])){
//     $sql = "INSERT INTO users (username, password, email)
//     VALUES ('".$_POST["username"]."','".$_POST["password"]."','"."')";
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
    
        <title>detail</title>
</head>
<body id="register">
<main id="register">
<div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form method="post">
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Log In</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>login here using your username and password</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="username" required>
     <div>
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="email" placeholder="@Email" name="email" required>
         </div>
      
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     <div class="passwordconfirm">
     <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder=" Confirm Password" id="pwd1"  name="confirmpassword" required>
      
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye1"></i>
     </span>
     </div>

     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->
   </div>
  
<!--   other buttons -->
   <div class="other">
<!--      Forgot Password button-->
<!--     Sign Up button -->

      <button  class="btn submits sign-up" >Sign Up 
<!--         Sign Up font icon -->
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
<!--      End Other the Division -->
   </div>

     
<!--   End Conrainer  -->
  </div>
 
  
  <!-- End Form -->
</form>
</div>
</main>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>


<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>