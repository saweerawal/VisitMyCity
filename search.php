<?php if(session_status()==PHP_SESSION_NONE) 
{session_start();}
include"db.php";
$query1="SELECT * FROM SEARCH_PLACES;";
$rows_=mysqli_query($conn,$query1);
    $_SESSION['opts']=$_POST['opts'];
    $tour='';
    foreach($_POST['opts'] as $row)
    {
        $tour .=$row .', ';
    }

    $tour=substr($tour,0,-2);
$count=mysqli_num_rows($rows_);
$count++;
    $query="INSERT INTO SEARCH_PLACES (id,places) VALUES('".$count."','".$tour."');";
    $row=mysqli_query($conn,$query);
   if(!$row)
  {
     die("Data Not Inserted!");
   }
     
?>
