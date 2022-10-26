<?php
  require('php/connection.php');
  
  $start_from = 0; 
  $queryimage = "SELECT * FROM admin_content_homepage ORDER BY `admin_content_homepage`.`Image_id` DESC"; //You dont need like you do in SQL;
  $resultimage = mysqli_query($db_admin_account, $queryimage);

  $result = $db_admin_account->query("SELECT image_path from admin_carousel_homepage");
  ?>

<?php
  $quicktipsquery = "SELECT * FROM admin_quicktips"; //You dont need like you do in SQL;
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

    <script src="https://kit.fontawesome.com/f8f3c8a43b.js" crossorigin="anonymous"></script>

    <!-- slider -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
                        <a class="nav-link text-white" href="#about">ABOUT US</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">SERVICES</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Vaccination</a></li>
                                <li><a class="dropdown-item" href="#">Confinement</a></li>
                                <li><a class="dropdown-item" href="#">Pet Supplies</a></li>
                                <li><a class="dropdown-item" href="#">Consultation</a></li>
                                <li><a class="dropdown-item" href="#">Surgery</a></li>
                                <li><a class="dropdown-item" href="#">Treatment</a></li>
                                <li><a class="dropdown-item" href="#">Deworming</a></li>
                                <li><a class="dropdown-item" href="#">Grooming</a></li>
                                <li><a class="dropdown-item" href="#">Laboratory Tests</a></li>

                            </ul>

                        </div>
                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="shop.php">SHOP</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">

                        <a class="nav-link text-white" href="#imagesec">PET GALLERY</a>

                    </li>
                </div>
                <!-- <div class=" text-white">
         <?php echo  date("m/d/y") . "<br>"; ?>
       </div> -->
                <!--
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
-->
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


    <!--QUICKTIPS-->
    <section class="flex-sect" id="imagesec">
        <section id="imagesection" class="div_background_light py-4">
            <div class="container-fluid px-5">
                <div class="col-lg-12 col-md-12">
                    <div class="justify-content-center row col-md-12 rounded-3">
                        <div style="width: 100%; height: 30px; border-bottom: 2px solid white; text-align: center">
                            <span style="font-size: 40px; background-color:#9FBACD; color: white">
                                QUICKTIPS
                                <!--Padding is optional-->
                            </span>
                        </div>


                        <!--Pictures-->
                        <?php while($rowimages = mysqli_fetch_array($quicktipsresult)) {?>


                        <div class="col-lg-4 col-xs-1 col-sm-5  m-5" style="height:400px;">
                            <img src="asset/<?php echo $rowimages['image_filename'] ?>"
                                class="card-img-top img-responsive" style="height:400px; width:120%;">

                            <div class="mb-4 justify-content-center">
                                <br>
                                <a href="quicktips-view-image.php?id=<?php echo $rowimages['id'] ?>"
                                    style="background:#EA6D52" class=" btn btn-warning w-50 text-light">Read</a>
                            </div>


                        </div>

                        <?php }?>

                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- About us -->
    <section class="flex-sect" id="about" style="background-color:#9FBACD;">>
        <section id="imagesection" class="div_background_light py-4">
            <div class="container-fluid px-5">
                <div class="col-lg-12 col-md-12">
                    <div class="justify-content-center row col-md-12 rounded-3">
                        <div style="width: 100%; height: 30px; border-bottom: 2px solid white; text-align: center">
                            <span style="font-size: 40px; background-color:#9FBACD; color: white">
                                ABOUT US
                                <!--Padding is optional-->
                            </span>
                        </div>
                        <div class="row box" style="height:300px;">
                            <h4 style="color: white">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book. It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                                release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h4>
                        </div>

                        <!--ANNOUNCEMENT-->
                        <section class="flex-sect" id="imagesec">
                            <section id="imagesection" class="div_background_light py-4">
                                <div class="container-fluid px-5 mt-3">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="justify-content-center row col-md-12 rounded-3">
                                            <h3 class="col-12  text-center fw-bolder"
                                                style="text-shadow: 3px 1px 3px  lightblue; color: rgb(13, 13, 103)">
                                                ANNOUNCEMENT</h3>
                                            <hr>

                                            <!--Pictures-->

                                            <?php while($rowimage = mysqli_fetch_array($resultimage)) {?>

                                            <div class="col-lg-3 col-xs-1 col-sm-5 card mx-3 my-4"
                                                style="height:350px;">


                                                <img src="asset/homepage/<?php echo $rowimage['Image_filename'] ?>"
                                                    class="card-img-top pt-3 img-responsive "
                                                    style="height:200px; width:100%;">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title text-center">
                                                        <?php echo $rowimage['Image_title'] ?></h5>
<<<<<<< HEAD
                                                                        <!-- <h6 class="card-text text-center text-muted">
                                                            <?php echo $rowimage['Image_subtitle'] ?>
                                                        </h6>
                                                        <p class="card-text d-inline-block text-truncate">
                                                        <?php echo $rowimage['Image_body'];?>
                                                        </p> -->
=======
                                                    <!-- <h6 class="card-text text-center text-muted">
                                    <?php echo $rowimage['Image_subtitle'] ?>
                                </h6>
                                <p class="card-text d-inline-block text-truncate">
                                    <?php echo $rowimage['Image_body'];?>
                                </p> -->
>>>>>>> 705e3a30e3f118d8ad174ee4197788cd46577247
                                                    <div class="mb-4">
                                                        <a href="index-view-image.php?id=<?php echo $rowimage['Image_id'] ?>"
                                                            class=" btn btn-success w-100">View Details</a>
                                                    </div>

                                                </div>
                                            </div>

                                            <?php }?>


                                        </div>
                                    </div>
