<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="Nosotros page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author-Krusha, Muskan" content="Project 2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <link rel="stylesheet" href="../css/ciudad.css">
  </head>
  <!-- header -->
  <header>
    <nav>
      <div class="fit-width pos_rel" id="top">
        <div class="inline h_nav">
          <img src='../assests/images/i.jpg' alt="logo" title="Genteociudad" class="h_logo">
        </div>
        <div class="inline pos_abs hc">
          <p class="hc_name">
            <a  href="./inicio.php">Inicio</a>/
            <a  href="./nosotros.php">Nosotros</a>/
            <a href="./equipos.php">Equipos</a>/
            <a href="http://mxj4567.uta.cloud/blog">Blog</a>/
            <a href="./contacto.php">Contacto</a>/
            <a href="./welcome_user.php"><?php echo $_SESSION["fname"]; ?></a>/
            <a href="./logout.php">Log Out </a>
          </p>
        </div>
        <div class="class_banner txt-cntr fit-width">
        <h1>LOGIN</h1>
        <p>
          <span>LOGIN</span> &#62;
          <span>LOGIN</span>
        </p>
      </div>
    </div>
</nav>
</header>
<!-- header ends -->
<!-- body starts -->
<body>
  <div>
    <div class="w_div">
      <table class="w_t1" >
        <tr>
          <td>
            <button class="w_b1" type = "submit" onclick= "window.location.href = 'activities.php';">ACTIVITIES</button>
          </td>
        </tr>
        <tr>
          <td>
            <button class="w_b1" type = "submit" onclick= "window.location.href = 'EventsDisplay.php';">EVENTS</button>
          </td>
        </tr>
        <tr>
          <td>
            <button class="w_b1" type = "submit" onclick= "window.location.href = 'forum.html';">FORUM</button>
          </td>
        </tr>
      </table>
    <br>
    </div>
    <div>
      <h2 class="w_h2">Welcome to</h2>
      <img src="../assests/images/i.jpg" class="w_img">
    </div>
  </div>
<br>
<br><br>



</body>
<!-- body ends -->
  <!-- footer starts -->
  <footer>
    <span style="clear:both"></span>
        <div class="f">
            <div class="f_search">
                <h2>
                    <span>Contactate con</span>
                    &nbsp;<span class="active">Nosotros</span>
                    
                    <input type="text" placeholder="Email" class="ip_f">
                    <button class="f_button">ENVAR</button>
                </h2>
            </div>
        </div>
      <div class="hex-dark">
          <div class= "f_sub">
          <div  class="f_icons">
        <img src="../assests/images/mail.png" title="Mail">
        </div>
        <div   class="f_icons">
            <img src="../assests/images/twitter.png" title="Twitter">
            </div>
            <div   class="f_icons">
                <img src="../assests/images/instagram.png" title="Instagram">
                </div>
    </div>
      </div>
    <div class="f_bottom">
        <span class="active">DiazApps</span> &copy;&nbsp;
        <span style="opacity: 0.6;">2020 All Rights Reserved</span>
    </div>
    </footer>
<!-- footer ends -->
    <div class="scroll_top"> 
      <a href="#top">&and;</a>
    </div>
</html>
