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
<center><img src = "data:image/png;base64,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" width = "150" ></center>
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