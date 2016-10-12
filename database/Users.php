<?php

#ini_set('display_errors',1);
#error_reporting(E_ALL);

class Users {

  static function existsUsernamePassword($email, $password) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT * FROM AuthorizedUser WHERE email = :email and password = :password");
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', md5($password));
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

     if ($result == null)
        return false;
      else
        return true;
    }

    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location: ../index.php");
	  die;
    }
  }

  static function getFarm($email) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("SELECT farm FROM person WHERE email = :email");
      $stmt->bindParam(':email', $email);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location: ../index.php");
	  die;
    }
}

  static function addFarm($name) {
    global $dbh;
    try {
      $stmt = $dbh->prepare("INSERT INTO farm VALUES (NULL, ?)");
      $stmt->execute(array($name));
      return $dbh->lastInsertId();

    } catch(PDOException $e) {
      $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
      header("Location: ../index.php");
	  die;
    }
} static function addUser($farm, $name, $email, $password) {
  global $dbh;
  try {
    $stmt = $dbh->prepare("INSERT INTO person VALUES (NULL, ?, ?, ?)");
    $stmt->execute(array($email, $name, $farm));

    $stmt =  $dbh->prepare("INSERT INTO AuthorizedUser VALUES (?, ?)");
    $stmt->execute(array($email, md5($password)));

  } catch(PDOException $e) {
    $_SESSION["s_errors"]["generic"][] = "ERRO[36]: ".$e->getMessage();
    header("Location: ../index.php");
  die;
    }
  }
}

?>
