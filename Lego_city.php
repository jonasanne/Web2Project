<?php include_once 'scripts/config.php';?>
<?php include_once 'scripts/api.php';
 $authkey = "?key=3058fe9f830ab53859bf5e7668abe35d";
 $url_sets = "https://rebrickable.com/api/v3/lego/sets/";
 $data_set1 = json_decode(file_get_contents( $url_sets . "60223" . "-1" . $authkey), true);
 $data_set2 = json_decode(file_get_contents( $url_sets . "60216" . "-1" . $authkey), true);
 $data_set3 = json_decode(file_get_contents( $url_sets . "60212" . "-1" . $authkey), true);
 $data_set4 = json_decode(file_get_contents( $url_sets . "60217" . "-1" . $authkey), true);
 $data_set5 = json_decode(file_get_contents( $url_sets . "60215" . "-1" . $authkey), true);
 $data_set6 = json_decode(file_get_contents( $url_sets . "60222" . "-1" . $authkey), true);
 $data_set7 = json_decode(file_get_contents( $url_sets . "60220" . "-1" . $authkey), true);
 $data_set8 = json_decode(file_get_contents( $url_sets . "60237" . "-1" . $authkey), true);
 $data_set9 = json_decode(file_get_contents( $url_sets . "60239" . "-1" . $authkey), true);
 $data_set10 = json_decode(file_get_contents( $url_sets . "60221" . "-1" . $authkey), true);
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
        <title>New Lego city sets</title>
</head>
<body id="detail_overwatch">
<?php include_once 'include/header.php'; ?>
<main id="detail_overwatch">
<div class="img">
    <img src="image/legocity_ban.jpg" alt="">
  </div>
<div class="container-fluid">
  
<div class="left">
    <div class="top">
        <h1> New Lego City sets!</h1>
        <hr>
    </div>
    <div class="main">
        <p>
        Despite all the adventures that LEGO themes like NinjaGo and Star Wars can offer, LEGO City remains the toy manufacturer’s #1 best-selling line. Sets released during the previous couple of years took us on journeys to jungle forests and arctic deserts, however, the first half of 2019 looks as diverse as possible. Here are firefighters fighting fire with new pump devices, sky police fighting crimes up in the skies, as well as a boat, a couple of vehicles straight from the farm, and even a snow groomer. No doubt, every kid will find a set according to their interests. All sets are to be released during the first half of 2019, starting January 1. Prices and full descriptions are yet to be announced.
        <ul>
          <li>set 1: <?php print($data_set1['set_num']); ?> </li>
          <li>set 2: <?php print($data_set2['set_num']); ?> </li>
          <li>set 3: <?php print($data_set3['set_num']); ?> </li>
          <li>set 4: <?php print($data_set4['set_num']); ?> </li>
          <li>set 5: <?php print($data_set5['set_num']); ?> </li>
          <li>set 6: <?php print($data_set6['set_num']); ?> </li>
          <li>set 7: <?php print($data_set7['set_num']); ?> </li>
          <li>set 8: <?php print($data_set8['set_num']); ?> </li>
          <li>set 9: <?php print($data_set9['set_num']); ?> </li>
          <li>set 10: <?php print($data_set10['set_num']); ?> </li>
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
          <p class="card-text">Jump out of the truck cab and help the farmer harvest his crops! Unhook the trailer, lower the ramps and unload the combine harvester. Once the farmer has plowed the field, secure the tool and load up the harvester once again. Raise the ramps, hook up the trailer and then it's off to the next field. Be sure to wave at the scarecrow as you go by! A farmer's work is never done in LEGO® City!</p>
        </div>
</div>
<div class="card ">
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set2['set_num']); ?>"><h2><?php print($data_set2['name']); ?></h2></a>
      <hr>
    <p class="card-text">Protect the citizens of LEGO® City with the incredible 60216 Downtown Fire Brigade set, featuring a large fire ladder truck with new-for-January-2019 working light and sound brick, extending swivel ladder and fire hose with new-for-January-2019 pump with ‘water jet' function. This thrilling set also includes a 3-level building with roof, construction area with fence, falling lamppost and a porta-toilet with removable top and front, plus a free-standing crane with rotating arm and functioning winch.</p>

  </div>
  <img src="<?php print($data_set2[$img]); ?>" alt="">
