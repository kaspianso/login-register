<?php

	if(isset($_POST['email-signup']) && isset($_POST['name-signup']) && isset($_POST['pwd-signup'])){
		$user = smart($_POST['email-signup']);
		$email = smart($_POST['email-signup']);
		$name = smart($_POST['name-signup']);
		$pass = smart($_POST['pwd-signup']);



			if($email != "" && $pass != "" && $name != ""){
				$pass = md5(md5($pass));
				echo $pass;
				$rowe = $DB->query("SELECT user FROM admin_users WHERE user = '$user'");
				$num = $row->num_rows;
				echo $num;
  				if($num <= 0 ){
    				$DB->query("INSERT INTO admin_users (`user`,`pass`,`email`,`name`) VALUES ('$user','$pass','$email','$name')");
    				header("location:index.php?success=User saved");
  				}else{
    				$DB->query("UPDATE admin_users SET `pass`='$pass', `email`='$email', `name`='$name' WHERE email='$email'");
    				header("location:index.php?success=User saved");
    				}
			}else{
				header("location:index.php?empty_name=Fill in all the fields");
			}

	}
	if(isset($_POST['email-signup']) == true && empty($_POST['email-signup']) == false){
		$email = $_POST['email-signup'];
		if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
			echo "string";
		}else{
			echo "string";
		}
	}


?>
<form  method="POST" name="signup-form" >
  <?php

    if(@$_GET['empty_name']==true){
  ?>
    <center style='color: red;'><?php echo $_GET['empty_name'] ?></center><br>
  <?php
}elseif(@$_GET['success']==true){
  ?>
    <center style='color: green;'><?php echo $_GET['success'] ?></center><br>
  <?php
    }
  ?>
  <p id="name-signup" name class="name" style="display:none">Name<span class="required">*</span><img src="blue_ico/ic-user.png" align="right" class="ic-user"></p>
  <input id="name-signup1" type="text" name="name-signup" style="display:none">

  <p id="email-signup" class="email" style="display:none">Email<span class="required">*</span><img src="blue_ico/ic-mail.png" align="right" class="ic-mail"></p>
  <input id="email-signup1" type="text" name="email-signup" style="display:none">

  <p id="pwd-signup" class="pwd"style="display:none">Password<span class="required">*</span><img src="blue_ico/ic-lock.png" align="right" class="ic-lock"></p>
  <input id="pwd-signup1" type="password" name="pwd-signup" style="display:none">
  <button id="sign-up" type="submit" name="sign-up" class="sign-up"><span style="cursor:pointer">sign up</span></button>

</form>
