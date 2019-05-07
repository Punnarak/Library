
<center>
<h1>Showbook</h1>
<?php
session_start();
include("connect.php");

echo $_SESSION['name'];                              

?>
<br>
<a href="profile.php" class="btn btn-primary">keep</a>
<br>
<a href="profile.php" class="btn btn-primary">return</a>
<br>
<a href="indexbook.php" class="btn btn-primary">Back</a>
<?php

?>
</center>