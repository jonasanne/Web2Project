<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';
 $authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";
 $url_sets = "https://rebrickable.com/api/v3/lego/sets/";
 $data_set1 = json_decode(file_get_contents( $url_sets . "75970" . "-1" . $authkey), true);
 $data_set2 = json_decode(file_get_contents( $url_sets . "75971" . "-1" . $authkey), true);
 $data_set3 = json_decode(file_get_contents( $url_sets . "75972" . "-1" . $authkey), true);
 $data_set4 = json_decode(file_get_contents( $url_sets . "75973" . "-1" . $authkey), true);
 $data_set5 = json_decode(file_get_contents( $url_sets . "75974" . "-1" . $authkey), true);
 $data_set6 = json_decode(file_get_contents( $url_sets . "75975" . "-1" . $authkey), true);
$img = "set_img_url";


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
        <title>New Overwatch sets</title>
</head>
<body id="detail_overwatch">
<?php include_once 'include/header.php'; ?>
<main id="detail_overwatch">
<div class="img">
    <img src="image/overwatch_ban.jpg" alt="">
  </div>
<div class="container-fluid">
  
<div class="left">
    <div class="top">
        <h1> New Overwatch lego sets!</h1>
        <hr>
    </div>
    <div class="main">
        <p>
        Blizzard and Lego showed off the first Overwatch Lego set last month in the form of a limited-edition Bastion figure, and now at BlizzCon the two companies are taking the wraps off the rest of the lineup.
        <br> <br>
        There are a total of six sets coming from the two companies: a $14.99 Tracer vs. Widowmaker set, 
        a $19.99 Hanzo vs. Genji set, a $29.99 Dorado Showdown set, a $39.99 D.Va & Reinhardt set, an even bigger $49.99 Bastion model
        (which fixes the first version by adding a conversion to turret mode), and an $89.99 Watchpoint: Gibraltar set. The first wave of sets will feature Lego versions of Tracer, Widowmaker, Hanzo, Genji, Soldier: 76, McCree, D.Va, Reinhardt, Pharah, Mercy, Reaper, and Winston to start, but if Lego’s other licensed lines are anything to go by,
        odds are more heroes will be available soon.
        <ul>
          <li>set 1: <?php print($data_set1['set_num']); ?> </li>
          <li>set 2: <?php print($data_set2['set_num']); ?> </li>
          <li>set 3: <?php print($data_set3['set_num']); ?> </li>
          <li>set 4: <?php print($data_set4['set_num']); ?> </li>
          <li>set 5: <?php print($data_set5['set_num']); ?> </li>
          <li>set 6: <?php print($data_set6['set_num']); ?> </li>
        </ul>
        </p>
    
    </div>
<div class="sets">
    <div class="cards container-fluid">
      <div class="card">
        <img src="<?php print($data_set1[$img]); ?>" alt="">
        <div class="card-body col-lg-9">
          <a href="detail.php?nummer=<?php print($data_set1['set_num']); ?>"><h2> <?php print($data_set1['name']); ?></h2></a>
          <hr>
          <p class="card-text">75970 features attack hero Tracer and defense/sniper hero Widowmaker with the payload escorted on the map Watchpoint: Gibraltar.</p>
        </div>
</div>
<div class="card ">
    
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set2['set_num']); ?>"><h2><?php print($data_set2['name']); ?></h2></a>
      <hr>
    <p class="card-text">75971 is set at the final capture point of Hanamura and features defense/sniper hero Hanzo with his bow, attack hero Genji with his Dragon Blade and shuriken, and Hanamura security guard.</p>

  </div>
  <img src="<?php print($data_set2[$img]); ?>" alt="">
</div>
      <div class="card">
        <img src="<?php print($data_set3[$img]); ?>" alt="">
        <div class="card-body col-lg-9">
          <a href="detail.php?nummer=<?php print($data_set3['set_num']); ?>"><h2><?php print($data_set3['name']); ?></h2></a>
          <hr>
          <p class="card-text">75972 shows a Dorado home and payload, and features the attack heroes McCree with his trusty Peacekeeper revolver, Reaper with dual Hellfire Shotguns, and Soldier: 76 with Pulse Rifle.</p>
        </div>
</div>
<div class="card ">   
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set4['set_num']); ?>"><h2><?php print($data_set4['name']); ?></h2></a>
      <hr>
    <p class="card-text">75973 features two tank heroes: pro gamer D.Va and her MEKA, and the massively armed and armored Reinhardt.</p>

  </div>
  <img src="<?php print($data_set4[$img]); ?>" alt="">
</div>
      <div class="card">
        <img src="<?php print($data_set5[$img]); ?>" alt="">
        <div class="card-body col-lg-9">
          <a href="detail.php?nummer=<?php print($data_set5['set_num']); ?>"><h2><?php print($data_set5['name']); ?></h2></a>
          <hr>
          <p class="card-text">75974 features a scaled-up model of defensive hero Bastion in his traditional color scheme, as opposed to the Omnic colors in 75897 Omnic Bastion.</p>
        </div>
</div>
<div class="card ">
    
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set6['set_num']); ?>"><h2><?php print($data_set6['name']); ?></h2></a>
      <hr>
    <p class="card-text">75975 features the shuttle at the end of the map Watchpoint: Gibraltar and features the tank scientist gorilla Winston, angelic support healer Mercy, armored attack hero Pharah, and dual shotgun wielding Reaper.</p>

  </div>
  <img src="<?php print($data_set6[$img]); ?>" alt="">
</div>
</div>
</div>
<div class="right">
</div>

</div>
</main>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>