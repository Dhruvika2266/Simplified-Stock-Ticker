<?php

require('config.php');

//check login
if(!isset($_SESSION['user'])) {
    die('Please login');
}
$id = $_GET['last_id'];

$result = mysqli_query($mysqli, "select * from stockupdates where stockId > $id ORDER BY stockId DESC LIMIT 1");

// Count the number of user/rows returned by query 
$matched = mysqli_num_rows($result);

if ($matched > 0) {
    echo 'available';
} 
?>