<?php if(session_status()==PHP_SESSION_NONE) 
{session_start();}
include "db.php";
$flag=0;
$sql="SELECT * FROM USER";
$run_sql=mysqli_query($conn,$sql);
if(isset($_POST['submit']))
{
   while($rows=mysqli_fetch_array($run_sql))
   {
    if($_POST['username']==$rows['name'] and $_POST['password']==$rows['password'])
    {

        $_SESSION['username']=$_POST['username'];
        echo '<script> alert("Logged in Successfully!!");  
        window.location="../user.html";</script>';
        $flag=1;
        break;
    }
    
    } 
    if($flag==0)
    {
        echo '<script>
        alert("Invalid Username or Password");
        window.location="../index.html";
        </script>';

    }
    
}
?>