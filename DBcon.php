<?php 
    define('DB_HOST','localhost');
    define('DB_NAME','summertech');
    define('DB_USER','root');
    define('DB_PASS','');
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die("connect failed:mysqli_connect_errno():mysql_connect_error()");
    
?>