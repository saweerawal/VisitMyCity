<?php
 $user='sawee';
 $password='abc@';
 $server='localhost';
 $db='visitmycity';
$conn="";
 $conn=mysqli_connect($server,$user,$password,$db);
 if(!$conn)
 {
    die("Connection Failed!".mysqli_connect_error());
 }


?>