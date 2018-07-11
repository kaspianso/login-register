<?php
include_once('../inc/config.php');
?>

  <table class="table">
    
    <tbody>
        <?php
          $users = new viewUsers();
          $users->showAllUsers();
        ?>
    </tbody>
  </table>
