<?php if(session_status()==PHP_SESSION_NONE) 
{session_start();}
include "valid_user.php";
include"db.php";
$query1="SELECT * FROM PLAN_TOUR;";
$rows_=mysqli_query($conn,$query1);

    $_SESSION['opt']=$_POST['opt'];
    $tour='';
    foreach($_POST['opt'] as $row)
    {
        $tour .=$row .', ';
    }

    $tour=substr($tour,0,-2);
$count=mysqli_num_rows($rows_);
$count++;
    $query="INSERT INTO PLAN_TOUR (id,user,tour,date_of_arrival,duration_of_stay,trip_estimate,room_fare,no_of_rooms) VALUES('".$count."','".$_SESSION['username']."','".$tour."','".$_POST['date_of_arrival']."','".$_POST['duration_of_stay']."','".$_POST['trip_estimate']."','".$_POST['room_fare']."','".$_POST['no_of_rooms']."');";
    $row=mysqli_query($conn,$query);
   if(!$row)
  {
     die("Data Not Inserted!");
   }
     
?>
<!--window.location.href='../Minor Project/results.html';-->