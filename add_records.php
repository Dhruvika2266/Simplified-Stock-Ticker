<?php 
require('config.php');

//check login
if(!isset($_SESSION['user'])) {
    die('Please login');
}
for($i = 0; $i < 10; $i++) {
    $name = uniqid('stock_');
    $price = rand(1,20);
    $result   = mysqli_query($mysqli, "INSERT INTO stockupdates(StockName,CurrentPrice) VALUES('$name','$price')");
}
?>