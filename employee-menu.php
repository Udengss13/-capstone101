<?php
    require('php/connection.php');

   //call all Menu
  $querymenu = "SELECT * FROM employee_menu"; //You don't need a ; like you do in SQL
  $resultmenu = mysqli_query($db_admin_account, $querymenu);
 
   //call all Category
  $querycategory = "SELECT * FROM admin_category"; //You don't need a ; like you do in SQL
  $resultcategory = mysqli_query($db_admin_account, $querycategory);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8f3c8a43b.js" crossorigin="anonymous"></script>

    <title>Employee Products</title>
</head>
<style>
@media only screen and (min-width:1115px) {
    .images_menu {
        width: 80%;
        height: 10vh;
    }
}
</style>


<body style="background:  #9FBACD;">

    <!--Navbar-->

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
                        <a class="nav-link text-white  " style="border-radius:10px;" aria-current="page"
                            href="employee-dashboard.php">HOME</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white bg-primary" href="shop.php">Products</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="appointments.php">Appointments</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="messages.php">Messages</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">

                        <a class="nav-link text-white" href="employee-dashboard.php">My Profile</a>

                    </li>
                </div>
                <!-- <div class=" text-white">
         <?php echo  date("m/d/y") . "<br>"; ?>
       </div> -->
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="employee.php">Log-out</a>
                    </li>
                </div>


            </ul>
        </div>
    </nav>


    <!--Content of Menu-->
    <div class="container-xl-fluid mt-5 mb-5">
        <div class="px-3">
            <h4 class="text-center c-white py-3">All Products</h4>

            <!-- Modal -->

            <div class="d-flex flex-row-reverse">
                <button type="button" class="btn bg-button"
                    style="background: #EA6D52; border-radius: 15px; border-width: 7px;" data-bs-toggle="modal"
                    data-bs-target="#myModal">
                    Add


                </button>
            </div>
            

            <!-- The Modal -->
            <div class="modal" id="myModal">
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

                                <div class="card d-flex justify-content-center">
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
                                            <button type="submit" name="news" class="btn btn-outline-success float-end"
                                                style="max-width:450px;">Confirm</button>
                                        </li>
                                    </ul>


                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>



            <!--Displaying Data -->
            <div class="div_background_light">
                <div class="table-responsive mt-4 mx-auto" style="width:95%;">
                    <table class="table mt-3">
                        <thead class="table-dark c-white">
                            <!-- <th> ID</th> -->
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Product Type</th>
                            <th>Action</th>

                        </thead>
                        <?php while($rowmenu =  mysqli_fetch_array($resultmenu)){ ?>
                        <tbody>
                            <td class="text-nowrap c-white">
                                <a href="Petkoproj/<?php echo $rowmenu['Menu_dir']; ?>" class="fancybox "
                                    rel="ligthbox">
                                    <img src=" asset/menu/<?php echo $rowmenu['Menu_filename']; ?> "
                                        class="zoom img-thumbnail img-responsive images_menu"></a>
                            </td>
                            <!-- <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_id']; ?></td> -->
                            <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_name']; ?></td>
                            <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_description']; ?></td>
                            <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_price']; ?></td>
                            <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_category']; ?></td>


                            <td class=" c-red ">
                                <!-- Edit -->
                                <a href="employee-edit-menu.php?editid=<?php echo $rowmenu['Menu_id']; ?>"
                                    class="text-decoration-none c-green">


                                    <i class="fa-solid fa-pen" style="font-size:25px; padding: 10px"></i>

                                    </button></a>


                                <!--  Delete -->
                                <a href="php/menu-process.php?id=<?php echo $rowmenu['Menu_id'];?>">
                                    <i class="fa-solid fa-trash-can"
                                        style="font-size:25px; color:red; padding: 10px"></i>
                                </a>
                            </td>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="/js/script.js"></script>
    <script src="js/gallery_menu.js"></script>
</body>

</html>