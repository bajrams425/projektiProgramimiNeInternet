<?php
session_start();
if (isset($_SESSION['UserName']) || isset($_SESSION['UserID'])){
    $userIs=$_SESSION['UserID'];
    header("Location:../mainSite/Main.php?User:".$userIs);
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial scale=1">
  <link rel="stylesheet" type="text/css" href="logIn-css.css">
  <title>Page Title</title>

  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="validation.js"></script>
  </head>

</head>
<body id="bodyId">

<!--lOGO-->
<span id="lbutton" class="deskView">
<div class="toBefaded toBefadedOut fadedin">
<img id="llogo" src="logoCBS.png"></img>
</div></span>

<!--Buttonat per me hi login ose signup form-->
<div id="fillimi" class="toBefaded toBefadedOut">
<button type="button" class="formButton" id="logb"><div class="ftekst">
  <img src="lp.png" class="formp"></img>   LogIn</div></button><br>
<button type="button" class="formButton" id="signb" style="margin-top:.5%"><div class="ftekst">
  <img src="sp.png" class="formp"></img>   SignUp</div></button>
<p id="ErrorParagraph"></p>
</div>

<div id="mesilogin">
<form action="signInCheck.php" method="Post">
<input type="text" name="e-mail" id="memail" placeholder="E-mail"
  class="mlogin" required><br></input>
<input type="password" name="lpass" id="lpass" placeholder="Password"
  class="mlogin" style="margin-top:.3%" required><button type="button" id="dpass" class="mlogin">
    <img src="displayPassword.png" id="displayPassword"/></button><br>
<button type="Submit" name="Log-in" id="gotob">Login here!</button>
</form>
</div>

<div id="fundilogin">
<form action="signUpCheck.php" method="Post" id="SignUpForm">
<input type="text" name="emri" id="fname" placeholder="Emri" style="width:140px"
  class="mlogin" required/>
<input type="text" name="mbiemri" id="flname" placeholder="Mbiemri" style="width:138px"
  class="mlogin" required/><br>
<input type="tel" name="telefoni" id="ftel" placeholder="123-456-789"
  class="mlogin" style="margin-top:.3%" required/><br>
<input type="email" name="reg_mail" id="femail" placeholder="Put@email.here"
  class="mlogin" style="margin-top:.3%" required/><br>
<input type="text" name="username" id="username" placeholder="Username"
  class="mlogin" style="margin-top:.3%" required/><br>
<input type="password" name="fpass" id="spass" placeholder="Password"
  class="mlogin" style="margin-top:.3%" required><button type="button" id="fpass" class="mlogin">
    <img src="displayPassword.png" id="fdisplayPassword"/></button><br>
<button type="Submit" name="Sign-up" id="regb">Register...</button>
</form>
</div>

<script>
$(document).ready(function () {
    setTimeout(function(){
    $('div.toBefaded').fadeIn(1000).removeClass('toBefaded');}, 2000)
});
//LogIn form
$("#logb").click(function(){
  $("div.toBefadedOut").fadeOut(1000).addClass("faded");
  $("span#lbutton").removeClass("deskView");
  setTimeout(function(){
    $("#llogo").attr("src","gback.png");
    $("div.fadedin").fadeIn(1000);
    $("div#mesilogin").fadeIn(1000).removeClass("faded");}, 1200)
    $("span#lbutton").addClass("loginBack");
});
//Llogoja me kthy te primary stage prej login
$(document).on("click", ".loginBack",function(){
  $("div#mesilogin").fadeOut(1000).addClass("faded");
  $("div.faded").fadeOut(1000).addClass("faded");
  $("span#lbutton").addClass("deskView");
  setTimeout(function(){
    $("span#lbutton").removeClass("loginBack");
    $("#llogo").attr("src","logoCBS.png");
    $("input[name=e-mail]").val('');
    $("input[name=lpass]").val('');
    $("div.toBefadedOut").fadeIn(1000).removeClass("faded");}, 1200);
});
//Passwordi me u bo tekst per login
$("#dpass").click(function() {
  var input = $('input[name="lpass"]');
  if (input.attr("type") == "password") {
    input.attr("type", "text");
    $("#displayPassword").attr("src","hidePassword.png");
  } else {
    input.attr("type", "password");
    $("#displayPassword").attr("src","displayPassword.png");
  }
});
//Signup form
$("#signb").click(function(){
  $("div.toBefadedOut").fadeOut(1000).addClass("faded");//hjeki buttonat, llogon
  $("span#lbutton").removeClass("deskView");
  setTimeout(function(){
    $("#llogo").attr("src","gback.png"); //ndrro llogon
    $("div.fadedin").fadeIn(1000); //llogo fade in
    $("div#fundilogin").fadeIn(1000).removeClass("faded");}, 1200)//qite signup
    $("span#lbutton").addClass("signupBack");//jepe go back clasen per llogo
});
//Llogoja me kthy te primary stage prej signup
$(document).on("click", ".signupBack",function(){
  $("div#fundilogin").fadeOut(1000).addClass("faded");
  $("div.faded").fadeOut(1000).addClass("faded");
  $("span#lbutton").addClass("deskView");
  setTimeout(function(){
    $("span#lbutton").removeClass("signupBack");
    $("#llogo").attr("src","logoCBS.png");
    $("input[name=emri]").val('');
    $("input[name=mbiemri]").val('');
    $("input[name=telefoni]").val('');
    $("input[name=red-mail]").val('');
    $("input[name=username]").val('');
    $("input[name=fpass]").val('');
    $("div.toBefadedOut").fadeIn(1000).removeClass("faded");}, 1200);
});
//Passswordi me u bo tekst per signup
$("#fpass").click(function() {
  var input = $('input[name="fpass"]');
  if (input.attr("type") == "password") {
    input.attr("type", "text");
    $("#fdisplayPassword").attr("src","hidePassword.png");
  } else {
    input.attr("type", "password");
    $("#fdisplayPassword").attr("src","displayPassword.png");
  }
});
//Desktop view
$(document).on("click",".deskView", function(){
  $("div.toBefadedOut").fadeOut(1000).addClass("faded");
  setTimeout(function(){
    $("div.toBefadedOut").fadeIn(1000).removeClass("faded");
  },5000)
  });
</script>

</body>
</html>
