<?php
  session_start();

  //require_once('../database/base.php');



  session_destroy();
  session_unset();

  header('Location: index.php');
?>