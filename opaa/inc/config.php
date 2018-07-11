<?php

$randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890"), 0, 8);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$base_url = 'http://127.0.0.1/opaa/';
$login = 'inc/logon.php';
$signup = 'inc/signup.php';
$register = 'inc/register.php';
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "4";
$DB = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
class DB{

  private $dbHost;
  private $dbUsername;
  private $dbPassword;
  private $dbName;

  protected function connect(){
    $this->dbHost = "localhost";
    $this->dbUsername = "root";
    $this->dbPassword = "";
    $this->dbName = "4";

    $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
    return $conn;
  }
}

  $page 	=	 'inc/login.php';
  $title	=	 'MageBit';
  $_GET['home'] = true;



function smart($data){
 $filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
 return $filter;
}
