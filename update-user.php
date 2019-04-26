<?php include"db.php";
$sqll="UPDATE USER SET name='".$_POST['name']."',password='".$_POST['password']."',email_id='".$_POST['email_id']."',mobile_no = '".$_POST['mobile_no']."' WHERE id ='".$_POST['id']."'";


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
    window.location.href='../dashboard.html';
    </script>";
}
  
}
?>
