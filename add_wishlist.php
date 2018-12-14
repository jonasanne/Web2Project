<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';?>
<?php include_once 'scripts/databaseconnect.php';?>
<?php 
session_start();
$authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";


    if(isset($_GET['moc'])) {
        $number = "https://rebrickable.com/api/v3/lego/mocs/" . $_GET['moc']. $authkey;
        $img = "moc_img_url";
      
      } else {
        $number ="https://rebrickable.com/api/v3/lego/sets/" . $_GET['nummer']. $authkey;
        $img = "set_img_url";
       
        
      }
      $data=json_decode(file_get_contents($number), true);

      $set_num = mysqli_real_escape_string($mysqli,$data['set_num']);
      $name = mysqli_real_escape_string($mysqli,$data['name']);
      $year = mysqli_real_escape_string($mysqli,$data['year']);
      $num_parts = mysqli_real_escape_string($mysqli,$data['num_parts']);
      $img_url = mysqli_real_escape_string($mysqli,$data[$img]);


      $username = $_SESSION['username'];
      $queryID = "SELECT id FROM account WHERE username = '$username'";
      $result = $mysqli->query($queryID);
      if($result -> num_rows > 0){
          $id = $result->fetch_assoc();
          $userID = $id['id'];
          $_SESSION['userID'] = $userID ;
          
          
      }
          
    if( !$username){
        header("location:login.php");
        $_SESSION['message']= "u are not logged in yet!";
    }else{
        
        $sql = "INSERT INTO  verlanglijst (userID,set_num,name,year,num_parts,img_url)"."VALUES('$userID','$set_num','$name','$year','$num_parts','$img_url')";
          if($mysqli->query($sql) == true){
            header('location:index.php');
        
        }
    }



      
      




?>