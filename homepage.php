<?php
require('config.php');
if(!isset($_SESSION['user'])) {
    die('Please login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneCinco</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-body">
                    <h1>welcome!</h1>
                    <div class="alert alert-success update-list-msg" style='display: none;'>New updates available please <a href="#" class='update-list'>click here</a> to update the list.</div>
                    <button class='btn btn-primary btn-gen'>Generate 10 random records</button>
                    <table class='table stock-updates mt-3'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Stock Name</th>
                                <th>Current Price</th>
                                <th>Update Date time</th>
                            </tr>
                        </thead>
                        <tbody class='load-new-updates'>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>