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
$subcatid=$_GET['subcatid'];
$catid=$_GET['catid'];
$selcmnd="select * from galimages where subcatid=".$subcatid;

$rs=  mysqli_query($con, $selcmnd);


?>
      

            <div id="maincol"  style="min-height:400px !important;">
                <div class="rule">
                    <h1> Edit Gallery  </h1>
                </div>
               
                <form method="POST" action="updategallery.php?id=<?php echo($subcatid); ?>" enctype="multipart/form-data" > 
                 <input type="hidden" name="catid" id="catid" value="<?php echo($catid) ?>"/>
                    <?php
                if(isset($_GET['s'])){
                    $status=$_GET['s'];
                    if($status==1){
                        echo('sucessfully New Images Added To gallery');
                    }
                    
                    if($status==2){
                        echo('sucessfully Deleted Image');
                    }
                }
                ?>

                 
                   <table>
                       
                       <tr>
                           
                           <td>
                               Gallery Name /Sub Category Name
                           </td>
        
    
    <?php
    global $con;
    $selcmnd="select * from subcategory where subcatid=".$subcatid;
    $rs= mysqli_query($con, $selcmnd);
    while($row=mysqli_fetch_object($rs))
                {
     echo('<td><input type:"text" name="subcatname" id="subcatname" value="'.$row->subcatname.'" </td></tr>');
    }
    ?>
    <tr>
        <th> Images</th>
    </tr>   
   
        <?php
         
        $selcmnd="select * from galimages where subcatid=".$subcatid;      
        $res=  mysqli_query($con, $selcmnd);
      
        $i=0;
        while($rw=mysqli_fetch_object($res)){
            
           $i++;
           if($i==1){
            echo('<tr>');
           }
        echo('<td> <img width="200px" height="150px" src="images/gallery/'.$rw->imgname.'"/><a href="javascript:del('.$rw->imgid.')">Delete </a></td>');
        
         if($i==3){
                  echo('</tr>');
                  
                  $i=0;
              
         }
        }
          
     /*   if($i<4){
              $p=(4-$i);
            
              for($q=0;$q<$p;$q++){
                  echo('<td></td>');
              } 
              echo('</tr>');
          } 
      
      */
        echo('</tr>');
        
        
        ?>
    <tr>
        <td>Add More Pictures</td>
        <td>  <input type="file" name="gfile[]" id="gfile" multiple="multiple"> </td> 
           </tr> 
           <tr>
                    <td colspan="2">
                <input type="submit"  value="save" id="save">
                    </td>
                </tr>
                    </table> 
                </form>
                      </div>
            <?php
            include 'webparts/footer.php';
            ?>
        </div>
    </body>
    <script type="text/javascript" language="javascript">
          function del(id){
            
            if(confirm("Are You Sure want to delete this file")){
               window.location.href="deleteimages.php?id="+id+"&subcatid=<?php echo($subcatid)?>&catid=<?php echo($catid) ?>";
            }
        }
        
    </script>
</html>
