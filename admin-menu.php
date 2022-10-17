<?php
    require('php/connection.php');

   //call all Menu
  $querymenu = "SELECT * FROM admin_menu"; //You don't need a ; like you do in SQL
  $resultmenu = mysqli_query($db_admin_account, $querymenu);
 
   //call all Category
  $querycategory = "SELECT * FROM admin_category"; //You don't need a ; like you do in SQL
  $resultcategory = mysqli_query($db_admin_account, $querycategory);
?>

<!DOCTYPE html>

<meta charset="UTF-8">
<link rel="icon" href="asset/logopet.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Admin || Category</title>
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

    <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
        <h3 class=""><img src="asset/logopet.png" alt="Saint Jude Logo"
                style="width: 50px; padding-left: 10px; padding-top: 5px;"><a class="navbar-brand fw-bold c-DarkBlue"
                href="#" style="padding-left: 15px;">PET CO.</a></h3>
        <ul class="navbar-nav text-center gap-1" style="padding-left: 5px;">
            <a href="#" class="w3-bar-item w3-button">Order</a>
            </li>

            <div class="dropdown">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                    Content</button>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="dropdown-item" href="admin-content.php">Announcement and Promos</a>
                    </li>
                    <li><a class="dropdown-item" href="admin-quicktips.php">Quicktips</a></li>
                    <li><a class="dropdown-item" href="admin-slider.php">slider</a></li>

                </ul>


                <a href="admin-category-list.php" class="w3-bar-item w3-button">Category</a>
                </li>


                <a class="w3-bar-item w3-button" href="admin-menu.php">Product</a>
                </li>


                <a class="w3-bar-item w3-button" href="#">User List</a>
                </li>


                <a class="w3-bar-item w3-button" href="admin-login.php">Logout</a>
                </li>
                <div class="social_media">
                    <a href="https://www.facebook.com/"><img src="asset/facebook.png" width="35px" height="40px"></a>
                    <a href="https://www.instagram.com//"><img src="asset/instagram.png" width="35px" height="40px"></a>
                    <a href="https://www.messenger.com/"><img src="asset/messenger.png" width="35px" height="40px"></a>
        </ul>
    </div>

    <!--Content of Menu-->
    <div class="w3-main" style="margin-left:200px">
        <div class="w3-black">
            <button class="w3-button w3-blue w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1 class="text-center c-white py-3">Add New Product</h1>
            </div>
        </div>





        <!--Content of Menu-->
        <div class="container-xl-fluid mt-5 mb-5">
            <div class="px-3">
                <h4 class="text-center c-white py-3">All Products</h4>

                <!-- Modal -->


      <div class="d-flex flex-row-reverse">
  <button type="button" class="btn bg-button" style="background: #EA6D52; border-radius: 10px;" data-bs-toggle="modal" data-bs-target="#myModal">
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
                                                <input name="price" class="col-md-5" type="number" min="0" step="0.01"
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
                                                <button type="submit" name="news"
                                                    class="btn btn-outline-success float-end"
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
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </thead>
                            <?php while($rowmenu =  mysqli_fetch_array($resultmenu)){ ?>
                            <tbody>
                                <!-- <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_id']; ?></td> -->
                                <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_name']; ?></td>
                                <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_description']; ?></td>
                                <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_price']; ?></td>
                                <td class="text-nowrap c-white"><?php echo $rowmenu['Menu_category']; ?></td>
                                <td class="text-nowrap c-white">
                                    <a href="Petkoproj/<?php echo $rowmenu['Menu_dir']; ?>" class="fancybox "
                                        rel="ligthbox">
                                        <img src=" asset/menu/<?php echo $rowmenu['Menu_filename']; ?> "
                                            class="zoom img-thumbnail img-responsive images_menu"></a>
                                </td>

                                <td class=" c-red ">
                                    <!-- Edit -->
                                    <a href="admin-edit-menu.php?editid=<?php echo $rowmenu['Menu_id']; ?>"
                                        class="text-decoration-none c-green">
                                        <button class="btn btn-outline-success mx-2 my-2">Edit</button></a>

                                    <!--  Delete -->
                                    <a href="php/menu-process.php?id=<?php echo $rowmenu['Menu_id'];?>"><input
                                            type="button" class="btn btn-outline-danger" value="Delete"></a>
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