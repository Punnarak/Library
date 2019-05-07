<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<center><img src = "http://www.kmutt.ac.th/pd/main/files/news/auser.png" width = "150" ></center>
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card">
                              <form action="login.php" method="POST">
                                   <div class="card-header text-center">
                                   Login to your account.
                                   </div>
                                        <div class="card-body">
                                             <div class="form-group row">
                                                  <label for="username" class="col-sm-3 col-form-label">Username</label>
                                                  <div class="col-sm-9"> 
                                                  <input type="text" class="form-control" id="username" name="username" required autofocus>
                                                  </div>
                                             </div>
                                             <div class="form-group row">
                                                  <label for="password"class="col-sm-3 col-form-label">Password</label>
                                                  <div class="col-sm-9">
                                                  <input type="password" class="form-control" id="password" name="password" required>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="card-footer text-center">
                                        <input type="submit" name="submit" class="btn btn-success" value="Login">
                                   </div>
                              </form>
                    </div>        
               </div>
          </div>
</div>
          <div class="text-center">
               You don't have accounts? <a href="fm_register.php">Register</a>
          </div>
       <script src="node_modules/jquery/dist/jquery.min.js"></script>
       <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
       <script src="node_modules/popper.js/dist/popper.min.js"></script>
       <script>tag
       function saveData() {}
</body>
</html>