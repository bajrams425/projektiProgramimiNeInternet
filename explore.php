<?php
session_start();
require '../loginSite/databaseCon.php';
$limiterCount = $_POST['limitCounter'];
$userUsername = $_SESSION['UserID'];
$sql = "SELECT * FROM posts WHERE userUsername!='$userUsername' ORDER BY orderGallery LIMIT $limiterCount;";
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
