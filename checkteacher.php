
<?php
session_start();
include("connect.php");
/*
* 1 = Admin
* 2 = User
* 3 = Boss
*/
// variable
$ID    = $_POST['ID'];
$password = $_POST['password'];

if($ID == '' && $password = ''){
      echo "check ID or password";
    }

else if(strlen($ID) < 13 ){
      echo "check ID";
       echo "<meta http-equiv='refresh' content='1;URL=teacher.php'>";
}
else if(strlen($password) < 5 ){
    echo "check password";
     echo "<meta http-equiv='refresh' content='1;URL=teacher.php'>";
}
else {
      $sql = mysql_query("SELECT * FROM teacher 
                              WHERE nation_id = '$ID'AND
                              password = '$password' ");

      $num = mysql_num_rows($sql);
  if($num <= 0){
echo "check id or password";
             echo "<meta http-equiv='refresh' content='1;URL=teacher.php'>";
      } 
       else {

              while ($teacher = mysql_fetch_array($sql))
              {

                  if($ID == $teacher['nation_id'] && $password == $teacher['password'])
                  {
                    
                      $_SESSION['name'] = $teacher['name'];
                      $_SESSION['nation_id'] = $teacher['nation_id'];
                      $_SESSION['department'] = $teacher['department'];

  echo "<meta http-equiv='refresh' content='1;URL=teacherpage.php'>"; 
                  }
                  else
                  {
                        echo "<meta http-equiv='refresh' content='1;URL= teacher.php'>"; 
                  }
                 
            }
              }
            }// end else1
?>
 
     
     
