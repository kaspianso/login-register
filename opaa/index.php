<?php

header('content-type: text/html; charset: utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('inc/config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Magebit</title>
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="icon" type="png" href="ico/logo.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200">
    <script src="script/validate.js"></script>
  </head>

  <body>
<div class="content">
  <?php
     if(file_exists($page)){ include($page); }else{
     echo error("Fails:  <i>".$page."</i>  Neeksistē!");
    }?>
</div>
  <script src="script/jquery-3.2.1.js"></script>
  <script src="script/animate.js"></script>


  </body>

</html>
