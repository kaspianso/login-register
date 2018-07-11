<?php

class viewUsers extends Users{

  public function showAllUsers(){
    $x = $this->getAllUsers();
    echo '<tr>';
    foreach (array_keys($x[0]) as $field) {
        echo '<th>'. $field.'</th>';
    }
    echo '</tr>';
    foreach ($x as $data) {
        echo '<tr>';
        foreach ($data as $val) {
            echo '<td>'. $val.'</td>';
        }
    echo '</tr>';
    }
  }
}
