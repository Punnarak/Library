<?php
session_start();
if (!isset($_SESSION['nation_id'])){
	header("Location: Web(main).php");
}
require 'connect.php';
$session_ID = $_SESSION['nation_id'];
$qry_user = "SELECT * FROM admin WHERE nation_id='$session_ID'";
$result_user = mysqli_query($dbcon,$qry_user);
if ($result_user){
	$row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
	$s_name = $row_user['name'];
	$s_student_ID = $row_user['nation_id']; 
	mysqli_free_result($result_user);
}
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	echo "Admin : ".$_SESSION['nation_id'];
	echo "<br>";
	echo "Welcome : $s_name   ";
	?>
	<hr>

</body>
<html>
<head>
	<title>profie</title>
	<style type='text/css'>
		h1{
			text-shadow: 2px 2px #FFFFFF;
		}

html {
        background: url(https://thumbs.gfycat.com/ArcticOblongFlies-size_restricted.gif)
no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover<style}
</style> 

</head>
<body>
<a href="chooseadd.php">ADD</a>
<a href="adminsearchdelete.php">DELETE</a>
	<a href="https://calendar.google.com/calendar/r?pli=1&t=AKUaPmZCMctzq4eOMcYibhfWe2Cn1l--Xpsd1dcwjyiuWUyX7Xp0dWD_WbpHyNJqgyR9c6Gmc5dLsButgr-vCLYKE061HixCfQ%3D%3D"><img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/calendar-128.png" width="70" align="left"></a>
	<img src="http://www.sclance.com/pngs/instagram-logo-.png/instagram_logo_.png_709013.png" width="150px" height= "150px" hspace="525">
	<br>
	<center>
	
	<br>
	<h1 >history</h1>
	<table border="1" align="center" width="450" height = "200" bgcolor="pink">
	<tr>
	<th>D/M/Y</th>
	<th>Book name</th>
	<th>Status</th>
	</tr>
	<tr>
	<th>...........</th>
	<th>...........</th>
	<th>...........</th>
	</tr>
</table>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<a href="logout.php"><img src="http://2.bp.blogspot.com/-zpPxbk-19Qk/UHRY0yastLI/AAAAAAAAAT0/nR14IukPKSY/s1600/logout-button-blue-hi.png" width="150"></a>
<a href="manual..html"><img src="http://pngimg.com/uploads/question_mark/question_mark_PNG96.png" width="50" align="right">

</body>

</html>