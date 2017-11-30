<?php
include 'ss.php';
?>

<html>
    <head>
        <title>
            Gallery 
        </title>
          </head>
    
    <body>
        
      
  
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



            <div id="maincol">
                <div class="rule">
                    <h1>Add Category Name</h1>
                </div>
                <br/>
               
                
               <form method="POST" action="savecategory.php">
                    
                     
                    <?php
                    if(isset($_GET['s'])){
                        $status=$_GET['s'];
                        if ($status=1){
                            echo('Sucessfully New Category added');
                        }
                    }
                    ?>
            
            <table border="1" class="gallery" align="center">
                <tr>
                    <td>
                        Enter Category  Name
                        
                    </td>
                    <td>
                        <input type="text" name="catname" id="catname">
                    </td>
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

<script type="text/javascript" language="javascript" >
    
    $("#save").click (function (){
         
         catname=$("#catname").val();
         
         if(catname == ""){
             alert("Enter Category Name");
             return false;
         }
        
        
    });
    
    $("#isave").click(function(){
       $("#imgs").submit(); 
    });
</script>


</html>

