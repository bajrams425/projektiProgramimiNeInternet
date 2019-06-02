<?php
if (isset($_POST['Log-in'])){
  require 'databaseCon.php';
  $userMail = mysqli_real_escape_string($conn,$_POST['e-mail']);
  $userPassword = mysqli_real_escape_string($conn,$_POST['lpass']);

  //nese jon kon zbarzt
  if(empty($userMail)||empty($userPassword)){
    header("Location:LogIn.php?error:error-Empty-fields!");
    exit();
  }
  else{
    $sql='SELECT * FROM users
    WHERE userMail=? OR userUsername=?';
    $statement=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement, $sql)){
      header("Location:LogIn.php?error-Sql-error!");
      exit();
    }
    else{
      mysqli_stmt_bind_param($statement, "ss",
        $userMail, $userMail);
      mysqli_stmt_execute($statement);
      $result = mysqli_stmt_get_result($statement);
      if($row=mysqli_fetch_assoc($result)){
        $passCheck = password_verify($userPassword,
          $row['userPassword']);
        if($passCheck==false){
          header("Location:LogIn.php?error-Wrong-Password!");
          exit();
        }
        else if($passCheck==true){
          session_start();
          $_SESSION[/*Name for the session*/'UserName']
            =$row['userName'];
          $_SESSION[/*Name for the session*/'UserID']
            =$row['userUsername'];
          $userIsNow=$_SESSION['UserID'];
          header("Location:../mainSite/Main.php?user:".$userIsNow);
          exit();
        }
        else{
          header("Location:LogIn.php?error-Wrong-Password!");
          exit();
        }
      }
      else{
        header("Location:LogIn.php?error-User-Does-Not-Exist!");
        exit();
      }
    }
  }
}else{
  header("Location:LogIn.php?error-Please-Fill-Log-In-Form!");
  exit();
}
?>
