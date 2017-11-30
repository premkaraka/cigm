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



            <div id="maincol">
                <div class="rule">
                    <h1>Daily Bread</h1>
                </div>
                <?php
                include 'db.php';
                $selcmnd = "select * from dailybread where did='1'";
                $rs = mysqli_query($con, $selcmnd);

                $row = (mysqli_fetch_object($rs));
                ?>
                <form method="post" action="savedailybread.php?id='<?php echo($row->did); ?>'" enctype="multipart/form-data" >

                    <?php
                    if (isset($_GET['s'])) {
                        $status = $_GET['s'];
                        if ($status = 1) {
                            echo('Sucessfully Updated Daily Bread');
                        }
                    }
                    ?>
                    <table border="2" width="100%">
                        <tr> <td> Reference :</td> </tr>
                        <tr>
                            <td>

                                <input type="text" name="verse" id="verse"  value=" <?php echo($row->verse); ?>" >

                            </td>
                        </tr>
                           <tr> <td> Verse :</td> </tr>
                        <tr> 


                            <td> 


                                <textarea rows="10" cols="80" name="dailybread" id="dailybread"><?php
                                    echo($row->content);
                                    ?></textarea>
                            </td>

                        </tr>
                      


                        <tr>

                            <td align="right"><input type="submit" id="update" value="update"/></td>
                        </tr>


                    </table>    
                </form>






            </div>
            <?php
            include 'webparts/footer.php';
            ?>
        </div>







    </body>
</html>
