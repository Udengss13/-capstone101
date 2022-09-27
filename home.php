<?php require_once "controllerUserData.php"; 
     require('php/connection.php');
   
      $user_id = $_SESSION['user_id'];

      if(!isset($user_id)){
        header('location: login-user.php');
      }

      $start_from = 0; 
  $queryimage = "SELECT * FROM admin_content_homepage"; //You dont need like you do in SQL;
  $resultimage = mysqli_query($db_admin_account, $queryimage);


      $result = $db_admin_account->query("SELECT image_path from admin_carousel_homepage");
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
</head>

<body>

    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-light ; border-bottom border-secondary" style="background: #9FBACD;">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="asset/logopet.png" alt="Logo" style="width:22%; height:8vh" />
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

                        <a class="nav-link active text-white" aria-current="page" href="home.php">HOME</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="product.php">PRODUCT</a>
                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-items">
                        <a href="userprofile.php"><img src=" asset/picon.png" alt="PETCO" style="width: 50px;"></a>
                    </li>
                </div>

                <?php 
                    $select_rows = mysqli_query($con,"SELECT * FROM `cart` WHERE Cart_user_id = '$user_id'") or die ('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                  ?>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="cart.php">CART<span
                                class="badge badge-light mx-1 bg-light text-dark"><?php echo $row_count ?></span></a>

                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="logout-user.php"
                            onclick="return confirm('Are you sure do you want to logout?')">LOGOUT</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
<script>
    cuteToast({
    type: "success", // or 'info', 'error', 'warning'
    message: "Toast Message",
    timer: 5000
    })
</script>


    <div class="container-fluid bg-light">
        <?php 
        $select_user = mysqli_query($con, "SELECT * FROM usertable WHERE id = '$user_id'");
        if(mysqli_num_rows($select_user) > 0){
          $fetch_user = mysqli_fetch_assoc($select_user); 
        };
      ?>
        <p class="text-capitalize text-center">Welcome
            <?php echo $fetch_user['first_name']." ". $fetch_user['last_name']; ?></p>
    </div>


    <!-- <h2 class="text-center text-light pb-4 ">Dynamic boostrap 5 caroussel using php and mysqli</h2> -->
    <div class="container-fluid">
        <div class="row mb-5 ml-0">
            <div class="col-xl-12">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <center>
                                        <h1>PetCo. Animal Clinic
                                        </h1>
                                        <h3>is an Animal Clinic for your Cat and Dog.</h3>
                                    </center>
                                </div>
                                <div class="col-md-8">
                                    <img src="<?= $row['image_path'] ?>" class="img-fluid" width="100%" height="500px">
                                </div>
                            </div>

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
        </div>
    </div>
    </div>

    <!--IMage Section-->
    <section class="flex-sect" id="imagesec">
        <section id="imagesection" class="div_background_light py-4">
            <div class="container-fluid px-5 mt-3">
                <div class="col-lg-12 col-md-12">
                    <div class="justify-content-center row col-md-12 rounded-3">
                        <h3 class="col-12  text-center fw-bolder"
                            style="text-shadow: 3px 1px 3px  lightblue; color: rgb(13, 13, 103)">PETCO ANNOUNCEMENT</h3>
                        <hr>

                        <!--Pictures-->

                        <?php while($rowimage = mysqli_fetch_array($resultimage)) {?>

                        <div class="col-lg-3 col-xs-1 col-sm-5 card mx-3 my-4">

                            <img src="asset/homepage/<?php echo $rowimage['Image_filename'] ?>"
                                class="card-img-top pt-3 img-responsive " style="height:200px; width:100%;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center"><?php echo $rowimage['Image_title'] ?></h5>
                                <h6 class="card-text text-center text-muted">
                                    <?php echo $rowimage['Image_subtitle'] ?>
                                </h6>
                                <p class="card-text d-inline-block text-truncate">
                                    <?php echo $rowimage['Image_body'];?>
                                </p>
                                <div class="mb-4">
                                    <a href="index-view-image.php?id=<?php echo $rowimage['Image_id'] ?>"
                                        class=" btn btn-success w-100">View</a>
                                </div>
                            </div>
                        </div>

                        <?php }?>


                    </div>
                </div>
            </div>
        </section>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>