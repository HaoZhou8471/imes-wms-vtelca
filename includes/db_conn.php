<?php
$servername = "localhost";
$username = "root";
$password = "root";  // MAMP 默认密码

$dbname = "new";     // 你在 phpMyAdmin 里建的库名
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>