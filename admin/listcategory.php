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

<?php
include 'db.php';
$selcmnd='select * from category where delbit=0';

$rs= mysqli_query($con, $selcmnd);


?>
      

            <div id="maincol">
                <div class="rule">
                    <h1>List Of Categories</h1>
                </div>

                <?php
                if(isset($_GET['s'])){
                    $status=$_GET['s'];
                    if($status==1){
                        echo('sucessfully Updated');
                    }
                    
                    if($status==2){
                        echo('sucessfully Deleted A Category');
                    }
                }
                ?>

                
                   <table border="2" width="100%">

                       <tr>
        <th> Category Name</th>
        
    </tr>
    <?php
 
    while($row=mysqli_fetch_object($rs)){
      echo('<tr><td>'.$row->catName.'</td><td><a href="edicategory.php?id='.$row->catid.'">Edit</a></td><td><a href="#" onclick="javascript:del('.$row->catid.')">Delete</a></td></tr>');
    }
    ?>
    

                    </table> 
                      </div>
            <?php
            include 'webparts/footer.php';
            ?>
        </div>
    </body>
    <script type="text/javascript" language="javascript"> 
        function del(id){
            if(confirm("Are You Sure want to delete this Category")){
                window.location.href="deletecategory.php?id="+id;
            }
        }
        
    </script>
</html>
