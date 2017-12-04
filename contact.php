<?php
$title = 'Contact Us';
include 'webparts/topheader.php';
?>
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Contact</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li>Contact</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container" id="contact">
        <section>
            <div >
                <div >
                    <img src="img/banners/contactus.jpg" alt="">
                </div>


            </div>
            <!-- /.project owl-slider -->
        </section>
        <section>

            <div class="row">
                <div class="col-md-12">
                    <section>
                        <div class="heading">
                            <h2>For Prayer Requests and other Information Contact us</h2>
                        </div>


                    </section>
                </div>
            </div> 

        </section>

        <section>

            <div class="row">
                <div class="col-md-4">
                    <div class="box-simple">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <h3>Address</h3>
                        <p  class="lead"> 
                            <strong>Evangelist KANNURI SATISH BABU. <br>
                                5-342/1,Subbarao peta,<br>
                                Katheru Post,<br>
                                Rajahmundry 533103<br>
                                East Godavari District<br>
                                Andhra Pradesh<br>
                                India.</strong><br>
                        </p> 
                    </div>
                    <!-- /.box-simple -->
                </div>


                <div class="col-md-4">

                    <div class="box-simple">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h3>Call Us</h3>
                        <p class="lead">
                            <strong>+91-9491689871 (R) <br>
                                +91-9059111210 (O)<br>

                            </strong><br>
                        </p> 
                    </div>
                    <!-- /.box-simple -->

                </div>

                <div class="col-md-4">

                    <div class="box-simple">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <h3>Mail Us</h3>
                        <p class="lead"><strong>
                                changegospelministries@gmail.com <br>
                                info@changegospelministries.com
                            </strong> </p>

                    </div>
                    <!-- /.box-simple -->
                </div>
            </div>

        </section>

        <section>

            <div class="row text-center">

                <div class="col-md-12">
                    <div class="heading">
                        <h2>Write to Us</h2>
                    </div>
                </div>
                <?php
                if (isset($_GET['s'])) {
                    $status = $_GET['s'];
                    if ($status == 1) {
                        echo('Message Sent Sucessfully');
                    } if ($status == 2) {
                        echo('Enter Required Fields');
                    }
                }
                ?>

                <div class="col-md-8 col-md-offset-2">
                    <form action="savemail.php" method="post" id="enq">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="mail" id="mail" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Send message</button>

                            </div>
                        </div>
                        <!-- /.row -->
                    </form>



                </div>
            </div>
            <!-- /.row -->

        </section>


    </div>
    <!-- /#contact.container -->
</div>
<!-- /#content -->

<div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3814.713297534056!2d81.7759071148715!3d17.037727488289065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a37a6acd72fd5d7%3A0xa211c530d934d28e!2sUnnamed+Road%2C+Katheru%2C+Rajahmundry%2C+Andhra+Pradesh+533105!5e0!3m2!1sen!2sin!4v1512361741533" width="1349" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>





<!-- *** FOOTER END *** -->

<!-- *** COPYRIGHT ***
_________________________________________________________ -->

<?php
include 'webparts/footer.php';
?>
<!-- /#copyright -->

<!-- *** COPYRIGHT END *** -->



</div>
<!-- /#all -->

<!-- #### JAVASCRIPT FILES ### -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
</script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<script src="js/jquery.cookie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/front.js"></script>








</body>

</html>