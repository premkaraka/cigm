<?php
$title = 'Blankets Ministry';
include 'webparts/topheader.php';
?>

<!-- /#content -->
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Blankets Ministry</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>

                    <li>Blankets Ministry</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">



        <section>
            <div >
                <div >
                    <img src="img/banners/blankets.jpg" alt="">
                </div>


            </div>
            <!-- /.project owl-slider -->
        </section>





    </div>
    <!-- /.container -->


</div>

<div id="content" class="team-member-detail">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Blankets and Carpets Ministry</h2>
                    </div>
                    <p class="lead">
                     
                            CGM Ministry volunteers visit the streets during midnight in our operational area yeleswaram. There are number of homeless people taking shelter
                            at bridges and in front of shops,we provide them bread and blankets as far as we can afford. We share the Good News of our Lord among them.
                        </p>
                    <p class="lead text-center text-success"><strong>
                            Thank you so much for spending your time in visiting our ministry.We need your prayers and ecnouragment.God bless you all
                        </strong>
                    </p>
                </div>
            </div>


        </section>
        <section>

            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Portfolio</h2>
                    </div>


                </div>
            </div>

            <div class="row portfolio">

                 <?php
                $subcatid = 6;
                include('webparts/ministryPortfolio.php');
                ?>

            </div>


        </section>



    </div>
    <!-- /.container -->


    <!-- /.bar -->

</div>
<!-- /#content -->















<!-- *** FOOTER ***
_________________________________________________________ -->


<!-- /#footer -->
<?php
include 'webparts/footerheader.php';
?>




