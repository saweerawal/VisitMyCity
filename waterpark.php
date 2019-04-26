<?php if(session_status()==PHP_SESSION_NONE) 
{session_start();}
include "dp.php";
$sql1="SELECT * FROM WATERPARK";
$run_sql=mysqli_query($conn,$sql1);
 foreach($_SESSION['opt'] as $roww)
 {
     if($_roww=='Water Park')
  {
 while($rows=mysqli_fetch_array($run_sql))
  {
   echo "<h5>{$rows['name']}</h5>";
   echo "<img src='{$rows['src']}' width=20% height=20%>";
  } 
  }
 }
?>