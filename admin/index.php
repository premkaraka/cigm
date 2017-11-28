
<html>
<?php
include'webparts/head.php';
?>
<body>
<div id="container">
 
  <?php
  include 'webparts/title.php';
  ?>
 
  

  <div id="maincol"style="min-height: 400px;">
    <div class="rule">
      <h1>Welcome Admin</h1>
    </div>
      <p style="margin-top: 20px; padding-left: 150px;"> <strong>Hie Admin!!</strong> </p>
      <p style="padding-left:50px; float:left; padding-bottom:200px !important"> 
          
          <form method="post" action="authenticate.php">
        
            <table border="1" align="center">
                <?php
        if(isset($_GET['s'])){
        $status=$_GET['s'];
        if($status==1){
            echo('<tr><td colspan=2>Incorrect Password Admin, Try Again!</td></tr>');
        }
        if($status==2){
             echo('<tr><td colspan=2>Session Expired. Login Again.</td></tr>');
        }
        
        }
        ?>
                
                
            
            <tr>
                <td>User Name</td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
                  
                
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" id="password" name="password">
                </td>
                
                
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit">
                </td>
            </tr>
        </table>
        </form>
          
      </p>
    
  </div>
 <?php
 include 'webparts/footer.php';
 ?>
    
</div>
</body>
</html>
