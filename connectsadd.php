<?php
//กำหนดตัวแปรเพื่อนำไปใช้งาน
$hostname = "localhost"; //ชื่อโฮสต์
$user = "pun"; //ชื่อผู้ใช้
$password = "0890222255"; //รหัสผ่าน
$dbname = "logindb"; //ชื่อฐานข้อมูล
$tblname = "student"; //ชื่อตาราง
$student_id = $_POST['student_id'];
$rest = substr($student_id,-5);
$nation_id = $_POST['nation_id'];
$name = $_POST['name'];
$number = $_POST['number'];
$class = $_POST['class'];
$room = $_POST['room'];
// เริ่มติดต่อฐานข้อมูล
mysql_connect($hostname, $user, $password) or die("ติดต่อฐานข้อมูลไม่ได้");
// เลือกฐานข้อมูล
mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");
// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "insert into $tblname (student_id,nation_id,name,password,number,class,room) values ('$student_id','$nation_id','$name','$rest','$number','$class', '$room')"; // กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูลแบบคีย์ในคำสั่ง SQL
$dbquery = mysql_db_query($dbname, $sql);
// ปิดการติดต่อฐานข้อมูล
mysql_close();
echo "<Font Size=4><B>เพิ่มข้อมูลลงฐานข้อมูลเรียบร้อยแล้ว</B>";
?>