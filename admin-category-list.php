<?php
    require_once "php/user-list-process.php";
    require('php/connection.php');

   //call all Category
  $queryslide = "SELECT * FROM admin_category"; //You don't need a ; like you do in SQL
  $resultslide = mysqli_query($db_admin_account, $queryslide);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/color.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Admin || Category</title>
</head>

<body class="">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg nav_color navbar-dark nav_outline">
        <h3 class=""><img src="asset/logopet.png" alt="Saint Jude Logo"
                style="width: 50px; padding-left: 10px; padding-top: 5px;"><a class="navbar-brand fw-bold c-white"
                href="#" style="padding-left: 15px;">PET CO.</a></h3>
        <button style="margin-right: 20px;" class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end col-6" style="padding-right: 20px;" id="navbarNav">
            <ul class="navbar-nav text-center gap-3" style="padding-left: 10px;">
                <li class="nav-item">
                    <a class="nav-link c-green" href="admin-orders.php">Order</a>
                </li>
                <div class="dropdown">
                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                        Content</button>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="dropdown-item" href="admin-content.php">News</a>
                        </li>
                        <li><a class="dropdown-item" href="admin-quicktips.php">Quicktips</a></li>
                        <li><a class="dropdown-item" href="admin-slider.php">slider</a></li>

                    </ul>
                </div>
                <li class="nav-item">
                    <a class="nav-link c-white bg_nav_menu rounded" href="#">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link c-green rounded" href="admin-menu.php">Product</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link c-green bg_nav rounded" href="admin-dashboard.php">User List</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link c-green" href="admin-login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Button trigger modal -->
    <div>
    <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        ADD
    </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> New Category Name</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->

                <form action="php/category-list-process.php" method="post" class="row gap-2 justify-content-center">
                    <div class="modal-body">
                        <div class="card d-flex justify-content-center">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <label>Category Name:</label>
                                    <input class="col-12" name="title" type="text" placeholder="Enter Category Name"
                                        required>
                                </li>
                                <li class="list-group-item">
                                    <label>Category Details:</label>
                                    <input class="col-12" name="details" type="text"
                                        placeholder="Enter Category Details" required>
                                </li>
                                <!-- Modal footer -->

                            </ul>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" name="submit_category" class="btn btn-outline-success float-end"
                                style="max-width:450px;">Add</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

   



    <!--Displaying Data in table-->
    <div class="div_background_light">
        <div class="table-responsive mt-3 mx-auto" style="width:95%;">
            <table class="table mt-3">
                <thead class="table-dark c-white">
                    <th class="text-center">Category ID</th>
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Category Details</th>
                    <th class="text-center">Delete</th>
                </thead>
                <?php while($rowslide =  mysqli_fetch_array($resultslide)){ ?>
                <tbody>
                    <td class="text-nowrap text-center c-white"><?php echo $rowslide['category_id']; ?></td>
                    <td class="text-nowrap text-center c-white"><?php echo $rowslide['category_name']; ?>
                    </td>
                    <td class="text-nowrap text-center c-white"><?php echo $rowslide['category_details']; ?>
                    </td>
                    <td class="c-red text-center">
                        <!--Edit-->
                        <a href="admin-edit-category.php?updateid=<?php echo $rowslide['category_id'];  ?>"
                            class="text-decoration-none c-green">
                            <button class="btn btn-outline-success mx-2 my-2">Edit</button></a>

                        <!--Delete-->
                        <a href="php/category-list-process.php?id=<?php echo $rowslide['category_id']; ?>"><input
                                type="button" class="btn btn-outline-danger " value="Delete">
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
</body>

</html>