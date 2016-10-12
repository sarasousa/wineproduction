<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

class Pandlet {

  static function addPandlet($farm, $mac, $lat, $lng) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO pandlet VALUES (NULL, ?, 'Pandlet', ?, ?, ?)");
      $stmt->execute(array($farm, $lat, $lng, $mac));
    } catch (PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  } static function getPandletByMAC($mac) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT pid FROM pandlet WHERE mac = ?");
      $stmt->execute(array($mac));
      return $stmt->fetch();
    } catch (PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  } static function newTempValue($farm, $pid, $val, $date, $time) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO temperature VALUES (NULL, ?, ?, ?, ?, ?)");
      $stmt->execute(array($farm, $pid, $val, $date, $time));
    } catch (PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  } static function newMoistValue($farm, $pid, $val, $date, $time) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO moisture VALUES (NULL, ?, ?, ?, ?, ?)");
      $stmt->execute(array($farm, $pid, $val, $date, $time));
    } catch (PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  } static function newTempSoilValue($farm, $pid, $val, $date, $time) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO temperaturesoil VALUES (NULL, ?, ?, ?, ?, ?)");
      $stmt->execute(array($farm, $pid, $val, $date, $time));
    } catch (PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  } static function newMoistSoilValue($farm, $pid, $val, $date, $time) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO moisturesoil VALUES (NULL, ?, ?, ?, ?, ?)");
      $stmt->execute(array($farm, $pid, $val, $date, $time));
    } catch (PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  } static function newLightValue($farm, $pid, $val, $date, $time) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO light VALUES (NULL, ?, ?, ?, ?, ?)");
      $stmt->execute(array($farm, $pid, $val, $date, $time));
    } catch (PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
      die;
    }
  }

    static function getPandlets($farm) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT pid FROM pandlet WHERE farm = :farm");
      $stmt->bindParam(':farm', $farm);
      $stmt->execute();

        return $stmt->fetchAll();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

    static function getLatestTmp($pan) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM temperature WHERE pan = :pan ORDER BY dates DESC, times ASC LIMIT 1");
      $stmt->bindParam(':pan', $pan);
      $stmt->execute();

        return $stmt->fetch();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

    static function getLatestMst($pan) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM moisture WHERE pan = :pan ORDER BY dates DESC, times ASC LIMIT 1");
      $stmt->bindParam(':pan', $pan);
      $stmt->execute();

        return $stmt->fetch();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

    static function getLatestMstSoil($pan) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM moisturesoil WHERE pan = :pan ORDER BY dates DESC, times ASC LIMIT 1");
      $stmt->bindParam(':pan', $pan);
      $stmt->execute();

        return $stmt->fetch();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

    static function getLatestTmpSoil($pan) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM temperaturesoil WHERE pan = :pan ORDER BY dates DESC, times ASC LIMIT 1");
      $stmt->bindParam(':pan', $pan);
      $stmt->execute();

        return $stmt->fetch();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

    static function getLatestLgt($pan) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM light WHERE pan = :pan ORDER BY dates DESC, times ASC LIMIT 1");
      $stmt->bindParam(':pan', $pan);
      $stmt->execute();

        return $stmt->fetch();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

    static function getTemperatureValue($pan, $farm) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM temperature WHERE pan = :pan AND farm = :farm");
      $stmt->bindParam(':pan', $pan);
      $stmt->bindParam(':farm', $farm);
      $stmt->execute();

        return $stmt->fetchAll();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

  static function getMoistureValue($pan, $farm) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM moisture WHERE pan = :pan AND farm = :farm");
      $stmt->bindParam(':pan', $pan);
      $stmt->bindParam(':farm', $farm);
      $stmt->execute();

        return $stmt->fetchAll();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[30]: ".$e->getMessage();
      header("Location: ../index.php");
	  die;
    }
  }

   static function getLightValue($pan, $farm, $times) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM light WHERE pan = :pan AND farm = :farm");
      $stmt->bindParam(':pan', $pan);
      $stmt->bindParam(':farm', $farm);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[29]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

      static function getMoistureSoilValue($pan, $farm) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM moisturesoil WHERE pan = :pan AND farm = :farm");
      $stmt->bindParam(':pan', $pan);
      $stmt->bindParam(':farm', $farm);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[28]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

  static function getTemperatureSoilValue($pan, $farm) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM temperaturesoil WHERE pan = :pan AND farm = :farm");
      $stmt->bindParam(':pan', $pan);
      $stmt->bindParam(':farm', $farm);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[27]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }

  static function getMeasureTable($pan, $farm) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT value as val, dates as dat, times as t, 'air temperature' as type FROM temperature WHERE pan = :pan AND farm = :farm
                       UNION SELECT value as val, dates as dat, times as t, 'air humidity' as type FROM moisture WHERE pan = :pan AND farm = :farm
                       UNION SELECT value as val, dates as dat, times as t, 'soil temperature' as type FROM temperaturesoil WHERE pan = :pan AND farm = :farm
                       UNION SELECT value as val, dates as dat, times as t, 'light exposure' as type FROM light WHERE pan = :pan AND farm = :farm
                       UNION SELECT value as val, dates as dat, times as t, 'soil moisture' as type FROM moisturesoil WHERE pan = :pan AND farm = :farm");
      $stmt->bindParam(':pan', $pan);
      $stmt->bindParam(':farm', $farm);
      $stmt->execute();

        return $stmt->fetchAll();
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[27]: ".$e->getMessage();
      header("Location: ../index.php");
    die;
    }
  }


}
?>
