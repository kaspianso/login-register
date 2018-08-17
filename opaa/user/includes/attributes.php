<div id="content">


	<h2> <a href="<?=$base_url;?>user"><=</a> User overlay </h2>
		<form method="POST" enctype="multipart/form-data">
	<div>
	<?php
		if(isset($_POST['name'])){

			$name = $_POST['name'];
      $value = $_POST['value'];

			$DB->query("ALTER TABLE admin_users ADD ".$name." varchar(50) NOT NULL; ");
			$DB->query("UPDATE admin_users SET ".$name." = '$value'");

		}
	?>

    <input type="text" id="name" name="name"  placeholder="Attribute name"><br>
    <input type="text" id="name" name="value"  placeholder="Attribute value"><br>

    </div><br><br>

		<input type="submit" name="submit" value="Save">
    </form>

</div>
