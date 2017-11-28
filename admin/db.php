<?php
$host='103.21.58.4';
$username='userchangegospel';
$password='pCGmin1_$#';
$dbname='changegospel_db';

$con=  mysqli_connect($host, $username, $password) or die('connection failed');
mysqli_select_db($con, $dbname) or die ('could not select database');

function formatDateOutput($sDate, $defFormat = 'd-M-Y') {
    $date = new DateTime($sDate);
    return $date->format($defFormat);
}
function unqut($txt){
    $tx=str_replace("'", "''", $txt);
    return $tx;
}
?>