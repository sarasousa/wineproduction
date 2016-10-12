<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  require_once('../database/smarty.php');
  require_once('../database/base.php');
  require_once('../database/Pandlet.php');

  date_default_timezone_set ("Europe/Lisbon");

  $json = file_get_contents('php://input');
  $values = json_decode($json, true);

  $res = Pandlet::getPandletByMAC($values['mac_value']);

  if (empty($res)) {
    Pandlet::addPandlet($values['quinta_value'], $values['mac_value'], $values['lat_value'], $values['lng_value']);
    $res = Pandlet::getPandletByMAC($values['mac_value']);
  }

  $timestamp = $values['date_value'] / 1000;
  $date = date('Y-m-d', $timestamp);
  $time = date('H:i:s', $timestamp);

  Pandlet::newTempValue($values['quinta_value'], $res['pid'], $values['temp_air_value'], $date, $time);
  Pandlet::newTempSoilValue($values['quinta_value'], $res['pid'], $values['temp_soil_value'], $date, $time);
  Pandlet::newMoistValue($values['quinta_value'], $res['pid'], $values['moist_air_value'], $date, $time);
  Pandlet::newMoistSoilValue($values['quinta_value'], $res['pid'], $values['moist_soil_value'], $date, $time);
  Pandlet::newLightValue($values['quinta_value'], $res['pid'], $values['light_value'], $date, $time);

  echo 'Success!';
?>
