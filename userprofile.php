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
<?php
$users = "SELECT * FROM usertable where id='$user_id'"; //You dont need like you do in SQL;
$userresult = mysqli_query($con, $queryimage);
?>
<?php 
                    $select_user = mysqli_query($con, "SELECT * FROM usertable WHERE id = '$user_id'");
                    if(mysqli_num_rows($select_user) > 0){
                    $fetch_user = mysqli_fetch_assoc($select_user); 
                    };
                ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f8f3c8a43b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>


    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
    </script>
</head>

<body>
    <!--Navigation Bar-->
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg">
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

                        <a class="nav-link active text-white mt-2" aria-current="page" href="home.php">HOME</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white mt-2" href="product.php">SHOP</a>
                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a href="userprofile.php" class="nav-link text-white"><img src=" asset/picon.png" alt="PETCO"
                                style="width: 40px;"></a>
                    </li>
                </div>

                <?php 
                    $select_rows = mysqli_query($con,"SELECT * FROM `cart` WHERE Cart_user_id = '$user_id'") or die ('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                  ?>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="cart.php"><img src=" asset/cart.png" alt="PETCO"
                                style="width: 40px;"><span
                                class="badge badge-light mx-1 bg-light text-dark"><?php echo $row_count ?></span></a>

                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link  text-white mt-2" href="logout-user.php"
                            onclick="return confirm('Are you sure do you want to logout?')">LOGOUT</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>

    <div class="container-fluid ">
        <div class="container ">
            <!--1st row-->
            <div class="row mt-4">
                <div class="col">
                    <h2>My Profile</h2>

                </div>
                <div class="col-6 mt-2">
                    <a href="user-edit-profile.php?updateid=<?php echo $fetch_user['id'];?>">
                        <span class="btn btn-primary mx-2">Edit Profile <i class="fa-solid fa-pen-to-square"></i></span>
                    </a>

                    <a href="user-edit-profiles.php?updateid=<?php echo $fetch_user['id'];?>">
                        <span class="btn btn-success mx-2">Message <i class="fa-solid fa-message"></i></span>
                    </a>
                    
                   
                    <a href="#imagesec">
                        <span class="btn btn-primary mx-2"> My Pet <i class="fa-solid fa-paw"></i></span>
                    </a>
                    <a href="calendar.php">
                        <span class="btn btn-primary mx-2">  Appointment <i class="fa-solid fa-paw"></i></span>
                    </a>

                </div>
            </div>
            
        </div>
    </div>
    <hr>
    

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 ">

                <!-- <p class="text-capitalize text-center">Welcome
                    <?php echo $fetch_user['first_name']." ". $fetch_user['last_name']; ?></p> -->
                <div class="col profilebg ">
                    <!-- <div class="card mb-4">
                            <div class="card-body"> -->
                    <div class="row">
                        <!-- <div class="col-sm-4 labels"> -->
                        <img src="asset/profiles/<?php echo $fetch_user['image_filename']?>" class="rounded-circle" alt="Logo" style="width:40%; height:17vh" />
                        <!-- </div> -->
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">First Name:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['first_name']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Middle Name:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['middle_name']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Last Name:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['last_name']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Suffix:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['suffix']; ?></p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Contact Number:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['contact']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Address:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['address']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Email:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['email']; ?></p>
                        </div>
                    </div>
                    <!-- </div>
                        </div> -->
                </div>

            </div>
           
        </div>
    </div>

    <!-- <div id='calendar'></div> -->
    <hr>
    <!--ANNOUNCEMENT-->
    <section class="flex-sect" id="imagesec">
    <div class="container mt-5">
        <div class="row">
            <div class="col ">
                <?php 
                    $select_pet = mysqli_query($con, "SELECT * FROM pettable WHERE user_id = '$user_id'");
                    if(mysqli_num_rows($select_user) > 0){
                    $fetch_user = mysqli_fetch_assoc($select_pet); 
                    };
                ?>

                <div class="col-lg-5 profilebg">
                    <!-- <div class="card mb-4">
                            <div class="card-body"> -->
                    <div class="row">
                        <!-- <div class="col-sm-4 labels"> -->
                        <img src="asset/profile/pets.png" alt="Logo" style="width:40%; height:17vh" />
                        <!-- </div> -->
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Pet Name:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['petname']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Pet Type:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['pettype']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Pet Breed:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['petbreed']; ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Pet Sex:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['petsex']; ?></p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-4 labels">
                            <p class="mb-0">Pet Birthday:</p>
                        </div>
                        <div class="col-sm-8">
                            <p class="c-blue mb-0"><?php echo $fetch_user['petbday']; ?></p>
                        </div>
                    </div>
                    <hr>

                    <!-- </div>
                        </div> -->
                </div>

            </div>
        </div>
    </div>
    </section>
    <!--Footer-->
    <footer class=" footer-banner mt-5" id="about">
        <div class="container text">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="follow">
                        <h3>Please follow us</h3>

                        <a href="https://www.facebook.com/"><img src="asset/facebook.png" width="50px"
                                height="40px"></a>
                        <a href="https://www.instagram.com//"><img src="asset/instagram.png" width="50px"
                                height="40px"></a>
                        <a href="https://www.messenger.com/"><img src="asset/messenger.png" width="50px"
                                height="40px"></a>
                    </ul>
                    <h5>© 2022 All Rights Reserved. PetCo. Animal Clinic.</h5>
                </div>
            </div>
        </div>


    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>