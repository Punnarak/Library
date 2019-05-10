<?php
//กำหนดตัวแปรเพื่อนำไปใช้งาน
$hostname = "localhost"; //ชื่อโฮสต์
$user = "pun"; //ชื่อผู้ใช้
$password = "0890222255"; //รหัสผ่าน
$dbname = "logindb"; //ชื่อฐานข้อมูล
$tblname = "teacher"; //ชื่อตาราง
$nation_id = $_POST['nation_id'];
$rest = substr($nation_id,-5);
$name = $_POST['name'];
$department = $_POST['department'];
// เริ่มติดต่อฐานข้อมูล
mysql_connect($hostname, $user, $password) or die("ติดต่อฐานข้อมูลไม่ได้");
// เลือกฐานข้อมูล
mysql_select_db($dbname) or die("เลือกฐานข้อมูลไม่ได้");
// คำสั่ง SQL และสั่งให้ทำงาน
$sql = "insert into $tblname (nation_id,name,password,department) values ('$nation_id','$name','$rest','$department')"; // กำหนดคำสั่ง SQL เพื่อเพิ่มข้อมูลแบบคีย์ในคำสั่ง SQL
$dbquery = mysql_db_query($dbname, $sql);
// ปิดการติดต่อฐานข้อมูล
mysql_close();
echo "<Font Size=4><B>เพิ่มข้อมูลลงฐานข้อมูลเรียบร้อยแล้ว</B>";


?><html>
<head>


</head>
<body>
<a href="teacheradd.php">back to teacher add</a>

</body>
</html>