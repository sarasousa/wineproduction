<?php
  #ini_set('display_errors',1);
  #error_reporting(E_ALL);

  require_once('../database/smarty.php');
  require_once('../database/base.php');
  require_once('../database/Users.php');

  $json = file_get_contents('php://input');
  $values = json_decode($json, true);

  if ($values['com_type'] === 'register') {
    if (Users::existsUsernamePassword($values['email'], $values['password'])) {
      echo -1;
      die;
    } else {
      $fid = Users::addFarm($values['farm_name']);
      Users::addUser($fid, $values['name'], $values['email'], $values['password']);
      echo $fid;
    }
  } elseif ($values['com_type'] === 'login') {
    if (Users::existsUsernamePassword($values['email'], $values['password'])) {
      $res = Users::getFarm($values['email']);
      echo $res['farm'];
    } else {
      echo -1;
      die;
    }
  }
?>
