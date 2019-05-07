<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
       <h1>REGISTER</h1>
       <form action="register.php" method="POST">
       	<label for="username">USERNAME: </label>
       	<input type="text" name="username" required autofocus>
       	<label for="password">PASSWORD: </label>
       	<input type="password" name="password" required>
       	<label for="email">Email: </label>
       	<input type="email" name="email" placeholder="example@domain.com" required>
       	<br><br>
       	<input type="submit" value="register">
       </form>
       <br>
       <br>
       <a href="index.php">BACK</a>
       </div>
</body>
</html>