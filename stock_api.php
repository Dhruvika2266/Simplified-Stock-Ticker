<?php 
require('config.php');

//check login
if(!isset($_SESSION['user'])) {
    die('Please login');
}
if(isset($_GET['last_id'])) {
    $last_id = $_GET['last_id'];
    $query = "SELECT * FROM stockupdates WHERE stockId > $last_id ORDER BY StockId ASC LIMIT 10";

}else {
    $query = "SELECT * FROM stockupdates ORDER BY StockId DESC LIMIT 10";
}

$myArray = array();
if ($result = $mysqli->query($query)) {

    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
}

$mysqli->close();

?>