<<<<<<< HEAD
                                </div>
                            </section>
                        </section>

                        <!--SERVICES-->
                        <section class="d-flex justify-content-around" id="service" style="background-color:#9FBACD;">
                            <div class="justify-content-center row col-md-12 rounded-3">
                                <div
                                    style="width: 100%; height: 30px; border-bottom: 2px solid white; text-align: center">
                                    <span style="font-size: 40px; background-color:#9FBACD; color: white">
                                        SERVICES
                                        <!--Padding is optional-->
                                    </span>
=======
>>>>>>> 705e3a30e3f118d8ad174ee4197788cd46577247
                                </div>
                            </section>
                        </section>


<<<<<<< HEAD
                                <div class="container mb-5">
                                    <div class="d-flex justify-content-around mt-5">

                                        <!-- <div class="p-2">Vaccination</div> -->

                                        <a href='vaccination.php'>
                                            <button type="button" class="btn bg-button"
                                                style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Vaccination
                                                <i class="fa-solid fa-arrow-right" style="color:blue;"></i></button></a>
                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Confinement
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>

                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Pet
                                            Supplies
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>
                                    </div>

                                    <div class="d-flex justify-content-around mt-4">

                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Consultation
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>
                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Surgery
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>
                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Treatment
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>
                                    </div>

                                    <div class="d-flex justify-content-around mt-4">

                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Deworming
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>
                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Grooming
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>
                                        <button type="button" class="btn bg-button"
                                            style="background: #FFFFFF; border-radius: 20px; border-width: 10px; padding: 10px;">Laboratory
                                            Test
                                            <i class="fa-solid fa-arrow-right"
                                                style="color:blue;"></i></button></button>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <!--Footer-->
                        <footer class=" footer-banner" id="about">
                            <div class="container text">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <ul class="follow">
                                            <h3>Please follow us</h3>

                                            <a href="https://www.facebook.com/"><img src="asset/facebook.png"
                                                    width="50px" height="40px"></a>
                                            <a href="https://www.instagram.com//"><img src="asset/instagram.png"
                                                    width="50px" height="40px"></a>
                                            <a href="https://www.messenger.com/"><img src="asset/messenger.png"
                                                    width="50px" height="40px"></a>
                                        </ul>
                                        <h5>© 2022 All Rights Reserved. PetCo. Animal Clinic.</h5>
                                    </div>
                                </div>
                            </div>
=======
                        <!--Footer-->
                        <footer class=" footer-banner" id="about">
                            <div class="container text">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <ul class="follow">
                                            <h3>Please follow us</h3>

                                            <a href="https://www.facebook.com/"><img src="asset/facebook.png"
                                                    width="50px" height="40px"></a>
                                            <a href="https://www.instagram.com//"><img src="asset/instagram.png"
                                                    width="50px" height="40px"></a>
                                            <a href="https://www.messenger.com/"><img src="asset/messenger.png"
                                                    width="50px" height="40px"></a>
                                        </ul>
                                        <h5>© 2022 All Rights Reserved. PetCo. Animal Clinic.</h5>
                                    </div>
                                </div>
                            </div>
>>>>>>> 705e3a30e3f118d8ad174ee4197788cd46577247


                        </footer>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                            crossorigin="anonymous">
                        </script>
</body>

</html>