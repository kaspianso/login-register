<?php

if(!isset($_SESSION['user'])){

  header('Refresh: 0; url='.$base_url.'');

}else{
  header('Refresh: 0; url='.$base_url.'user');
}
