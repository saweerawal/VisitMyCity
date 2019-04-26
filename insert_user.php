<?php include "db.php";
$sql1="SELECT * FROM USER";
$sql2="";
$COUNT=0;
$sql="";
$flag=0;
$run_sql="";
$run_sql1=mysqli_query($conn,$sql1);
if(isset($_POST['submitform']))
{
    while($rows1=mysqli_fetch_array($run_sql1))
   {
        ++$GLOBALS['COUNT'];
    }
    ++$GLOBALS['COUNT'];
        
        
     $sql="INSERT INTO USER (id, name, password, email_id, mobile_no) VALUES ($COUNT, '".$_POST['username']."', '".$_POST['password']."', '".$_POST['email_id']."', '".$_POST['mobile_no']."');";
    $run_sql=mysqli_query($conn,$sql);
    
    echo '<script type="text/javascript">
    alert("registered sucessfully! Now you can login");
    window.location="../index.html";
    </script>';
}

?>