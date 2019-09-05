<?php
  $conn=mysqli_connect('localhost','root',1111111) or die("mysql 서버 접속 에러");
  $db=mysqli_select_db($conn,'seaker') or die("DB접속 에러");
?>