</div>
      <div class="card">
        <img src="<?php print($data_set3[$img]); ?>" alt="">
        <div class="card-body col-lg-9">
          <a href="detail.php?nummer=<?php print($data_set3['set_num']); ?>"><h2><?php print($data_set3['name']); ?></h2></a>
          <hr>
          <p class="card-text">Join in the fun with your child as they protect LEGO® City with the 60212 Barbecue Burn Out set. This action-packed LEGO 4+ set is made to be fun and easy for preschoolers and youngsters, featuring a fantastic fire truck toy with extending bucket and tool storage, plus a Starter Brick base that lets first-time builders experience the pride of construction, all on their own.</p>
        </div>
</div>
<div class="card ">   
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set4['set_num']); ?>"><h2><?php print($data_set4['name']); ?></h2></a>
      <hr>
    <p class="card-text">Help the firefighters protect the forest critters of LEGO® City with the exciting 60217 Fire Plane set, featuring a dual-propeller firefighting plane with pontoons, detachable minifigure cockpit, hatch on top to load the water elements and a lever to drop them. This rescue building toy set also includes a fire buggy with new-for-January-2019 3-shot stud shooter, plus 2 trees, 3 minifigures and a skunk figure.</p>

  </div>
  <img src="<?php print($data_set4[$img]); ?>" alt="">
</div>
      <div class="card">
        <img src="<?php print($data_set5[$img]); ?>" alt="">
        <div class="card-body col-lg-9">
          <a href="detail.php?nummer=<?php print($data_set5['set_num']); ?>"><h2><?php print($data_set5['name']); ?></h2></a>
          <hr>
          <p class="card-text">Protect the citizens of LEGO® City with the action-packed 60215 Fire Station, featuring a 3-level fire station with office, relaxation room and scout tower, small waterside dock and a separate garage with large opening front door and a landing pad for the detachable scouting drone with spinning rotors and camera.</p>
        </div>
</div>
<div class="card ">
    
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set6['set_num']); ?>"><h2><?php print($data_set6['name']); ?></h2></a>
      <hr>
    <p class="card-text">Keep the skiers of LEGO® City happy with the 60222 Snow Groomer! This hardworking snow groomer building toy features an opening minifigure cab, swiveling 6-stud rapid shooter snow cannon, sturdy tracks and a large plow blade in front to push snow into place. This cool set also includes a set of skis with poles and 2 LEGO minifigures.</p>

  </div>
  <img src="<?php print($data_set6[$img]); ?>" alt="">
</div>
<div class="card ">
<img src="<?php print($data_set7[$img]); ?>" alt="">
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set7['set_num']); ?>"><h2><?php print($data_set7['name']); ?></h2></a>
      <hr>
    <p class="card-text">Put on your gloves, it’s time to clean up the LEGO City streets! Grab your broom while your partner gets the shovel and sweep the garbage into a pile. Phew, that fish is smelly! Get it shoveled into the dumpster, then empty it into the Garbage Truck before you move on to the next mess. Just don't slip on the banana!</p>

  </div>
</div>
      <div class="card">
        <div class="card-body col-lg-9">
          <a href="detail.php?nummer=<?php print($data_set8['set_num']); ?>"><h2><?php print($data_set8['name']); ?></h2></a>
          <hr>
          <p class="card-text">Build up your roads with LEGO® City 60237 Curve and Crossroad plates, to make hauling cargo or driving passengers around town even more entertaining. This construction toy set, including 1 curve road plate and 1 crossroad baseplate, is compatible with your existing LEGO City sets.</p>
          
        </div>
      <img src="<?php print($data_set8[$img]); ?>" alt="">
</div>
<div class="card ">
<img src="<?php print($data_set9[$img]); ?>" alt="">

  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set9['set_num']); ?>"><h2><?php print($data_set9['name']); ?></h2></a>
      <hr>
    <p class="card-text">Help keep the streets of LEGO® City flowing with this cool LEGO® City 60239 Police Patrol Car with removable roof, minifigure cab and iconic decorations, plus 2 traffic cones and a minifigure.</p>

  </div>
</div>
<div class="card ">   
  <div class="card-body col-lg-9">
      <a href="detail.php?nummer=<?php print($data_set10['set_num']); ?>"><h2><?php print($data_set10['name']); ?></h2></a>
      <hr>
    <p class="card-text">Explore the underwater world with the LEGO® City 60221 Diving Yacht! This awesome luxury Diving Yacht features a sun deck, removable roof, turning searchlight and storage/sleeping space inside, plus a sea floor scene with seaweed and an opening treasure chest with gem element.</p>

  </div>
  <img src="<?php print($data_set10[$img]); ?>" alt="">
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