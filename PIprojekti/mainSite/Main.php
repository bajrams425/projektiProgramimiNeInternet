<?php
session_start();
if (!isset($_SESSION['UserName']) || !isset($_SESSION['UserID'])){
    header("Location:../logInSite/LogIn.php?Please-Log-In!");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Main-css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <style>
  .jumbotron{
    background-color: white;
    color: rgb(38,38,38);
  }
  .ContactUsButton{
    background-color: white;
    width: 100%;
    text-align: center;
    color: rgb(38,38,38);
    font-size: 22px;
    font-family: "Century Gothic";
  }
  .ContactUsButton:hover{
    background-color: white;
    border-color: red;
    color: rgb(38,38,38);
  }
  .CheckboxInput{
    pointer-events: none;
    float: right;
  }
  .cfi{
    margin-top: .5%;
    padding: 15px;
    background-color: white;
    border-radius: 5px;
    border-color: red;
    font-family: "Century Gothic";
    text-align: left;
    font-size: 20px;
  }
  </style>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-md">
  <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#collapsibleNavbar" style="margin-left:auto; margin-right:auto; background-color: lightgray;
      height:40px; text-align:center; padding: 5px; postition:relative; width:92%; color: rgb(38,38,38)">
  ...Navbar...
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="nav nav-tabs col-lg-10 col-md-10 navbar-expand-md justify-content-center" role="tablist">
      <li class="nav-item col-lg-2 col-md-2">
        <a class="nav-link active" data-toggle="tab" href="#Home">Home</a>
      </li>
      <li class="nav-item col-lg-2 col-md-2">
        <a class="nav-link" data-toggle="tab" href="#Explore">Explore</a>
      </li>
      <li class="nav-item col-lg-2 col-md-2">
        <a class="nav-link" data-toggle="tab" href="#Profile">Profile</a>
      </li>
      <li class="nav-item col-lg-2 col-md-2">
        <a class="nav-link" data-toggle="tab" href="#Contact">Contact</a>
      </li>
      <li class="nav-item col-lg-2 col-md-2 dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Settings</a>
        <div class="dropdown-menu">
          <a class="dropdown-item col-xs-10 ChangePM" href="#">Change Password</a>
          <a class="dropdown-item col-xs-10" href="logOut.php?LogConfirm">Log-Out</a>
        </div>
        </li>
      </ul>
  </div>
</nav>
<!--Me ja bo display qka po don neper panes-->
<div class="container col-lg-10 col-md-10">
<div class="tab-content">
    <div id="Home" class="container jumbotron tab-pane fade show active">
      <div class="row" style="border: 2px solid red; border-radius: 5px; padding: 15px">
        <img src="carlogo.png" alt="logo"></img>
        <div>
          <h3>Getting started</h3>
          <p>This is a car bussiness page!</p>
          <p>If you would like to see more, scroll down and explore the home page a bit!</p>
          <p>Latter content can be seen or explored in the other tabs</p>
        </div>
      </div>
      <br>
        <div class="container" style="display: flex">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 2px solid red; border-radius: 5px; padding: 15px">
        <h2>Fun Facts!</h2>
          <p>
            The year 1886 is considered to be the birth of the modern car. In that year, German inventor Carl Benz built a modern automobile called the Benz Patent-Motorwagen.
            <br><br>
            Sir Alec Guinness warned James Dean one week before he died not to get into his new Porsche 550 Spyder or “You’ll be dead in it by this time next week.”
            <br><br>
            There are currently over 1 billion cars on the earth.
            <br><br>
            The United States has more cars than any other country in the world, at 300 million. China comes in a distant second, at 78 million.
            <br><br>
            Holding a remote car key to your head doubles its range because the human skull acts as an amplifier
          </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 2px solid red; border-radius: 5px; padding: 15px; margin-left: 0.5%">
        <h2>First to best to latest car</h2>
        <div class="row" style="margin-left:0.5%; border-bottom: 1px solid black">
          <image src="fcar.png" style="width: 120px;  height: 120px"></image>
          <h5>The car made by Mercedes's father.</h5>
        </div><br>
        <div class="row" style="margin-left:0.5%; border-bottom: 1px solid black">
          <image src="bcar.jpg" style="width: 120px;  height: 120px"></image>
          <h5>4.8mil.$, Koenigsegg CCXR Trevita.</h5>
        </div><br>
        <div class="row" style="margin-left:0.5%">
          <image src="lcar.jfif" style="width: 120px;  height: 120px"></image>
          <h5>MG Hector. Rs. 15.00 lakh. June 2019.</h5>
        </div>
      </div>
      </div>
    </div>
    <!--Explore part-->
    <div id="Explore" class="jumbotron tab-pane fade">
        <h4 style="text-align: center;">Find what other are sharing!</h3><br>

        <div class="container">
          <div class="row" id="ediv">
            <?php
            require '../loginSite/databaseCon.php';
            $userUsername = $_SESSION['UserID'];
            $sql = "SELECT * FROM posts WHERE userUsername!='$userUsername' ORDER BY orderGallery LIMIT 9;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
              echo "Sql statement failed";
            }else{
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              while($row = mysqli_fetch_assoc($result)){
                echo '<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12"
                    style="border: 2px solid red; border-radius: 5px; text-align: center; margin-top: 0.5%; margin-left: 0.5%; padding: 5px;"><a href="#">
                  <img style="height: 250px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="PostPhotos/'.$row["postImageFile"].'"></img>
                  <h3>'.$row["postTitle"].'</h3>
                  <p>'.$row["postDesk"].'</p>
                  <p>-'.$row["userUsername"].'</p>
                </a></div>';
              }
            }
            ?>
          </div>
          <button class="cfi" id="dmore">Display more!</button>
      </div>
    </div>
    <!--Profile part-->
    <div id="Profile" class="tab-pane fade" style="font-family: 'Century Gothic'">
      <div class="row">
        <h2 style="background-color: white; color: rgb(38,38,38); text-align: center; border-radius: 15px;"
        class="col-lg-12 col-md-12 col-sm-12 col-xs-12;" id="postTop"><i>Your Posts</i></h2>
      </div>
      <div class="jumbotron image-container">
        <h4 style="text-align: center;"><a href="#postForm" style="background-color: lightgray;
          padding: 5px; border-radius: 5px;">Jump to post form?</a></h3><br>
        <div class="container">
          <div class="row">
        <?php
        require '../loginSite/databaseCon.php';
        $userUsername = $_SESSION['UserID'];
        $sql = "SELECT * FROM posts WHERE userUsername='$userUsername' ORDER BY orderGallery;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          echo "Sql statement failed";
        }else{
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          while($row = mysqli_fetch_assoc($result)){
            echo '<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12"
                style="overflow: auto; border: 2px solid red; border-radius: 5px; text-align: center; margin-top: 0.5%; margin-left: 0.5%; padding: 5px;"><a href="#">
              <img style="height: 250px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="PostPhotos/'.$row["postImageFile"].'"></img>
              <h3>'.$row["postTitle"].'</h3>
              <p>'.$row["postDesk"].'</p>
            </a></div>';
          }
        }
        ?>
      </div>
      </div>
      <div class="jumbotron">
      <h3 style="text-align: center;"><a href="#postTop" style="background-color: lightgray;
        padding: 5px; border-radius: 5px;">Post something new or go to top?</a></h3>
      <form action="upload.php" method="post" enctype="multipart/form-data" id="postForm">
        <input type="text" name="postName" placeholder="File Name" class="cfi col-lg-6 col-md-5 col-sm-12 col-xs-12" required>
        <input type="text" name="postTitle" placeholder="Title" class="cfi col-lg-5 col-md-5 col-sm-12 col-xs-12" required>
        <div class="cfi col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border: 2px solid red;">
          <input type="file" name="postImage" placeholder="Choose an image" required></div>
        <textarea name="postDesc" placeholder="Description" class="cfi col-lg-12 col-md-12 col-sm-12 col-xs-12"
          style="width:100%" required></textarea>
        <button type="submit" name="submitPost" style="text-align: center" class="cfi col-lg-6 col-md-5 col-sm-12 col-xs-12">Post</button>
        <button type="reset" name="resetPost" style="text-align: center" class="cfi col-lg-5 col-md-6 col-sm-12 col-xs-12">Reset</button>
    </form>
    </div>
    </div>
  </div>
    <!--Contact Us-->
    <div id="Contact" class="tab-pane fade" style="font-family: 'Century Gothic';">
      <div class="row">
        <h2 style="background-color: white; color: rgb(38,38,38); text-align: center; border-radius: 15px;"
        class="col-lg-12 col-md-12 col-sm-12 col-xs-12;"><i>Meet our STAFF...</i></h2>
        <div class="card col-lg-3 col-md-3 col-sm-5 col-xs-10">
          <br>
          <img src="ContactPhotos/AIsmajli.jpg" alt="AlbionaIsmajli" style="width:80%; border-radius: 5px 5px 0 0; height:300px;align-self: center;">
          <div class="container" style="padding: 2px 16px; color: rgb(38,38,38);">
            <h4><b>Albiona Ismajli</b></h4>
            <p><b><i>Designer</i></b></p>
            <p>+383-4X-YYY-YYY</p>
            <p>albiona@ismajli.com</p>
          </div>
        </div>
        <div class="card col-lg-3 col-md-3 col-sm-5 col-xs-10">
          <br>
          <img src="ContactPhotos/BSherifi.jpg" alt="BajramSherifi" style="width:80%; border-radius: 5px 5px 0 0; height:300px; align-self: center;">
          <div class="container" style="padding: 2px 16px; color: rgb(38,38,38);">
            <h4><b>Bajram Sherifi</b></h4>
            <p><b><i>Researcher</i></b></p>
            <p>+383-4X-YYY-YYY</p>
            <p>bajrami@sherifi.com</p>
          </div>
        </div>
      <div class="card col-lg-3 col-md-3 col-sm-5 col-xs-10">
        <br>
        <img src="ContactPhotos/BBerisha.jpg" alt="BardhBerisha" style="width:80%; border-radius: 5px 5px 0 0; height:300px; align-self: center;">
        <div class="container" style="padding: 2px 16px; color: rgb(38,38,38);">
          <h4><b>Bardh Berisha</b></h4>
          <p><b><i>Nice person</i></b></p>
          <p>+383-4X-YYY-YYY</p>
          <p>bardhi@berisha.com</p>
        </div>
      </div>
      <div class="card col-lg-3 col-md-3 col-sm-5 col-xs-10">
        <br>
        <img src="ContactPhotos/LBerisha.jpg" alt="LumBerisha" style="width:80%; border-radius: 5px 5px 0 0; height:300px; align-self: center;">
        <div class="container" style="padding: 2px 16px; color: rgb(38,38,38);">
          <h4><b>Lum Berisha</b></h4>
          <p><b><i>Supporter</i></b></p>
          <p>+383-4X-YYY-YYY</p>
          <p>lumi@berisha.com</p>
        </div>
      </div>
    </div>
    <br>
    <div>
      <p>
        <button class="btn btn-primary ContactUsButton" type="button" data-toggle="collapse" data-target=".form-collapse" aria-expanded="false"
          aria-controls="multiCollapseExample1 multiCollapseExample2">
          Tell us what you think!<div class="CheckboxInput"><input type="checkbox" data-toggle="toggle" data-on="Hide Form" data-off="Show Form"
            data-onstyle="danger" data-offstyle="success" data-width="100"></div></button>
      </p>
      <form class="jumbotron contact-form form-collapse collapse" action="ContactUs.php" method="post">
        <input type="text" name="emri" placeholder="Your name!" class="cfi col-lg-5 col-md-5 col-sm-12 col-xs-12" required>
        <input type="text" name="mbiemri" placeholder="Your lastname!" class="cfi col-lg-6 col-md-6 col-sm-12 col-xs-12" required>
        <input type="email" name="email" placeholder="Your email!" class="cfi col-lg-6 col-md-6 col-sm-12 col-xs-12" required>
        <input type="text" name="subject" placeholder="Subject!" class="cfi col-lg-5 col-md-5 col-sm-12 col-xs-12" required>
        <textarea name="message" rows="8" placeholder="Type here!" class="cfi col-lg-11 col-md-11 col-sm-12 col-xs-12"
          style="width:100%" required></textarea>
        <button type="submit" name="submit" style="text-align: center" class="cfi col-lg-5 col-md-5 col-sm-12 col-xs-12">Send MAIL</button>
        <button type="reset" name="reset" style="text-align: center" class="cfi col-lg-6 col-md-6 col-sm-12 col-xs-12">Reset</button>
      </form>
    </div>
