
<?php
session_start();
include("connect.php");

/*
* 1 = Admin
* 2 = User
* 3 = Boss
*/
// variable
$ID    = $_GET['ID'];
$password = $_GET['password'];

if($ID == '' && $password = ''){
      echo "check ID or password";
    }

else if(strlen($ID) < 8 ){
      echo "check ID";
       echo "<meta http-equiv='refresh' content='1;URL=student.php'>";
}
else if(strlen($password) < 5 ){
    echo "check password";
     echo "<meta http-equiv='refresh' content='1;URL=student.php'>";
}
else {
      $sql = mysql_query("SELECT * FROM student 
                              WHERE student_id = '$ID'AND
                              password = '$password' ");

      $num = mysql_num_rows($sql);
  if($num <= 0){
//echo "check id or password";
include("checkteacher.php");
         //    echo "<meta http-equiv='refresh' content='1;URL=student.php'>";
      } 
       else {

              while ($student = mysql_fetch_array($sql))
              {

                  if($ID == $student['student_id'] && $password == $student['password'])
                  {
                    
                      $_SESSION['name'] = $student['name'];
                      $_SESSION['student_id'] = $student['student_id'];
                    
                      header( "location: mbr_detail.php?student_id=" . $_SESSION['student_id']);
                      
                     
                  }
                  else
                  {
                    
                   
                    
                        echo "<meta http-equiv='refresh' content='1;URL= student.php'>"; 
                  }
                 
            }
              }
            }// end else1
?>
 
     
     
