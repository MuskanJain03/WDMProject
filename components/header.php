<?php
session_start();
if(isset($_SESSION['user_id']))
{
	echo'<header>
    <nav>
      <div class="fit-width pos_rel" id="top">
        <div class="inline h_nav">
          <img src="../assests/images/i.jpg" alt="logo" title="Genteociudad" class="h_logo">
        </div>
        <div class="inline pos_abs hc">
          <p class="hc_name">
            <a  href="./inicio.php">Inicio</a>/
            <a  href="./nosotros.php">Nosotros</a>/
            <a href="./equipos.php">Equipos</a>/
            <a href="http://mxj4567.uta.cloud/blog">Blog</a>/
            <a href="./contacto.php">Contacto</a>/
           
            <a href="./welcome_user.php">'.  $_SESSION["fname"].'</a>/
            <a href="./logout.php">Log Out </a>
          </p>
        </div>';
        
}
else
{
	echo '<header>
    <nav>
      <div class="fit-width pos_rel" id="top">
        <div class="inline h_nav">
          <img src="../assests/images/i.jpg" alt="logo" title="Genteociudad" class="h_logo">
        </div>
        <div class="inline pos_abs hc">
          <p class="hc_name">
            <a href="./inicio.php">Inicio</a>/
            <a href="./nosotros.php">Nosotros</a>/
                  <a href="./equipos.php">Equipos</a>/
                  <a href="http://mxj4567.uta.cloud/blog" >Blog</a>/
                  <a   href="./contacto.php">Contacto</a>/
                  <a href="./inicio_de_sesion.php">Inicio de Sesion</a>/
                  <a href="./sign_up.html">Sign Up</a>
          </p>
        </div>
      </div>
    ';
}
?>