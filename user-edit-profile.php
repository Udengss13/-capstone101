<?php
    
    require_once "controllerUserData.php"; 
     require('php/connection.php');
   
      $user_id = $_SESSION['user_id'];

      if(!isset($user_id)){
        header('location: login-user.php');
      }

   
    //This is for message
      if(isset($_SESSION['update_changes'])){
          $applychanges = $_SESSION['update_changes'];
          unset($_SESSION['update_changes']);
      }
      else{
          $applychanges="";
      }
  
  
    
    $queryimage = "SELECT * FROM admin_content_homepage"; //You don't need a like you do in SQL;
    $resultimage = mysqli_query($db_admin_account, $queryimage);


    if (isset($_GET['updateid'])){
      $id = $_GET['updateid'];

      $editprofile = "SELECT * FROM usertable WHERE id = '$user_id'";
      $result = mysqli_query($con, $editprofile);
      $rowimageEdit = mysqli_fetch_array($result, MYSQLI_ASSOC);
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Edit Profile</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8f3c8a43b.js" crossorigin="anonymous"></script>


    <!-- styless -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">

<body class="">


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

    <!--All Content Here-->
    <div class="container  mt-5">
    <!-- <center><img src="asset/logopet.png" alt="Logo" style="position: absolute; z-index: -1;" /></center> -->


        <h4 class="text-center c-white py-3">Edit Profile </h4>

        <form action="php/profile-edit-process.php" method="post">
            <div class="row justify-content-md-center mb-5">
                <!-- <div class="col-lg-7 col-md-6 col-sm-12"> -->
                <!-- <div class="card d-flex justify-content-center"> -->
                <!-- <div class="card-header">
                            Edit Information for Homepage
                        </div> -->
                <!--Success Message-->
                <?php if($applychanges!=""){?>
                <div class="alert alert-primary alert-dismissible fade show mt-3 mx-auto justify-content-md-center mb-2" role="alert"
                    style="width: 90%;">
                    <strong>Apply Changes Successfully!</strong> <?php echo $applychanges; ?>.
                </div>
                <?php } ?>
                <!-- <ul class="list-group "> -->
                <!--NAME-->
                <!-- <div class="row justify-content-md-center mb-5">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card  justify-content-center"> -->
                            <div class="row justify-content-md-center mb-2">
                                <label class="col-md-2 control-label ">First Name:</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <input name="id" class="col-12" type="text"
                                            value="<?php echo $rowimageEdit['id'];    ?>" hidden>
                                        <!-- <span class="input-group-addon"><i class="fa-solid fa-user ff"></i></span> -->
                                        <input name="fname" class="form-control"
                                            type="text" value="<?php echo $rowimageEdit['first_name'];   ?>" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="row  justify-content-md-center mb-2">
                                <label class="col-md-2 control-label">Middle Name</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon ff"><i
                                                class="glyphicon glyphicon-user fa-5x "></i></span>
                                        <input name="mname" class="form-control" type="text"
                                            value="<?php echo $rowimageEdit['middle_name'];   ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center mb-2">
                                <label class="col-md-2 control-label">Last Name</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon ff"><i
                                                class="glyphicon glyphicon-user fa-5x "></i></span>
                                        <input name="lname" class="form-control" type="text"
                                            value="<?php echo $rowimageEdit['last_name'];   ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center mb-2">
                                <label class="col-md-2 control-label">Suffix</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon ff"><i
                                                class="glyphicon glyphicon-user fa-5x "></i></span>
                                        <input name="suffix" class="form-control" type="text"
                                            value="<?php echo $rowimageEdit['suffix'];   ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center mb-2">
                                <label class="col-md-2 control-label">Contact</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon ff"><i
                                                class="glyphicon glyphicon-user fa-5x "></i></span>
                                        <input name="contact" class="form-control" type="text"
                                            value="<?php echo $rowimageEdit['contact'];   ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center mb-2">
                                <label class="col-md-2 control-label">Address</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon ff"><i
                                                class="glyphicon glyphicon-user fa-5x "></i></span>
                                        <input name="address" class="form-control" type="text"
                                            value="<?php echo $rowimageEdit['address'];   ?>" required>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <!--Back-->
                                <div class="col-6">
                                    <button type="submit" name="update_profile"
                                        class="btn btn-outline-success float-end"
                                        style="max-width:450px;">Save <i class="fa-solid fa-floppy-disk"></i></button>
                                </div>
                                <div class="col-2">
                                    <a href="userprofile.php"><span
                                            class="btn btn-outline-danger mx-2 float-end">Back <i class="fa-sharp fa-solid fa-arrow-left"></i></span></a>
                                </div>
                                <!--Add button-->

                            </div>
                            <!-- </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="/js/script.js"></script>
</body>

</html>