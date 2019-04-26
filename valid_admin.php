<?php if(session_status()==PHP_SESSION_NONE) 
{session_start();}
include "db.php";
$flag=0;
$sql="SELECT * FROM ADMIN;";
$run_sql=mysqli_query($conn,$sql);
if(isset($_POST['submitadmin']))
{
   while($rows=mysqli_fetch_array($run_sql))
   {
    if($_POST['adminname']==$rows['name'] and $_POST['adminpassword']==$rows['password'])
    {

        $_SESSION['adminname']=$_POST['adminname'];
        echo '<script> alert("Logged in Successfully!!");  
        window.location="../admin.html";</script>';
        $flag=1;
        break;
    }
    
    } 
    if($flag==0)
    {
        echo '<script>
        alert("Invalid Adminname or Password");
        window.location="../index.html";
        </script>';

    }
    
}
?>