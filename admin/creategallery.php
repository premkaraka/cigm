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
        include '../populator.php';
        include'class.upload.php';
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
                    <h1>Add New Gallery</h1>
                </div>
                <br/>


                <form method="POST" action="uploadpictures.php" enctype="multipart/form-data" id="imgs">


                    <?php
                    if (isset($_GET['s'])) {
                        $status = $_GET['s'];
                        if ($status = 1) {
                            echo('Sucessfully New Gallery added');
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
                                <select id="subcat" name="subcat"></select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Browse Images

                            </td>
                            <td>


                                <input type="file" name="gfile[]" id="gfile" multiple="multiple">
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
        $(document).ready(function () {
            validate();
        });

        $("#save").click(function () {

            gname = $("#galname").val();

            if (gname == "") {
                alert("Enter Gallery Name");
                return false;
            }


        });

        $("#isave").click(function () {
            $("#imgs").submit();
        });

        $("#catname").change(function () {

            GetSubCat($("#catname").val());

        });
        $("#subcat").change(function () {
            validate();
        });

        function validate() {
            if ($("#catname").val() == -1 || $("#subcat").val() == -1) {
                $("#gfile").prop("disabled", true);
            } else {
                $("#gfile").prop("disabled", false);
            }
        }

        function GetSubCat(catid) {
            phpurl = "../populator.php?f=1&catid=" + catid;

            $.ajax({
                url: phpurl,
                type: 'GET',
                success: function (data) {
                    $("#subcat option").remove();
                    $("#subcat").append(data);
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


</html>

