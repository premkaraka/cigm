<?php
include 'ss.php';
?>
<html>
<?php
include'webparts/head.php';
?>
<body>
<div id="container">
 
  <?php
  include 'webparts/title.php';
  ?>
 
   <?php
   include 'webparts/menu.php';
   ?>

  <div id="maincol"style="min-height: 400px;">
    <div class="rule">
      <h1>Welcome Admin</h1>
    </div>
       <h2>Successfully Registered </h2>
   
        
        <p>   <?php
                    include('dbkbq.php');
                    $subcatid = $_GET['id'];
                    $slctCmd = "select * from kbqapplications15 where kbqid=" . $subcatid;
                    $rs = mysqli_query($con, $slctCmd);

                    if ($row = mysqli_fetch_object($rs)) {
                        echo("Dear <b>"    . $row->name . "</b><Br/> Your application id: <b>" . $row->applicationno . "</b>.<Br/><br/> Thanks for registering with us. For further information kindly contact: 9849438393<br/>");
                    }
                    ?></p><br/>
  </div>
 <?php
 include 'webparts/footer.php';
 ?>
    
</div>
</body>
</html>
