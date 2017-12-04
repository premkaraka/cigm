<?php
$title = 'Tribal Ministry';
include 'webparts/topheader.php';
?>

<!-- /#content -->
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Tribal Ministry</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>

                    <li>Tribal Ministry</li>
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
                    <img src="img/banners/tribals.jpg" alt="">
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
                        <h2>Tribal Ministry</h2>
                    </div>
                    <p class="lead">
                        We and our co-workers will travel to agency remote tribal areas to the share the Love of Christ.They  are fully rock labourers,idol worshipers.
                        There is no proper transport connectivity.So, we have to walk around 15km per day to preach the christ.Our CGM India team work with 12 sister 
                        churches in Tribal and Operational areas.</p>
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
                $subcatid = 7;
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




