<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <img class="avatar" src="https://i.gifer.com/26f7.gif" width="65" />
      Universal Code</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Anasayfa</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="duyuru.php">Duyuru</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Discord</a>
          </li>       
        </ul>
      </div>
    </div>
    <?php
     if(isset($_SESSION['user'])) 
     {?>
<ul class="ustmenu">
<li>
      <a href="profil.php">Profil</a>
  </li>
  <li>
  <a href="/logout.php">Çıkış</a>
  </li>
</ul>
     <?php
        }else{ ?>
         <a href="
     <?php echo url("731622429926883380", "http://codetr.ga/login.php", "identify guilds"); ?>">Giriş </a></h3>
        <?php } ?>
  </nav>