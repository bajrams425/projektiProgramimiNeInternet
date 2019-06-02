<?php
if(isset($_POST['submit'])){
  $name=$_POST['emri'];
  $lastname=$_POST['mbiemri'];
  $mailFrom=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];

  $mailTo="bajrams415@hotmail.com";
  $header="From: ".$mailFrom;
  $messagetxt="You have recieved an email from".$name." ".$lastname.":\n\n".$message;
  mail($mailTo, $subject, $messagetxt, $header);

  header("Main.php?mail-is-sent!");
  exit();
}else{
  header("Main.php");
  exit();
}
?>
