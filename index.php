<?php

/* Home Page
 * The home page of the working demo of oauth2 script.
 * @author : MarkisDev
 * @copyright : https://markis.dev
 */
 
# Enabling error display
error_reporting(E_ALL);
ini_set('display_errors', 1);
 

# Including all the required scripts for demo
require __DIR__ . "/functions.php";
require __DIR__ . "/discord.php";
# ALL VALUES ARE STORED IN SESSION!
# RUN `echo var_export([$_SESSION]);` TO DISPLAY ALL THE VARIABLE NAMES AND VALUES.
# FEEL FREE TO JOIN MY SERVER FOR ANY QUERIES - https://join.markis.dev

?>
<?php include("./icerikler/baglanti.php");?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<?php 
  $konu = $db->prepare("select * from ayarlar");
  $konu->execute(array());
  $x = $konu->fetchALL(PDO::FETCH_ASSOC);

  foreach($x as $m){

    ?>
      <title><?php echo $m["baslik"];?></title>
    <?php
  }
?>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- UST -->
<?php require __DIR__ . '/icerikler/ust.php'; ?>
<!-- UST -->

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">


    <?php
     if(isset($_SESSION['user'])) 
     {?>


<div id="avatar2">
              <img class="avatar" src="https://cdn.discordapp.com/avatars/<?php $extention = is_animated($_SESSION['user_avatar']); echo $_SESSION['user_id'] . "/" . $_SESSION['user_avatar'] . $extention; ?>" />
              <br>
              <?php echo $_SESSION['username'] ?>
</div>
     <?php
        }else{ ?>
             <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="">
        <?php } ?>

      <h1 class="masthead-heading text-uppercase mb-0">Universal Code </h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Discord - MineCraft - WebSite</p>

    </div>
  </header>
  <hr>
  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">


      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><font color="white">YETKILILER</font></h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

      <?php 
  $konu = $db->prepare("select * from yetkililer");
  $konu->execute(array());
  $x = $konu->fetchALL(PDO::FETCH_ASSOC);

  foreach($x as $m){
?>
<div id="avatar2">
              <img class="avatar" height="100" width="100" src="<?php echo $m["avatar"]; ?>" />
              <br>
              <font color="white"><?php echo $m["isim"]; ?></font>
</div>
<?php
  }
?>
      </div>
      <!-- /.row -->

    </div>
  </section>

<!-- ALT -->
<?php require __DIR__ . '/icerikler/alt.php'; ?>
<!-- ALT -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>

</body>

</html>
