<html>
    <head>
        <title>
            Gallery 
        </title>
          </head>
    
    <body>
        
      
  
   <?php
    include'webparts/head.php';
    include '../populator.php';

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
                    <h1>Add Sub-Category Name</h1>
                </div>
                <br/>
               
                
               <form method="POST" action="savesubcategory.php">
                    
                     
                    <?php
                    if(isset($_GET['s'])){
                        $status=$_GET['s'];
                        if ($status=1){
                            echo('Sucessfully New Sub Category added');
                        }
                    }
                    ?>
            
            <table border="1" class="gallery" align="center">
                <tr>
                    <td>
                        Select Category 
                        
                    </td>
                    <td>
                        <select id="catname" name="catname"><?php echo (getCategory()); ?></select>
                    </td>
                </tr>
                <tr>
                    
                    <td>
                        Enter Sub-Category  Name
                        
                    </td>
                    <td>
                        <input type="text" name="subcatname" id="subcatname">
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
         
         subcatname=$("#subcatname").val();
         
         if(subcatname == ""){
             alert("Enter Sub-Category Name");
             return false;
         }
        
        
    });
    
   
</script>


</html>

