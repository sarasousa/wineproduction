<?php

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

require_once('../database/base.php');
require_once('../database/Users.php');


$email= $_POST["username"];
$password = $_POST["password"];


function died($error) {
    echo $error;
    die();
}


  preg_match("/^([A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,})$/i", $email, $matches);

   if ($matches==NULL)
    {died(' <script type="text/javascript">alert("Invalid E-mail!"); window.location = "index.php";</script> '); }

  //password may have . and * and _ and - and must have between 5-32 characters
   preg_match("/^([a-zA-Z0-9_*\-.]{5,32})/i", $password, $matches);


   if ($matches==NULL)
    { died(' <script type="text/javascript">alert("Invalid Password!"); window.location = "index.php";</script> ');  }




if (Users::existsUsernamePassword($email, $password)) {
  
  unset($_SESSION["s_email"]);
  $_SESSION["s_email"] = $email;
  
 // $_SESSION["s_messages"][] = 'Autenticação com sucesso';

  header("Location: home.php");

}
else {
  // store user input values
 // $_SESSION["s_values"] = $_POST;
  //$_SESSION["s_errors"]["generic"][] = 'E-mail ou password errados!';


  { died(' <script type="text/javascript">alert("Invalid E-mail or Password!"); window.location = "index.php";</script> ');  }

  header("Location: index.php");

  // header("Location: " . $_SERVER["HTTP_REFERER"]);

}




?>