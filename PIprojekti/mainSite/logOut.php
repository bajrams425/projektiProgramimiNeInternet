<?php
if (isset($_GET['LogConfirm'])){
  session_start();
  session_unset();
  session_destroy();
  header("Location:../logInSite/LogIn.php");
  exit();
}
else{
  header("Location:Main.php");
  exit();
}
?>
