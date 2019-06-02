<?php
session_start();
if (isset($_POST['submitPost'])){
  require '../loginSite/databaseCon.php';

  $newFileName=$_POST['postName'];
  if(empty($newFileName)){
    $newFileName="GalleryPic";
  }else{
    $newFileName=strtolower(str_replace(" ", "-", $newFileName));
  }
  $imageTitle=mysqli_real_escape_string($conn,$_POST['postTitle']);
  $imageDesc=mysqli_real_escape_string($conn,$_POST['postDesc']);

  $file = $_FILES["postImage"];
  if(!empty($imageTitle)&&!empty($imageDesc)){
    $fileName=$file['name'];
    $fileType=$file['type'];
    $fileTempName=$file['tmp_name'];
    $fileError=$file['error'];
    $fileSize=$file['size'];

    $fileExt = explode(".",$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpeg","jpg","gif","png");

    if(in_array($fileActualExt, $allowed)){
      if($fileError===0){
        if($fileSize<2000000){
          $imageFullName = $newFileName.".".uniqid("",true).".".$fileActualExt;
          $fileDestination = "PostPhotos/".$imageFullName;

          $sql = "SELECT * FROM posts";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:Main.php?SQL1-error");
            exit();
          }else{
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);
            $setImageOrder = $rowCount+1;

            $userUsername = $_SESSION['UserID'];

            $sql = "INSERT INTO posts (postTitle, postDesk, postImageFile, orderGallery, userUsername)
             VALUES (?,?,?,?,?);";
             if(!mysqli_stmt_prepare($stmt, $sql)){
               header("Location:Main.php?SQL2-error");
               exit();
             }else{
               mysqli_stmt_bind_param($stmt, "sssss", $imageTitle, $imageDesc,
                $imageFullName, $setImageOrder, $userUsername);
                mysqli_stmt_execute($stmt);

                move_uploaded_file($fileTempName, $fileDestination);

                header("Location:Main.php?Succesfully-Posted");
                exit();
             }
          }

        }else{
          header("Location:Main.php?File-too-large");
          exit();
        }
      }else{
        header("Location:Main.php?Error-while-uploading");
        exit();
      }
    } else {
      header("Location:Main.php?File-Not-Allowed");
      exit();
    }

  }else{
    header("Location:Main.php?Fill-Post-Form");
    exit();
  }
}else{
  header("Location:Main.php");
  exit();
}
