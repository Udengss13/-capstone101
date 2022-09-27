<?php
  require('php/connection.php');
  
  $start_from = 0; 
  $queryimage = "SELECT * FROM admin_content_homepage"; //You dont need like you do in SQL;
  $resultimage = mysqli_query($db_admin_account, $queryimage);

  $result = $db_admin_account->query("SELECT image_path from admin_carousel_homepage");
  ?>

<?php
  $quicktipsquery = "SELECT * FROM `admin_quicktips`"; //You dont need like you do in SQL;
  $quicktipsresult = mysqli_query($db_admin_account, $quicktipsquery);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PetCo Homepage</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- slider -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');

    /* .nav-item {
        margin-left: 3px
    }

    .nav-item:hover {
        background-color: rgb(23, 171, 201);
        border-radius: ;

    }

    .tips {
        font-family: 'Poppins';
        font-size: 22px;
        font-size: 30px;
        font-style: bold;
        color: Blue;
    } */
    </style>
</head>

<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light ; ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/logopet.png" alt="Logo" class="logo" />
                <span style="text-shadow: 2px 2px 2px  rgba(49, 44, 44, 0.767);" class="text-white"><b>PETCO. ANIMAL
                        CLINIC</b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse me-3" id="navbarScroll">
            <ul class="navbar-nav me-auto my-0 my-lg-0 " style="--bs-scroll-height: 100px;">
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white bg-primary " style="border-radius:10px;" aria-current="page"
                            href="index.php">HOME</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="aboutUs.php">ABOUT US</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="services.php">SERVICES</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="shop.php">SHOP</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">

                        <a class="nav-link text-white" href="petgallery.php">PET GALLERY</a>

                    </li>
                </div>
                <!-- <div class=" text-white">
         <?php echo  date("m/d/y") . "<br>"; ?>
       </div> -->
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login-user.php">SIGN IN</a>
                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="signup-user.php">SIGN UP</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>




    <!-- SLIDER Images -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php 
              $i=0;
              foreach($result as $row){
                $actives ='';
                if($i==0){
                  $actives= 'active';
                }
              
              ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$i; ?>"
                    class="<?=$actives; ?>" aria-current="true" aria-label="Slide 1"></button>
                <?php $i++;} ?>
            </div>
            <div class="carousel-inner">
                <?php 
              $i=0;
              foreach($result as $row){
                $actives ='';
                if($i==0){
                  $actives= 'active';
                }
              
              ?>
                <div class="carousel-item <?= $actives; ?>">
                    <img src="<?= $row['image_path'] ?>" class="img-fluid" width="100%" height="500px">
                </div>

                <?php $i++; } ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--ANNOUNCEMENT-->
    <section class="flex-sect" id="imagesec">
        <section id="imagesection" class="div_background_light py-4">
            <div class="container-fluid px-5 mt-3">
                <div class="col-lg-12 col-md-12">
                    <div class="justify-content-center row col-md-12 rounded-3">

                        <div style="width: 100%; height: 20px; border-bottom: 2px solid white; text-align: center">
                            <span style="font-size: 40px; background-color:#9FBACD; color: white">
                                QUICKTIPS
                                <!--Padding is optional-->
                            </span>
                        </div>


                        <!--Pictures-->

                        <?php while($rowimages = mysqli_fetch_array($quicktipsresult)) {?>

                        <div class="col-lg-4 col-xs-1 col-sm-5  m-5" style="height:400px;">
                            <img src="asset/<?php echo $rowimages['image_filename'] ?>"
                                class="card-img-top img-responsive" style="height:400px; width:100%;">

                            <div class="mb-4">
                                <br>
                                <a href="index-view-image.php?id=<?php echo $rowimages['Image_id'] ?>"
                                    style="background:#EA6D52" class=" btn btn-warning w-50 text-light">Read</a>
                            </div>


                        </div>

                        <?php }?>


                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--ANNOUNCEMENT-->
    <section class="flex-sect" id="imagesec">
        <section id="imagesection" class="div_background_light py-4">
            <div class="container-fluid px-5 mt-3">
                <div class="col-lg-12 col-md-12">
                    <div class="justify-content-center row col-md-12 rounded-3">
                        <h3 class="col-12  text-center fw-bolder"
                            style="text-shadow: 3px 1px 3px  lightblue; color: rgb(13, 13, 103)">ANNOUNCEMENT</h3>
                        <hr>

                        <!--Pictures-->

                        <?php while($rowimage = mysqli_fetch_array($resultimage)) {?>

                        <div class="col-lg-3 col-xs-1 col-sm-5 card mx-3 my-4" style="height:350px;">


                            <img src="asset/homepage/<?php echo $rowimage['Image_filename'] ?>"
                                class="card-img-top pt-3 img-responsive " style="height:200px; width:100%;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center"><?php echo $rowimage['Image_title'] ?></h5>
                                <!-- <h6 class="card-text text-center text-muted">
                                    <?php echo $rowimage['Image_subtitle'] ?>
                                </h6>
                                <p class="card-text d-inline-block text-truncate">
                                    <?php echo $rowimage['Image_body'];?>
                                </p> -->
                                <div class="mb-4">
                                    <a href="index-view-image.php?id=<?php echo $rowimage['Image_id'] ?>"
                                        class=" btn btn-success w-100">View Details</a>
                                </div>

                            </div>
                        </div>

                        <?php }?>


                    </div>
                </div>
            </div>
        </section>
    </section>



    <!--Footer-->
    <footer class=" footer-banner" id="about">
        <div class="container text">

            <div class="row">
                <div class="col-sm-3">
                    <ul class="follow">
                        <h3>FOLLOW US!</h3>
                        <p></p><a
                            href="https://www.google.com/maps/place/Petco.+Animal+Clinic/@14.8109306,120.9831885,17z/data=!3m1!4b1!4m5!3m4!1s0x3397add6664b08bf:0x5a91f2a8b8c4db95!8m2!3d14.8109306!4d120.9853772">Facebook
                            <i class="fa-brands fa-facebook-square"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="company">
                        <h3>Company</h3>
                        <a href="https://www.facebook.com/Udeng13"> About Us<i
                                class="fa-solid fa-table-layout"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Promos <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Privacy Policy <i
                                class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="company">
                        <h3>Company</h3>
                        <a href="https://www.facebook.com/Udeng13">Facebook <i
                                class="fa-brands fa-facebook-square"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <ul class="company">
                        <h3>Company</h3>
                        <a href="https://www.facebook.com/Udeng13">Facebook <i
                                class="fa-brands fa-facebook-square"></i></a><br>
                        <a href="https://www.facebook.com/messages/t/100008437094309">Messenger <i
                                class="fa-brands fa-facebook-messenger"></i></a><br>
                        <a href="https://www.facebook.com/Udeng13">Instagram <i class="fa-brands fa-instagram"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>