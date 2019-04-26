<?php include "db.php";

$sql1="SELECT * FROM LAKE";
$run_sql=mysqli_query($conn,$sql1);
if(isset($_POST['submitplan'])&&$_POST['opt']=='Lakes')
{
 while($rows=mysqli_fetch_array($run_sql))
{
   echo "<h5>{$rows['name']}</h5>";
   echo "<img src='{$rows['src']}' width=20% height=20%>";
}   
}

?>