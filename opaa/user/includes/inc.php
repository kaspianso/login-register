<?php

	if(isset($_GET['attributes'])){
		$pagex 	=	 'includes/attributes.php';
	}else{
		$pagex 	=	 'includes/users.php';
		$_GET['home'] = true;
	}
