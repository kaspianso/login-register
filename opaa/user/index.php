<?php
session_start();
include_once('../inc/config.php');
include('includes/inc.php');
include('includes/users.inc.php');
include('includes/users.inc-view.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Magebit</title>
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="icon" type="png" href="../ico/logo.png" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200">
  </head>

  <body>
<?php

  if(isset($_SESSION['user'])){
?>
    <div class="content">

      <div id="main_nav">
      	<div class="menu_header">Hey, <?php $row = $DB->query("SELECT name FROM admin_users WHERE `email` = '".$_SESSION['user']."' AND `pass` = '".$_SESSION['pass']."'"); while ($x = $row->fetch_assoc()) {echo $x['name'];}?> [<a href="includes/logout.php?logout">LOGOUT</a>]</div>
      		<div class="menu_header">User</div>
      		<a href="<?php echo $base_url;?>user/?attributes"><li>Add user attributes</li></a>
      </div>
      <?php
      	  if(file_exists($pagex)){ include($pagex); }else{
      		echo "File:  <i>".$pagex."</i>  does not exist!";
      	  }
      ?>
    </div>
<?php
}else{
  	include('includes/goback.php');
  }
?>
  </body>

</html>
