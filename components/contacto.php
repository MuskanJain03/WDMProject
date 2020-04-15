<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="Contacto page" content="Header,body, Footer">
    <meta name="keywords" content="HTML,CSS">
    <meta name="author-Krusha, Muskan" content="Project 2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contacto </title>
    <link rel="stylesheet" href="../css/ciudad.css">
  </head>
  <!-- header -->
  <?php
  include 'header.php';

  ?>
       <div class="class_banner txt-cntr fit-width">
        <h1>Contact US</h1>
        <p>
          <span>HOME</span> &#62;
          <span>CONTACT US</span>
        </p>
      </div>
    </nav>
  </header>
  <!-- Header Ends -->
  <!-- body starts  -->
<body>
    <div class="c_main fit-width txt-cntr" id="wrapper">
      <div class="c_block1">
        <h1>
          <span class="flt-left">NUESTRAS </span> 
          <span class="c_link">&nbsp;REDES</span>
          <br>
          <span  class="c_link"
             style="padding: 1% 0px 0 0%;">SOCIALES</span>
          <br>
        </h1>
        <hr class= "c_hrl">
        <br>
        <br>
        <table align="center" style="opacity: 0.7;">
          <tr>
            <td>
              <br>
              <img class="c_mwidth" src="../assests/images/instagram.png" title="Instagram">
              <br>
              <span>@genteyciudadorg</span>
              <br>
              <br>
            </td>
            <td>
              <img class="c_mwidth" src="../assests/images/twitter.png" title="Twitter">
              <br>
              <span>@genteyciudadorg</span>
              <br>
            </td>
          </tr>
          <tr>
            <td>
              <img src="../assests/images/phone.png" class="c_mwidth" title="Phone">
              <br>
              <br>
              <span>001 346 714 3892</span>
              <br>
              <span>058 414 8225881</span>
              <br>
              <span>056 933948007</span>
              <br>
              <br>
            </td>
            <td>
              <img src="../assests/images/mail.png" class="c_mwidth" title="Mail">
              <br>
              <span>info@genteyciudad.org</span>
              <br>
              <br>
            </td>
          </tr>
        </table>
      </div>
      <div style="width:40%;">
        <h1>
          <span class="flt-left">FORMULARIO DE</span>
          <br>    
          <span style="font-family:montserratItalic;color: #e65c00;float: left !important;
            ">CONTACTO</span>
          <br>    
        </h1>
        <hr class= "c_hrr">
        <br>
        <br>
        <form>
          <fieldset class="c_info">
            <label>Tu Nombre(requerido)</label>
            <br>
            <input type="text" id="fname" name="fname" placeholder="Tu Nombre">
            <br>
            <br>
            <br>
            <label>Tu Correo(requerido)</label>
            <br>
            <input type="text" id="fname" name="fname" placeholder="Tu Correo">
            <br>
            <br>
            <br>
            <label>Asunto</label>
            <br>
            <input type="text" id="fname" name="fname" placeholder="Asunto">
            <br>
            <br>
            <br>
            <label>Asunto</label>
            <br>
            <textarea cols="37" rows="11" id="fname" name="fname"  placeholder=""></textarea>
            <br>
            <br>
          </fieldset>
          <button class="button-Envar">ENVAR</button>
        </form>
      </div>
    </div>
  </body>
  <!-- *************** Body Ends ****************** -->
   <!-- footer starts -->
  <footer>
   <div class="f">
      <h2 class="txt-cntr ltr-spac">Escribenos, te invitamos a brindar lo mejor de ti para el bien
        <br> comun, <span class="active">queremos conocer acerca de tus ideas para mejorar.</span>
      </h2>
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
