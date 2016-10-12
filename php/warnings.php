<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  set_include_path("../libs");

  require_once('../database/smarty.php');
  require_once('../database/session.php');
  require_once('../database/base.php');
  require_once('../database/Users.php');
  require_once('../database/Pandlet.php');
  require_once('../database/Warnings.php');

  
  $new = Cwarning::indiceX();
  $esc = Escaldao::escalda();
  $alarm = 1;
  $alarms = 1;
  $gead = Geada::geadaa();
  $rad=0;
  $mildtemp = Mildio::temperaturas();
  $mildmois = Mildio::moistures();
  $oitemp = Oidio::temperaturas();
  $oimois = Oidio::moistures();
  $podcin = PodridaoC::indice();
  $esca = Esca::indic();
  
 $smarty->assign("new", $new);
 $smarty->assign("esc",$esc);
 $smarty->assign("alarm",$alarm);
 $smarty->assign("rad",$rad);
 $smarty->assign("alarms",$alarms);
 $smarty->assign("gead",$gead);
 $smarty->assign("mildtemp",$mildtemp);
 $smarty->assign("mildmois",$mildmois);
 $smarty->assign("oitemp",$mildtemp);
 $smarty->assign("oimois",$mildmois);
 $smarty->assign("podcin",$podcin);
 $smarty->assign("esca",$esca);
  $smarty->display('../templates/warnings.tpl');
  

  
 /* if (empty($s_email)) {
        
  	 header("Location: index.php");
  	 die;
  }

  $farm = Users::getFarm($s_email);
  $farm = $farm['farm'];

  $pandlets = Pandlet::getPandlets($farm);

  $red = 0;
  $yellow = 0;

  $date = 0;
  $time = 0;

  $tmp_avg = 0;
  $mst_avg = 0;
  $ph_avg = 0;
  $lgt_avg = 0;
  $cnd_avg = 0;

  foreach($pandlets as $pandlet)
  {
     $new = Cwarning::indiceX($pandlet['pid']);
     $h = 14;
     $indice=$new * $h;
  }
  $new = Cwarning::indiceX();
  foreach ($pandlets as $pandlet) {
   // $new = Cwarning::indiceX($pan['pid']);
    
   // $h = 14;
    
   // $indice=$new * $h;
    
   // $new = Cwarning::indiceX();
    // $h = 2;
    // $indice=$new * $h;
    //-------------------
    $tmp = Pandlet::getLatestTmp($pandlet['pid']);
    if ($tmp['dates'] > $date) {
      $date = $tmp['dates'];
    }

    if ($tmp['times'] > $time) {
      $time = $tmp['times'];
    }

    $tmp_avg = $tmp_avg + $tmp['value'];

    $mst = Pandlet::getLatestMst($pandlet['pid']);

    if ($mst['dates'] > $date) {
      $date = $mst['dates'];
    }

    if ($mst['times'] > $time) {
      $time = $mst['times'];
    }

    $mst_avg = $mst_avg + $mst['value'];

    $ph = Pandlet::getLatestPh($pandlet['pid']);

    if ($ph['dates'] > $date) {
      $date = $ph['dates'];
    }

    if ($ph['times'] > $time) {
      $time = $ph['times'];
    }

    $ph_avg = $ph_avg + $ph['value'];

    $cnd = Pandlet::getLatestCnd($pandlet['pid']);

    if ($cnd['dates'] > $date) {
      $date = $cnd['dates'];
    }

    if ($cnd['times'] > $time) {
      $time = $cnd['times'];
    }

    $cnd_avg = $cnd_avg + $cnd['value'];

    $lgt = Pandlet::getLatestLgt($pandlet['pid']);

    if ($lgt['dates'] > $date) {
      $date = $lgt['dates'];
    }

    if ($lgt['times'] > $time) {
      $time = $lgt['times'];
    }

    $lgt_avg = $lgt_avg + $lgt['value'];

    if ($tmp['value'] >= 37 or $tmp['value'] <= 0) {
      $red = $red + 1;
    } elseif ($ph['value'] > 7 or $ph['value'] < 5) {
      $red = $red + 1;
    } elseif ($mst['value'] < 50) {
      $red = $red + 1;
    }

    if (($tmp['value'] < 37 and $tmp['value'] > 32) or ($tmp['value'] < 10 and $tmp['value'] > 0)) {
      $yellow = $yellow + 1;
    } elseif ($mst['value'] >= 50 and $mst['value'] < 75) {
      $yellow = $yellow + 1;
    }
  }

 $datetime = $date . ' ' . $time;

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
  $mst_avg = $mst_avg / count($pandlets);
  $ph_avg = $ph_avg / count($pandlets);
  $lgt_avg = $lgt_avg / count($pandlets);
  $cnd_avg = $cnd_avg / count($pandlets);

  $smarty->assign('red', $red);
  $smarty->assign('yellow', $yellow);
  $smarty->assign('time', $time);
  $smarty->assign('tmp', round($tmp_avg, 1));
  $smarty->assign('mst', round($mst_avg, 1));
  $smarty->assign('ph', round($ph_avg, 1));
  $smarty->assign('lgt', round($lgt_avg, 1));
  $smarty->assign('cnd', round($cnd_avg, 1));

  $smarty->display('../templates/warnings.tpl');


*/


?>
