<?php

class Users extends DB{

  protected function getAllUsers(){

    $sql = ("SELECT * FROM admin_users  WHERE `user` = '".$_SESSION['user']."' AND `pass` = '".$_SESSION['pass']."'");
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if($numRows > 0){
      while($row = $result->fetch_assoc()){
        $data[] = $row;
      }
      return $data;
    }else{
      for($j=1;$j<2;$j++){
        $data[] = $j;
      }
      return $data;
    }
  }

}
