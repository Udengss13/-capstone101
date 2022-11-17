<?php require_once "controllerUserData.php"; 
     require('php/connection.php');
   
      $user_id = $_SESSION['user_id'];
      $queryimage = "SELECT * FROM usertable where id= $user_id";
      $resultimage = mysqli_query($con, $queryimage);

      if(mysqli_num_rows($resultimage) > 0){
        $fetch = mysqli_fetch_assoc($resultimage); 
        };

     

      if(isset($user_id) and $fetch['user_level']=='employee'){
        header('location:index.php');

      }


      if(!isset($user_id) ){
        header('location: index.php');
      }

      $start_from = 0; 
        $queryimage = "SELECT * FROM admin_content_homepage"; //You dont need like you do in SQL;
        $resultimage = mysqli_query($db_admin_account, $queryimage);


      $result = $db_admin_account->query("SELECT image_path from admin_carousel_homepage");
?>

<?php
  $quicktipsquery = "SELECT * FROM `admin_quicktips`"; //You dont need like you do in SQL;
  $quicktipsresult = mysqli_query($db_admin_account, $quicktipsquery);

  $queryservice = "SELECT * FROM `service`"; //You don't need a ; like you do in SQL
  $resultservices = mysqli_query($con, $queryservice);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <script src="cute-alert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>




<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="asset/logopet.png" alt="Logo" style="width:22%; height:8vh" />
                <span style="text-shadow: 2px 2px 2px  rgba(49, 44, 44, 0.767);" class="text-white"><b>PETKO ANIMAL
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

                        <a class="nav-link  text-white mt-3 bg-primary" aria-current="page" href="home.php">HOME</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="#about">ABOUT US</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link text-white dropdown-toggle mt-3" href="#" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">SERVICES</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php while($row =  mysqli_fetch_array($resultservices)){ ?>
                                <li><a class="dropdown-item" href="#"
                                        value=" <?php echo $row['service_name']; ?>"><?php echo $row['service_name']; ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </li>
                </div>
                <!-- <div class="input-group ">
                    <select class="form-select form-select-md"  name="category_name" required> sasasasa
                        <option value="">Select Category</option>
                        <?php while($row =  mysqli_fetch_array($resultservices)){ ?>
                        <option value=" <?php echo $row['service_name']; ?>">
                            <?php echo $row['service_name']; ?>
                        </option>
                        <?php } ?>
                    </select>

                </div> -->

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3" href="product.php">SHOP</a>
                    </li>
                </div>

                <!-- <div class="text-nowrap">
                    <li class="nav-item">
                        <a href="userprofile.php" class="nav-link text-white"><img src=" asset/picon.png" alt="PETCO"
                                style="width: 40px;"></a>
                    </li>
                </div> -->

                <?php 
                    $select_rows = mysqli_query($con,"SELECT * FROM `cart` WHERE Cart_user_id = '$user_id'") or die ('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                  ?>
                <div class="text-nowrap">
                    <li class="nav-item mt-3">

                        <a class="nav-link text-white" href="#imagesec">PET GALLERY</a>

                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3 " href="cart.php">CART
                        <?php if($row_count>0){ ?> <span
                                class="badge badge-light mx-1 bg-light text-dark"><?php echo $row_count ?></span><?php } ?>
                            
                            </a>

                    </li>
                </div>
                <?php 
                        $selectMessages = mysqli_query($con,"SELECT * FROM `messages` WHERE employee_id = '$user_id' AND seen = 0 AND sender_id != $user_id") or die ('query failed');
                        $count_message = mysqli_num_rows($selectMessages);
                    if(isset($user_id)){
                     ?>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white mt-3 " href="messages.php">MESSAGE
                            <?php if($count_message>0){ ?> <span
                                class="badge badge-light mx-1 bg-danger text-light"><?php echo $count_message ?></span><?php } ?>
                        </a>

                    </li>
                </div>
                <?php } ?>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <?php 
                            $select_user = mysqli_query($con, "SELECT * FROM usertable WHERE id = '$user_id'");
                            if(mysqli_num_rows($select_user) > 0){
                            $fetch_user = mysqli_fetch_assoc($select_user); 
                            };
                        ?>
                        <!-- <p class="nav-link text-white">
                            <?php echo $fetch_user['first_name']." ". $fetch_user['last_name']; ?></p> -->
                    </li>
                </div>
                <div class="dropdown mb-2 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1 ">

                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="asset/profiles/<?php echo $fetch_user['image_filename']?>" alt="user"
                            style=" margin-left: 10px" width="28" height="28" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-2"><?php echo $fetch_user['first_name']?></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">My Orders</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="userprofile.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout-user.php"
                                onclick="return confirm('Are you sure do you want to sign out?')">Sign out</a></li>
                    </ul>
                </div>
                <!-- <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link  text-white mt-2" href="logout-user.php"
                            onclick="return confirm('Are you sure do you want to logout?')">LOGOUT</a>
                    </li>
                </div> -->
            </ul>
        </div>
    </nav>
    <!-- 
    <div style="height: 100px;">
  <button onclick="fireSweetAlert()">Show sweet alert example</button>
</div>
<script>

  function fireSweetAlert() {
      Swal.fire(
          'Good job!',
          'You clicked the button!',
          'success'
      )
  } -->



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
                                class="card-img-top img-responsive" style="height:400px; width:100%;">

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
    <section class="flex-sect" id="about" style="background-image: url('asset/TransparentBG.png');">
        <section id="imagesection" class="div_background_light py-4">
            <div class="container-fluid px-5">
                <div class="col-lg-12 col-md-12">
                <div class="justify-content-center row col-md-12 rounded-3">
                                            <h3 class="col-12  text-center fw-bold"
                                                style="color: Dark Gray">
                                                ABOUT US</h3>
                                            <hr>
                        </div>
                        <div class="row box" style="height:300px;">
                            <h4 style= "font-size:1.7vw; color: white;  background: rgba(128, 128, 128, 0.395);">PetCo. Animal Clinic was established in June 2021, and they started offering services in their Grand Opening last July 3, 2021.
                             Mr. Karl Ken Sto owned it. Domingo. It started with just an Idea of having a Pet Shop because he has a friend who is a Veterinarian, and he’s the one injecting Mr. Sto. Domingo’s pets. He also sees that some people around their area have to go too far to find an accessible Pet Clinic, 
                             and that is where they started building the PetCo. Their intention to provide an accessible Pet Clinic around their area is why their ideas turned into a Clinic that offers many pet services. The PetCo. Animal Clinic is currently residing at 389 Parada, Sta. Maria, Bulacan, their main branch. 
                             PetCo. Animal Clinic specializes in Vaccination, Consultation, Confinement, Surgery, Pet Supplies, etc., for cats and dogs only.</h4>
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
                                                    <!-- <h6 class="card-text text-center text-muted">
                                    <?php echo $rowimage['Image_subtitle'] ?>
                                </h6>
                                <p class="card-text d-inline-block text-truncate">
                                    <?php echo $rowimage['Image_body'];?>
                                </p> -->
                                                    <div class="mb-4">
                                                        <a href="user-view-image.php?id=<?php echo $rowimage['Image_id'] ?>"
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
                        <footer class="footer-banner" id="about">
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


                        </footer>



                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                            crossorigin="anonymous">
                        </script>
</body>

</html>