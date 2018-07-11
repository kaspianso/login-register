<?php
session_start();
header('content-type: text/html; charset: utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
<div id="login-form">
  <?php
  	$rop = $DB->query("SELECT * FROM admin_users");
  	if(isset($_POST['log-in'])){

      if(empty($_POST['login']) || empty($_POST['password'])){
        header("location:index.php?empty=Fill in all the fields");

      }else{

    		$login = smart($_POST['login']);
    		$pass  = smart($_POST['password']);
        $passh = md5(md5($pass));
        $select = $DB->query("SELECT * FROM `admin_users` WHERE user = '$login' AND pass = '$passh'");
    		$user = $select->num_rows;

    		if($user == 1){
          $_SESSION['user'] = $login;
          $_SESSION['pass'] = $passh;
          header('Refresh: 0; url='.$base_url.'user');
    		}else{

    			header("location:index.php?wrong=Wrong username and/or password!");
    		}
      }
  	}
  ?>

  <form  method="POST"  name="login-form" onsubmit="return validateLogin()">
    <?php
      if(@$_GET['empty']==true){
    ?>
      <center style='color: red;'><?php echo $_GET['empty'] ?></center><br>
    <?php
  }elseif(@$_GET['wrong']==true){
    ?>
      <center style='color: red;'><?php echo $_GET['wrong'] ?></center><br>
    <?php
      }
    ?>
    <p id="email-login" class="email">Email<span class="required">*</span><img src="ico/ic-mail.png" align="right" class="ic-mail"></p>
    <input id="email-login1" type="text" name="login">

    <p id="pwd-login" class="pwd">Password<span class="required">*</span><img src="ico/ic-lock.png" align="right" class="ic-lock"></p>
    <input id="pwd-login1" type="password" name="password">
    <a id="forgot" href="#" class="forgot">Forgot?</a>
    <button id="log-in" type="submit" name="log-in" class="loginb"><span style="cursor:pointer">login</span></button>

  </form>
</div>
