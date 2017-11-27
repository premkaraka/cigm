 <?php
include'db.php';
$verse = $_POST['verse'];
$dailybread = $_POST['dailybread'];
$did = $_GET['id'];

$updatecmnd = "update dailybread set content='" . $dailybread . "' , verse='" . $verse . "' where did=1";

mysqli_query($con, $updatecmnd)or die(mysqli_error($con));
?>
<script>
    window.location.href = 'dailybread.php?s=1';
</script>