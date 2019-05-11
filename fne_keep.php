<?php
require('mysql/config.php');

if(isset($_GET['mid'])){
    $mid=$_GET['mid'];
}else{
    $mid="";
}

if(isset($_GET['bid'])){
	$bid=$_GET['bid'];
}else{
	$bid="";
}
if(isset($_GET['tlend'])){
	$tlend=$_GET['tlend'];
}else{
	$tlend="";
}

$sql="UPDATE transections SET tstat='0' WHERE bid='$bid' AND mid='$mid' AND tlend='$tlend'";
    require('mysql/connect.php');
    if($result==1){
    	$msg="Completed!";
        $v1=1;
    }else{
    	$msg="Fail!";
        $v1=0;
    }
    require('mysql/unconn.php');

?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Pay the fine</title>
</head>
<body>
<script language="javascript">
var v1=<?php echo($v1);?>;
alert('<?php echo($msg);?>');
if(v1==1){
	window.location.replace("mbr_detail.php?mid=<?php echo($mid);?>");
}else{
    window.history.back();
}
</script>
</body>
</html>