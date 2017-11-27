<html>

    <?php
    include'webparts/head.php';
    ?>
    <link href="css/jquery-te-1.4.0.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-te-1.4.0.min.js" type="text/javascript"></script>
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
                    <h1>Edit Category</h1>
                </div>
                <form method="post" action="updatecategory.php" enctype="multipart/form-data" >
                    <?php
                    include'db.php';
                    $catid = $_GET['id'];
                  
                    $selcmnd = "select * from category where catid=" . $catid;
                    $rs = mysqli_query($con, $selcmnd)or die(mysqli_error($con));
                    $row = mysqli_fetch_object($rs);
                    
                    ?>
                    
                    <input type="hidden" id="id" name="id" value="<?php echo($catid) ?>"/>
                    <table border="2" width="100%">

                        <tr>
                            <td>
                                Category Name
                            </td>

                            <td>
                                <input type="text" name="catname" id="catname" value="<?php
                    echo($row->catName);
                    ?>">
                            </td>

                        </tr>

                      
                        <tr>
                            <td></td>
                            <td align="right"><input type="submit" id="save" value="Save"/></td>
                        </tr>


                    </table>    
                </form>






            </div>
<?php
include 'webparts/footer.php';
?>
        </div>






        <script type="text/javascript" language="javascript">
            echo('Hello');
            $("#save").click(function () {
                catname = $("#catname").val();
                if (catname == "") {
                    alert("Enter Category Name");
                    return false;
                }
                
                 $("#news").submit();
            });

         
            });
        </script>
    </body>
</html>
