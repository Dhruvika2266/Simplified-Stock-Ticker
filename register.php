<?php
require('config.php');
$username     = $_POST['username'];
$password   = $_POST['password'];

if(!empty($username) and !empty($password)) {
    // If email already exists, throw error
    $username_mat = mysqli_query($mysqli, "select 'username' from user where username='$username'");

    // Count the number of row matched 
    $user_matched = mysqli_num_rows($username_mat);

    // If number of user rows returned more than 0, it means username already exists
    if ($user_matched > 0) {
        echo "<strong>Error: </strong> User already exists with the email id '$username'.";
    } else {
        // Insert user data into database
        $result   = mysqli_query($mysqli, "INSERT INTO user(username,password) VALUES('$username','$password')");

        // check if user data inserted successfully.
        if ($result) {
            $_SESSION["user"] = $username;
            echo "done";
        } 
    }
}

?>