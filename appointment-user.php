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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>

    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f8f3c8a43b.js" crossorigin="anonymous"></script>
</head>

<body>
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
    <div class="container-xl-fluid mt-5 mb-5">
        <div class="px-3">
            <h4 class="text-center c-white py-3">Appointment History</h4>

            <!-- Modal -->

            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn bg-button"
                    style="background: #EA6D52; border-radius: 15px; border-width: 7px;" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"><i class="fa-solid fa-circle-plus "></i>
                    Add


                </button>
            </div>


            <!-- The Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add products</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="php/menu-process.php" method="post" enctype="multipart/form-data"
                                class="row gap-2 justify-content-center">

                                <div class="justify-content-center">
                                    <div class="card-header">
                                        Product Information
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <label>Product Name:</label>
                                            <input name="title" class="col-12" type="text" required>
                                        </li>
                                        <li class="list-group-item">
                                            <label>Product Description:</label>
                                            <textarea name="paragraph" style="height:100px;" required
                                                class="col-12"></textarea>
                                        </li>
                                        <li class="list-group-item">
                                            <label>Price:</label>
                                            <input name="price" class="col-12" type="number" min="0" step="0.01"
                                                required>
                                        </li>
                                        <li class="list-group-item">
                                            <label>Category:</label>

                                            <div class="input-group flex-nowrap">
                                                <select class="form-select form-select-md" name="category_name"
                                                    required>
                                                    <option value="">Select Category</option>
                                                    <?php while($rowcategory =  mysqli_fetch_array($resultcategory)){ ?>
                                                    <option value=" <?php echo $rowcategory['category_name']; ?>">
                                                        <?php echo $rowcategory['category_name']; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>

                                            </div>

                                        </li>

                                        <li class="list-group-item">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="upload-news"
                                                    name="photo" required>
                                            </div>
                                            <!-- <input name="photo" class="col-md-6 c-white" id="upload-news" type="file" required> -->
                                        </li>
                                        <li class="list-group-item">
                                            <button type="button" class="btn btn-danger float-end"
                                                style="margin-left: 5px;" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="news" class="btn btn-outline-success float-end"
                                                style="max-width:450px;">Confirm</button>


                                        </li>

                                    </ul>


                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>


            <div class="container mt-4">
                <table class="table table-striped table table-bordered">
                    <!-- <div class="row"> -->
                    <thead>
                        <tr>
                            <div class="row">

                                <th scope="col" style="text-align: center;">
                                    <div class="col">Appointment No.</div>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <div class="col">Service Type</div>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <div class="col">Pet Appoitted</div>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <div class="col">Data</div>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <div class="col">Time</div>
                                </th>
                                <th scope="col" style="text-align: center;">
                                    <div class="col">Status</div>
                                </th>
                        </tr>
                    </thead>
                    <!-- <?php while($rowmenu =  mysqli_fetch_array($resultmenu)){ ?> -->
                    <tr>
                        <td class="col-1" style="text-align: center;">
                            <div class="col">
                                <a href="Petkoproj/<?php echo $rowmenu['Menu_dir']; ?>" class="fancybox "
                                    rel="ligthbox">
                                    <img src=" asset/menu/<?php echo $rowmenu['Menu_filename']; ?> "
                                        class="zoom img-thumbnail img-responsive images_menu"></a>
                            </div>
                        </td>
                        <td class="col-2" style="text-align: center;">
                            <div class="col">
                                <?php echo $rowmenu['Menu_name']; ?></div>
                        </td>
                        <td>
                            <div class="col">
                                <?php echo $rowmenu['Menu_description']; ?></div>
                        </td>
                        <td class="col-1" style="text-align: center;">
                            <div class="col">
                                <?php echo $rowmenu['Menu_price']; ?></div>
                        </td>
                        <td class="col-1" style="text-align: center;">
                            <div class="col">
                                <?php echo $rowmenu['Menu_category']; ?></div>
                        </td>
                        <td class="col-1">
                            <div class="col">
                                <a href="employee-edit-menu.php?editid=<?php echo $rowmenu['Menu_id']; ?>">


                                    <i class="fa-solid fa-pen" style="font-size:25px; padding: 10px"></i>
                                </a>

                                <a href="php/menu-process.php?id=<?php echo $rowmenu['Menu_id'];?>"
                                    onclick="return confirm('Are you sure you want to delete?')">
                                    <i class="fa-solid fa-trash-can"
                                        style="font-size:25px; color:red; padding: 10px"></i>

                                </a>
                            </div>

                        </td>

                        <!-- <?php } ?> -->

</body>

</html>