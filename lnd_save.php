<?php
require('mysql/config.php');

if(isset($_POST['mid'])){
$mid=$_POST['mid'];
}else{
$mid="";
}

if(isset($_POST['bid'])){
	$bid=$_POST['bid'];
}else{
	$bid="";
}

$msg="";
$v1=0;

$sql="SELECT COUNT(bid) FROM books WHERE bid='$bid'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$bookrow=$record[0];
require('mysql/unconn.php');

$sql="SELECT COUNT(bid) FROM transections WHERE bid='$bid' AND mid='$mid' AND tstat='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$lending=$record[0];
require('mysql/unconn.php');

$sql="SELECT COUNT(mid) FROM transections WHERE mid='$mid' AND tstat='1'";
require('mysql/connect.php');
$record=mysqli_fetch_array($result);
$holding=$record[0];
require('mysql/unconn.php');

if($bookrow<1){
	$msg="Check the Book ID!";
    $v1=0;
}else if($lending>0){
	$msg="This book has already taken!";
    $v1=0;
}else if($holding>=3){
	$msg="You got 3 books in total!";
    $v1=0;
}else{
	$sql="INSERT INTO transections(mid,bid,tlend,tstat) VALUES('$mid','$bid',NOW(),'1')";
    require('mysql/connect.php');
    if($result==1){
    	$msg="Completed!";
        $v1=1;
    }else{
    	$msg="Fail!";
        $v1=0;
    }
    require('mysql/unconn.php');
}
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>การยืมหนังสือ</title>
</head>
<body>
<script language="javascript">
var v1 = <?php echo($v1)?>;
alert('<?php echo($msg);?>');
if(v1==1){
	window.location.replace("mbr_detail.php?mid=<?php echo($mid);?>");
}else{
    window.history.back();
}
</script>
</body>
</html>