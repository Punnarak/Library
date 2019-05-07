
<?php
session_start();
include("connect.php");
/*
* 1 = Admin
* 2 = User
* 3 = Boss
*/
// variable
$code    = $_POST['code'];


if($code == ''){
      echo "check code";
    }

else if(strlen($code) < 6 ){
      echo "check code";
       echo "<meta http-equiv='refresh' content='1;URL=indexbook.php'>";
}
else {
      $sql = mysql_query("SELECT * FROM book 
                              WHERE code = '$code'");

      $num = mysql_num_rows($sql);
  if($num <= 0){
echo "check code";
             echo "<meta http-equiv='refresh' content='1;URL=indexbook.php'>";
      } 
       else {

              while ($book = mysql_fetch_array($sql))
              {

                  if($code == $book['code'] )
                  {
                        
                      $_SESSION['name'] = $book['name'];

  echo "<meta http-equiv='refresh' content='1;URL=showbook.php'>"; 
                  }
                  else
                  {
                        echo "<meta http-equiv='refresh' content='1;URL=indexbook.php'>"; 
                  }
                 
            }
              }
            }// end else1
?>
 
     
     
