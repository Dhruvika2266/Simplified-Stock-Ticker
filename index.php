<?php
    require('config.php');
    if(isset($_GET['logout'])) {
        session_destroy();
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
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Existing User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab" aria-controls="newuser" aria-selected="false">New user</a>
                    </li>
                </ul>
                <hr>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h5 class="card-title text-center mt-3">Sign In</h5>
                        <form class="form-signin">
                            <div class="form-group">
                                <input type="text" id="loginusername" class="form-control" placeholder="Username" required autofocus>
                            </div>
        
                            <div class="form-group">
                                <input type="password" id="loginpassword" class="form-control" placeholder="Password" required>
                            </div>
        
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="login">Sign in</button>
                            <div class="alert msg"></div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
                        <h5 class="card-title text-center mt-3">Register</h5>
                        <form class="form-signin">
                            <div class="form-group">
                                <input type="text" id="regusername" class="form-control" placeholder="Username" required autofocus>
                            </div>
        
                            <div class="form-group">
                                <input type="password" id="regpassword" class="form-control" placeholder="Password" required>
                            </div>
        
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="register">Register</button>
                            <div class="alert msg"></div>

                        </form>
                    </div>
                </div>
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