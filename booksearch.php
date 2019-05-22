<?php
require("mysql/config.php");
$sql="SELECT bid, btitle, bcate FROM books";
if(isset($_GET['kwm'])){
	$kwm=$_GET['kwm'];
	$sql.=" WHERE bid ='$kwm' OR bid LIKE '%$kwm%' ";
}else{
    $kwm="";
    $sql.=" WHERE bid IS NULL ";
}
require('mysql/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="booksearch.php" method="get" target="_self">
	Search :
	<input type="text" name="kwm" id="kwm" value="<?php echo($kwm);?>">
<input type="submit" name="submit" value="OK">
</form>
<table border="1" cellspacing="0" cellpadding="2">
	<tr>
		<br>
		<td>ID</td>
		<td>Title</td>
		<td>Cate</td>
	</tr>
	<?php while ($record=mysqli_fetch_array($result)){?>
	<tr>
		<td><?php echo($record[0]);?></td>
		<td><?php echo($record[1]);?></td>
		<td><?php echo($record[2]);?></td>
	</tr>
<?php 
} 
require('mysql/unconn.php');
?>
</table>
</body>
</html>