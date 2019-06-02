<?php
if(isset($_POST['Sign-up'])){

  require 'databaseCon.php';

  $emri = mysqli_real_escape_string($conn,$_POST['emri']);
  $mbiemri = mysqli_real_escape_string($conn,$_POST['mbiemri']);
  $telefoni = mysqli_real_escape_string($conn,$_POST['telefoni']);
  $email = mysqli_real_escape_string($conn,$_POST['reg_mail']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $password = mysqli_real_escape_string($conn,$_POST['fpass']);

  //check nese ka lon naj sen zbrazt
  if(empty($emri)||empty($mbiemri)||
  empty($telefoni)||empty($email)||
  empty($username)||empty($password)){
    header("Location: LogIn.php?error=empty-fields!");
    exit();
  }
  else{
    $sql = "SELECT userUsername FROM users
    WHERE userUsername=?";
    $statement = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement, $sql)){
      header("Location: LogIn.php?sql-error!");
      exit();
    }
    else{
      mysqli_stmt_bind_param($statement, "s", $username);
      mysqli_stmt_execute($statement);
      mysqli_stmt_store_result($statement);
      $resultCheck = mysqli_stmt_num_rows($statement);
      if ($resultCheck>0){
        header("Location: LogIn.php?username-taken!");
        exit();
      }
      else{
        $userNotTaken=true;
      }
    }
    $sql = "SELECT userMail FROM users
    WHERE userMail=?";
    $statement = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement, $sql)){
      header("Location: LogIn.php?sql-error!");
      exit();
    }
    else{
      mysqli_stmt_bind_param($statement, "s", $email);
      mysqli_stmt_execute($statement);
      mysqli_stmt_store_result($statement);
      $resultCheck = mysqli_stmt_num_rows($statement);
      if ($resultCheck>0){
        header("Location: LogIn.php?Email-taken!");
        exit();
      }
      else{
        $emailNotTaken=true;
      }
    }
    if($userNotTaken==true&&$emailNotTaken==true){
          $sql = "INSERT INTO users (userName,
            userLName,userPhone,userMail,
            userUsername,userPassword)
            VALUES (?,?,?,?,?,?)";
          $statement=mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: LogIn.php?sql-error!");
            exit();
          }
          else{
            $hashedP=password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($statement, "ssssss",
              $emri,$mbiemri,$telefoni,
              $email,$username,$hashedP);
            mysqli_stmt_execute($statement);
            header("Location:LogIn.php?Successfuly-Registered!");
            exit();
          }
      }
    }
  mysqli_stmt_close($statement);
  mysqli_close($conn);
}
else{
  header("Location:LogIn.php?Please-Fill-SignUp-Form!");
  exit();
}
?>
