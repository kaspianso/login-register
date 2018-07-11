<?php

include_once('inc/config.php');
?>
<div class="base">
  <img src="bg/bg-folds.png" class="bg-folds">
  <img src="bg/dark-fold.png" class="dark-fold">
    <div class="don-t-have">
      <p class="d-on-t">Don’t have an account?</p>
      <img src="blue/line-under.png">
      <p class="lorem-ipsum-dolor"> Lorem ipsum dolor sit amet,</p>
      <p class="consectetur">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <button id="moveLeft" type="submit" name="signupb" class="signupb"<span style="cursor:pointer">sign up</span></button>
      <button id="viltusPoga" type="submit" name="viltusPoga" class="viltusPoga"<span style="cursor:pointer">sign up</span></button>
    </div>
    <div class="have-account">
      <p class="do">Have an account?</p>
      <img src="blue/line-under.png">
      <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      <button id="moveRight" type="submit" name="loginb2" class="loginb2" ><span style="cursor:pointer">login</span></button>
      <button id="viltusPoga2" type="submit" name="viltusPoga2" class="viltusPoga2" ><span style="cursor:pointer">login</span></button>
    </div>
</div>
<div class="login-first">

</div>
<div class="login">
  <div class="login-window" >
    <p id="change1" class="text-logo">Login</p>
    <img src="ico/logo.png" class="logo" align="right">
    <img src="blue/line-under.png">
    <?php
    if(file_exists($login)){
      include($login);
    }else{
      echo error("Fails:  <i>".$login."</i>  Neeksistē!");
    }
    ?>

    <div id="signup-form">
    <?php
    if(file_exists($signup)){
      include($signup);
    }else{
      echo error("Fails:  <i>".$signup."</i>  Neeksistē!");
    }
    ?>
    </div>
  </div>
</div>

<p class="footer-text">All Rights Reserved “Magebit” 2016.</p>
