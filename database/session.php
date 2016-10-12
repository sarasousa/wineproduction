<?PHP

//ini_set('display_errors',1); 
//error_reporting(E_ALL);

session_set_cookie_params(0, '/~ee12001/');

// start or reuse session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// get sessions values if any

if (isset($_SESSION["s_email"])) {
  $s_email = $_SESSION["s_email"];
  $smarty->assign("s_email", $s_email);
}
else
{
  $s_email = false;
  $smarty->assign("s_email", $s_email);
}

if (isset($_SESSION["s_name"])) {
  $s_name = $_SESSION["s_name"];
  $smarty->assign("s_name", $s_name);
}

if (isset($_SESSION["s_last_op"])) {
  $s_last_op = $_SESSION["s_last_op"];
  $smarty->assign("s_last_op", $s_last_op);
}

if (isset($_SESSION["s_last_inputs"])) {
  $s_last_inputs = $_SESSION["s_last_inputs"];
  $smarty->assign("s_last_inputs", $s_last_inputs);
}


if (isset($_SESSION["s_messages"])) {
  $s_messages = $_SESSION["s_messages"];
  $smarty->assign("s_messages", $s_messages);
  // clear messages
  unset($_SESSION["s_messages"]);
}

if (isset($_SESSION["s_errors"])) {
  $s_errors = $_SESSION["s_errors"];
  $smarty->assign("s_errors", $s_errors);
  // clear errors
  unset($_SESSION["s_errors"]);
}

if (isset($_SESSION["s_values"])) {
  $s_values = $_SESSION["s_values"];
  $smarty->assign("s_values", $s_values);
  // clear values
  unset($_SESSION["s_values"]);
}

?>