</div>
<!--End of Contact Us-->
</div>
</div>
<!--modal-->
<div class="bg-modal" id="ModalID" style="display: none">
<div class="modal-content col-lg-5 col-md-8 col-sm-12 col-xs-12">
<img src="changePwd.png" alt="ChangePassword.png" class="col-lg-4 col-md-4 col-sm-8 col-xs-8 modalpic">
<!--change password form-->
<form action="changePassword.php" method="Post">
<input type="password" name="oldP" placeholder="Old password" class="ChPi"><br>
<input type="password" name="newP" placeholder="New Password" class="ChPi"><br>
<button type="button" id="dpass" class="ChPi" style="text-align:center">
  Display Passwords...<img src="../loginSite/displayPassword.png"
    id="displayPassword" style="right: 0;"/></button><br>
<button type="Submit" class="ChPi" style="text-align:center" name="Change">Change!</button>
</form>
</div>
</div>

<script>
//Display password per password change
$(document).ready(function () {
$("#dpass").click(function() {
  var input1 = $('input[name="oldP"]');
  if (input1.attr("type") == "password") {
    input1.attr("type", "text");
    $("#displayPassword").attr("src","../loginSite/hidePassword.png");
  } else {
    input1.attr("type", "password");
    $("#displayPassword").attr("src","../loginSite/displayPassword.png");
  }
  var input2 = $('input[name="newP"]');
  if (input2.attr("type") == "password") {
    input2.attr("type", "text");
  } else {
    input2.attr("type", "password");
  }
  });

  $(".ChangePM").click(function(){
    $(".bg-modal").fadeIn(1000);
    $(".bg-modal").css("display","block");
  });
  var modal = document.getElementById('ModalID');
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  //toggle checkbox prej butonit
  $(".ContactUsButton").click(function(){
    if($('input[type=checkbox]').prop("checked")==true){
      $('input[type=checkbox]').bootstrapToggle('off');
    }else{
      $('input[type=checkbox]').bootstrapToggle('on');
    }
  });
  var limiter=9;
  $("#dmore").click(function(){
    limiter+=9;
    $("#ediv").load("explore.php", {
      limitCounter: limiter
    });
  });
});

</script>
</body>
</html>
