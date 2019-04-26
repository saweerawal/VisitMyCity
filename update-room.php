<?php include"db.php";
$sqll="UPDATE AFFORDABLE_ROOMS SET addr='".$_POST['addr']."',pin='".$_POST['pin']."',owner_name='".$_POST['owner_name']."',owner_mobno = '".$_POST['owner_mobno']."',owner_email_id = '".$_POST['owner_email_id']."',room_fare='".$_POST['room_fare']."',no_of_rooms='".$_POST['no_of_rooms']."',no_of_single_beds='".$_POST['no_of_single_beds']."' WHERE id ='".$_POST['id']."'";


$runnn_sql=mysqli_query($conn,$sqll);
if(isset($_POST['savechanges']))
{
  if(!$runnn_sql)
  {
     die("Data Not Updated!".mysqli_error($conn));
   }
else
{
    echo "<script type='text/javascript'>
    alert('Changes have been saved successfully!');
    window.location.href='../admin.html';
    </script>";
}
  
}
?>
