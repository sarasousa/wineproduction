<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  set_include_path("../libs");

  require_once('../database/smarty.php');
  require_once('../database/session.php');
  require_once('../database/base.php');
  require_once('../database/Users.php');
  require_once('../database/Pandlet.php');

  if (empty($s_email)) {
  	 header("Location: index.php");
  	 die;
  }

  $farm = Users::getFarm($s_email);
  $farm = $farm['farm'];

  $pandlets = Pandlet::getPandlets($farm);

  $red = 0;
  $yellow = 0;

  $redpan = array();
  $yellowpan = array();

  $date = '1970-01-01';
  $time = '00:00';

  $tmp_avg = 0;
  $tmpsoil_avg = 0;
  $mst_avg = 0;
  $mstsoil_avg = 0;
  $lgt_avg = 0;

  foreach ($pandlets as $pandlet) {
    $tmp = Pandlet::getLatestTmp($pandlet['pid']);

    if (strtotime($tmp['dates']) > strtotime($date)) {
      $date = $tmp['dates'];
    }

    if (strtotime($tmp['times']) > strtotime($time)) {
      $time = $tmp['times'];
    }

    $tmp_avg = $tmp_avg + $tmp['value'];

    $tmpsoil = Pandlet::getLatestTmpSoil($pandlet['pid']);

    if (strtotime($tmpsoil['dates']) > strtotime($date)) {
      $date = $tmpsoil['dates'];
    }

    if (strtotime($tmpsoil['times']) > strtotime($time)) {
      $time = $tmpsoil['times'];
    }

    $tmpsoil_avg = $tmpsoil_avg + $tmpsoil['value'];

    $mst = Pandlet::getLatestMst($pandlet['pid']);

    if (strtotime($mst['dates']) > strtotime($date)) {
      $date = $mst['dates'];
    }

    if (strtotime($mst['times']) > strtotime($time)) {
      $time = $mst['times'];
    }

    $mst_avg = $mst_avg + $mst['value'];

    $mstsoil = Pandlet::getLatestMstSoil($pandlet['pid']);

    if (strtotime($mstsoil['dates']) > strtotime($date)) {
      $date = $mstsoil['dates'];
    }

    if (strtotime($mstsoil['times']) > strtotime($time)) {
      $time = $mstsoil['times'];
    }

    $mstsoil_avg = $mstsoil_avg + $mstsoil['value'];

    $lgt = Pandlet::getLatestLgt($pandlet['pid']);

    if (strtotime($lgt['dates']) > strtotime($date)) {
      $date = $lgt['dates'];
    }

    if (strtotime($lgt['times']) > strtotime($time)) {
      $time = $lgt['times'];
    }

    $lgt_avg = $lgt_avg + $lgt['value'];

    if ($tmp['value'] >= 37 or $tmp['value'] <= 0) {
      $red = $red + 1;
      $redpan[] = $pandlet['pid'];
    } elseif ($tmpsoil['value'] >= 37 or $tmpsoil['value'] <= 0) {
      $red = $red + 1;
      $redpan[] = $pandlet['pid'];
    } elseif ($mst['value'] < 50) {
      $red = $red + 1;
      $redpan[] = $pandlet['pid'];
    } elseif ($mstsoil['value'] < 50) {
      $red = $red + 1;
      $redpan[] = $pandlet['pid'];
    } elseif ($lgt['value'] >= 400) {
      $red = $red + 1;
      $redpan[] = $pandlet['pid'];
    }

    if (($tmp['value'] < 37 and $tmp['value'] > 32) or ($tmp['value'] < 10 and $tmp['value'] > 0)) {
      $yellow = $yellow + 1;
      $yellowpan[] = $pandlet['pid'];
    } elseif (($tmpsoil['value'] < 37 and $tmpsoil['value'] > 32) or ($tmpsoil['value'] < 10 and $tmpsoil['value'] > 0)) {
      $yellow = $yellow + 1;
      $yellowpan[] = $pandlet['pid'];
    } elseif ($mst['value'] >= 50 and $mst['value'] < 75) {
      $yellow = $yellow + 1;
      $yellowpan[] = $pandlet['pid'];
    } elseif ($mstsoil['value'] >= 50 and $mstsoil['value'] < 75) {
      $yellow = $yellow + 1;
      $yellowpan[] = $pandlet['pid'];
    } elseif ($lgt['value'] < 400 and $lgt['value'] > 300) {
      $yellow = $yellow + 1;
      $yellowpan[] = $pandlet['pid'];
    }
  }

  $datetime = $date . ' ' . $time . ':00';

  $time = strtotime($datetime);

  $time = humanTiming($time);

  function humanTiming ($time) {
      $time = time() - $time; // to get the time since that moment
      $time = ($time < 1) ? 1 : $time;
      $tokens = array (
          31536000 => 'year',
          2592000 => 'month',
          604800 => 'week',
          86400 => 'day',
          3600 => 'hour',
          60 => 'minute',
          1 => 'second'
      );

      foreach ($tokens as $unit => $text) {
          if ($time < $unit) continue;
          $numberOfUnits = floor($time / $unit);
          return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
      }
  }

  $tmp_avg = $tmp_avg / count($pandlets);
  $tmpsoil_avg = $tmp_avg / count($pandlets);
  $mst_avg = $mst_avg / count($pandlets);
  $mstsoil_avg = $mst_avg / count($pandlets);
  $lgt_avg = $lgt_avg / count($pandlets);

  $smarty->assign('red', $red);
  $smarty->assign('rpan', $redpan);
  $smarty->assign('yellow', $yellow);
  $smarty->assign('ypan', $yellowpan);
  $smarty->assign('time', $time);
  $smarty->assign('tmp', round($tmp_avg, 1));
  $smarty->assign('tmpsoil', round($tmpsoil_avg, 1));
  $smarty->assign('mst', round($mst_avg, 1));
  $smarty->assign('mstsoil', round($mstsoil_avg, 1));
  $smarty->assign('lgt', round($lgt_avg, 1));

  $smarty->display('../templates/home.tpl');
?>
