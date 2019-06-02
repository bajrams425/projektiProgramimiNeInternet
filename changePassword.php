<?php
session_start();
if (isset($_POST['Change'])){
  require '../loginSite/databaseCon.php';
  $oldpass=mysqli_real_escape_string($conn, $_POST['oldP']);
  $newpass=mysqli_real_escape_string($conn, $_POST['newP']);
  $CurentUser=$_SESSION['UserID'];
  //a ka lon naj sen zbrazt
  if(empty($oldpass)||empty($newpass)){
    header("Location:Main.php?error-Please-Fill-Both-Inputs!");
    exit();
  }
  //check a jon tnjejta
  else if($_POST['oldP']===$_POST['newP']){
    header("Location:Main.php?newPassword-mustNotBeTheSameAs-oldPassword-error");
    exit();
  }
  else{
    $sql="SELECT userPassword FROM users WHERE userUsername=?;";
     //run a statement
    $stmt = mysqli_stmt_init($conn);
    //check a mujm me ja bo statement run me sql skripten
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location:Main.php?sql1-error!");
      exit();
    }
    else{
    mysqli_stmt_bind_param($stmt,"s",$CurentUser);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    //check nese ka naj matching row
      if(!$row=mysqli_fetch_assoc($result)){
        header("Location:Main.php?error:Incorrect-Password!");
        exit();
      }
      else{
          $passCheck = password_verify($oldpass,
          $row['userPassword']);
          if($passCheck==false){
            if(!$row=mysqli_fetch_assoc($result)){
              header("Location:Main.php?error:Wrong-Password!");
              exit();
            }
          }
          else if($passCheck==true){
          $sql = "UPDATE users SET userPassword=?
          WHERE userUsername=?";
          $stmt=mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: Main.php?sql2-error!");
            exit();
          }
          else{
            $hashedP=password_hash($newpass, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ss", $hashedP, $CurentUser);
            mysqli_stmt_execute($stmt);
            header("Location:Main.php?Password-Changed!");
            exit();
            }
          }
          else{
            header("Location:Main.php?error:SqlPasswordError!");
            exit();
          }
        }
      }
    }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else{
  header("Location:Main.php");
  exit();
}
?>
