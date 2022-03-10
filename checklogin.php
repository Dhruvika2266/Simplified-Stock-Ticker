<?php 
  require('config.php');
  $username     = $_POST['username'];
  $password   = $_POST['password'];
  $result = mysqli_query($mysqli, "select * from user
      where username='$username' and password='$password'");

  // Count the number of user/rows returned by query 
  $user_matched = mysqli_num_rows($result);
  $result = mysqli_fetch_assoc($result);
  // Check If user matched/exist, store user email in session and redirect to sample page-1
  if ($user_matched > 0) {
      $_SESSION["user"] = $username;
      echo 'done';
  } 
?>