<?php session_start();
include 'db.php';

$login=$_POST['username'];
$password=$_POST['password'];

$selcmnd="select * from authenticate where username='".$login."' and password='".$password."'";

$rs=  mysqli_query($con, $selcmnd);

if($row= mysqli_fetch_object($rs)){
    $_SESSION['username']=$login;
    
    header("Location:home.php",true);
    
}
else{
    echo('Password incorrect');

}

?>
<script>
    window.location.href='index.php?s=1';
    </script>