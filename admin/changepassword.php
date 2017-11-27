<?php session_start() ?>
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
                    <h1>Change The password</h1>
                </div>
                <form method="post" action="updatepassword.php" >
                    
                    <?php
                    if(isset($_GET['s'])){
                        $status=$_GET['s'];
                        
                        if($status==1){
                            echo('Password sucessfully updated');
                        }
                        if($status==2){
                            echo('New password Mis match');
                        }
                        if($status==3){
                            echo('Current password is incorrect');
                        }
                    }
                    ?>
                    <table border="2" width="100%">
                        <tr>
                            <td>User Name</td>
                            <td>
                                <input type="text" readonly="readonly" value="<?php echo($_SESSION['username'])?> "/>
                            </td>
                        </tr>
                        <tr>
                            <td>Enter Current Password</td>
                            <td>
                                <input type="text" name="current" id="current">
                               
                            </td>
                        </tr>
                        <tr>
                            <td> Type New Password</td>
                            <td>
                                <input type="password" name="new" id="new">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Re- Enter New Password 
                            </td>

                            <td>
                                <input type="text" name="renew" id="renew">
                            </td>

                        </tr>

                      <!--  <tr>
                            <td>
                                Content
                            </td>
                            <td>
                                <textarea rows="10" cols="50" name="content" id="content"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td> Upload Image</td>
                            <td>
                                <input type="file" name="ufile" id="ufile">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Publish
                            </td>
                            <td>
                                <select id="publish" name="publish">
                                    <option value="1">Publish Now</option>
                                    <option value="0"> Publish Later</option>

                                </select>
                            </td>
                        </tr> -->
                        <tr>
                            <td>click here to Save New password</td>
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
            $("#save").click(function () {
                subject = $("#subject").val();
                if (subject == "") {
                    alert("Enter subject");
                    return false;
                }
                content = $("#content").val();
                if (content == "") {
                    alert("Enter Content");
                    return false;
                }
                $("#news").submit();
            });

        </script>
    </body>
</html>
