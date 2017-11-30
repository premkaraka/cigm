<?php
include 'ss.php';
?>
<?php
include 'db.php';

$catname=$_POST['catname'];

$InsCmd="insert into category(catname) value('".$catname."')";
mysqli_query($con, $InsCmd) or die(mysqli_errno($con));
?>

<script>
    window.location.href='category.php?s=1';
</script>
