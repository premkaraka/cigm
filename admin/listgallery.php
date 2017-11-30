<?php
include 'ss.php';
?>
<html>

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
                    <h1>Gallery List</h1>
                </div>

                <?php
                if (isset($_GET['s'])) {
                    $status = $_GET['s'];
                    if ($status == 1) {
                        echo('sucessfully Updated');
                    }

                    if ($status == 2) {
                        echo('sucessfully Deleted A article');
                    }

                    if ($status == 3) {
                        echo('sucessfully Album Deleted');
                    }
                }
                ?>


                <table border="2" width="100%" id="list">

                    
                    <tr>
                        <td>
                            Select Category 

                        </td>
                        <td> <select id="catname" name="catname"><?php echo (getCategory()); ?></select> </td>
                    </tr>
                    



                </table> 
            </div>
            <?php
            include 'webparts/footer.php';
            ?>
        </div>
        <script type="text/javascript" language="javascript">
            function del(subcatid) {
                if (confirm("Are You Sure want to delete this Subcategory/Album")) {
                    window.location.href = "deletegallery.php?subcatid="+subcatid;
                }
            }

            $("#catname").change(function () {


                GetSubCat($("#catname").val());

            });
            function GetSubCat(catid) {
                phpurl = "../populator.php?f=2&catid=" + catid;
                
                $.ajax({
                    url: phpurl,
                    type: 'GET',
                    success: function (data) {
                        $("#list tr:gt(0)").remove();
                        $("#list").append(data);
                        validate();
                    },
                    complete: function () {

                    },
                    error: function (e) {
                        alert(e.responseText());
                    }
                });
            }
        </script>
    </body>
</html>
