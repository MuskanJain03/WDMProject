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
    <title>Events</title>
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
            <a href="http://mxj4567.uta.cloud/blog" target="_blank">Blog</a>/
            <a href="./contacto.php">Contacto</a>/
            <a href="./welcome_user.php"><?php echo $_SESSION["fname"]; ?></a>/
            <a href="./logout.php">Log Out </a>
          </p>
        </div>
        <div class="class_banner txt-cntr fit-width">
        <h1>LOGIN</h1>
        <p>
          <span>LOGIN</span> &#62;
          <span>LOGIN</span> &#62;
          <span>EVENTS</span>
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
      <table class="w_t1">
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
    </div>
    <div>
<?php
  include 'DatabaseConnection.php';
  $sql = "SELECT * FROM eventdetails;";
  $result = mysqli_query($conn,$sql);
  
  $count = mysqli_num_rows($result);
  if ($count > 0) {
         // output data of each row
        echo "<div class='ev_cards'>";
         while($row = mysqli_fetch_array($result)) 
         {
            
             
              echo "<div class='ev_card'>";
                echo "<div class='ev_container'>";
                  echo "<img src='".$row['EventImage']."'class='ev_image' style='width:100%'>";
                  echo "<div class='ev_middle'>";
                    echo "<div class='ev_text'>";
                      echo"<h6>".$row["EventName"]."</h6>";
                      echo"<h4>'".$row['EventLocation']."'</h4>";
                      echo"<h5>'".$row['EventDate']."'<br>'".$row['EventTime']."'</h5>";
                    echo "</div>";
                    $url = "enroll_event.php?event_id=".$row['EventId'];
                    
                    echo"<form method='post' action='".$url."'><button class='ev_button' type = 'submit'>Enroll</button></form>";
                  echo"</div>";
                echo"</div>";
              echo"</div>";
            
          }
          echo"</div>";
        }
      

?>





      <!-- <div class="ev_cards">

      <div class="ev_card">
        <div class="ev_container">
          <img src="../assests/images/ev_img1.jpg"  class="ev_image" style="width:100%">
          <div class="ev_middle">
            <div class="ev_text">
              <h1>VIP Customer   Reception.</h1>
              <h4>See how we delivered the ultimate event for the VIP Customer Reception.</h4>
            </div>
            <form >
              <button class="ev_button" type = "submit">Enroll</button>
            </form>
          </div>
        </div>
      </div>

      <div class="ev_card">
        <div class="ev_container">
          <img src="../assests/images/ev_img2.jpg"  class="ev_image" style="width:100%">
          <div class="ev_middle">
            <div class="ev_text">
              <h1>MAGIC</h1>
              <h4>Read more about how Shepard AV collaborated on MAGIC</h4>
            </div>
            <button class="ev_button" type = "submit">Enroll</button>
          </div>
        </div>
      </div>

      <div class="ev_card">
        <div class="ev_container">
          <img src="../assests/images/ev_img3.jpg"  class="ev_image" style="width:100%">
          <div class="ev_middle">
            <div class="ev_text">
              <h1>NACAC</h1>
              <h4>See how Shepard AV partnered with NACAC</h4>
            </div>
            <button class="ev_button"type = "submit">Enroll</button>
          </div>
        </div>
      </div>

      <div class="ev_card">
        <div class="ev_container">
          <img src="../assests/images/ev_img4.jpg"  class="ev_image" style="width:100%">
          <div class="ev_middle">
            <div class="ev_text">
              <h1>REMODE</h1>
              <h4>The Premier Event for Disruptive and Sustainable Fashion</h4>
            </div>
            <form>
            <button class="ev_button"type = "submit">Enroll</button>
          </form>
          </div>
        </div>
      </div> -->
    </div>
  </div>
    <br>
    <br>
    <br>
    <!--div align="center">
      <table>
        <tr>
          <td>
            <button class="t_b2" style="background-color: #e65c00">ADD NEW</button>
          </td>
        </tr>
      </table>
    </div-->
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
