
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
       echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";
}
else if(strlen($password) < 5 ){
    echo "check password";
     echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";
}
else {
      $sql = mysql_query("SELECT * FROM admin 
                              WHERE nation_id = '$ID'AND
                              password = '$password' ");

      $num = mysql_num_rows($sql);
  if($num <= 0){
echo "check id or password";
             echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";
      } 
       else {

              while ($admin = mysql_fetch_array($sql))
              {

                  if($ID == $admin['nation_id'] && $password == $admin['password'])
                  {
                    
                      $_SESSION['name'] = $admin['name'];
                      $_SESSION['nation_id'] = $admin['nation_id'];

  echo "<meta http-equiv='refresh' content='1;URL=adminpage.php'>"; 
                  }
                  else
                  {
                        echo "<meta http-equiv='refresh' content='1;URL= admin.php'>"; 
                  }
                 
            }
              }
            }// end else1
?>
 
     
     
