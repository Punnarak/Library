<?php
require("mysql/config.php");
$mid=$_GET['mid'];
require("mbr_select.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Library System</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="2">
	<tr>
		<td colspan="2">MEMBER DETAIL</td>
	</tr>
	<tr>
		<td align="right">ID :</td>
		<td align="left"><?php echo($mid);?></td>
	</tr>
	<tr>
		<td align="right">Name :</td>
		<td align="left"><?php echo($mname);?></td>
	</tr>
	<tr>
		<td align="right">Department :</td>
		<td align="left"><?php echo($mdep);?></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><a href="mbr_list.php">Back</td>
	</tr>
</table> <br>
<?php require("brw_form.php");?> <br/>
<?php require("brw_list.php");?> <br/>
<?php require("fne_list.php");?> <br/>
</body>
</html>