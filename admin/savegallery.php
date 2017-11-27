<?php

include 'db.php';

$gname=$_POST['galname'];


$Inscmnd="insert into  gallery (galname,postdate) "
        . "values('".$gname."',now())";



$rs=  mysqli_query($con, $Inscmnd)or die(mysqli_errno($con)) ;
 
header("Location:creategallery.php?s=1");



?>