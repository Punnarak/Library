<?php
$dbcon = mysqli_connect('localhost','root','12345678','logindb');
if (mysqli_connect_errno()){
	echo "ไม่สามารถติดต่อฐานข้อมูล MySQL ได้". mysqli_connext_error();
    exit;
}
	mysqli_set_charset($dbcon,'utf8');
