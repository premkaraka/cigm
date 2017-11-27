<?php session_start();

include 'db.php';


$current = $_POST['current'];
$new = $_POST['new'];
$renew = $_POST['renew'];
$user = $_SESSION['username'];

$selcmnd = "select * from authenticate where username='" . $user . "' and password='" . $current . "'";

$rs = mysqli_query($con, $selcmnd) or die(mysqli_errno($con));

if ($row = mysqli_fetch_object($rs)) {


    if ($new == $renew) {
        $updtcmd = "update authenticate set password='" . $new . "' where username='" . $user . "'";

        mysqli_query($con, $updtcmd)or die(mysqli_error($con));
        header("Location:changepassword.php?s=1", true);
    } else {

        header("Location:changepassword.php?s=2", true);
    }
} else {

    header("Location:changepassword.php?s=3", true);
}
?>