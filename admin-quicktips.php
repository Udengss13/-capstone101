<?php
    require_once "php/user-list-process.php";
    require('php/connection.php');
    

    
    $queryimage = "SELECT * FROM admin_quicktips"; //You don't need a like you do in SQL;
    $resultimage = mysqli_query($db_admin_account, $queryimage);
    
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="icon" href="asset/logopet.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Admin || Quicktips</title>
</head>

<body style="background:  #9FBACD;">

    <!--Navbar-->
    <div class="nav-bar container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">
            <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flex sticky-top">
                <div
                    class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                    <a href="/"
                        class="navbar-brand d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img
                            src="asset/logopet.png" alt="Saint Jude Logo"
                            style="width: 50px; padding-left: 10px; padding-top: 5px;">
                        <span class="navbar-brand">PETCO. ADMIN</span>
                    </a>
                    <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-speedometer2"></i> <span
                                    class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi-person-lines-fill"></i><span
                                    class="ms-1 d-none d-sm-inline">Accounts</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="#">Admin Accounts</a></li>
                                <li><a class="dropdown-item" href="admin-user-accounts.php">User Accounts</a></li>
                                <li><a class="dropdown-item" href="#">Employee Accounts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-sm-0 px-2">
                                <i class="fs-4 bi-table"></i><span class="ms-1 d-none d-sm-inline">Sales</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi-archive"></i><span class="ms-1 d-none d-sm-inline">Pet Archives</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="#">Pet Profile</a></li>
                                <li><a class="dropdown-item" href="#">Pet Owners</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi-pencil-square"></i><span
                                    class="ms-1 d-none d-sm-inline">Content</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="admin-slider.php">Slider</a></li>
                                <li><a class="dropdown-item" href="admin-quicktips.php">Quicktips</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="admin-orders.php" class="nav-link px-sm-0 px-2">
                                <i class="fs-4 bi-bag-check"></i><span class="ms-1 d-none d-sm-inline">Orders</span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="asset/cha.jpg" alt="Admin" width="28" height="28"
                                class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Cha</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="admin-profile.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="admin-login.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col py-3">
                <div class="w3-main">
                    <div class="w3-transparent">

                        <h3 class="text-center c-white py-3">Image Content for Home</h3>
                    </div>
                </div>

                <!--All Content for Image Here-->

                <form action="php/quicktips-image-process.php" method="post" enctype="multipart/form-data"
                    class="row gap-2 justify-content-center">
                    <div class="row justify-content-md-center mb-5">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div class="card d-flex justify-content-center">
                                <div class="card-header">
                                    Upload New Image for Quicktips

                                    <?php if(!empty($messages)){
	                              echo "<div class='alert alert-success'>";
	                                foreach ($messages as $message) {
		                              echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;".$message."<br>";
	                                }
	                                 echo "</div>";
                                    }
                          ?>

                                    <ul class="list-group list-group-flush">


                                        <!--Body-->
                                        <li class="list-group-item">
                                            <div> <label>Information:</label></div>
                                            <textarea name="info" style="height:150px;" required class="col-12"
                                                placeholder="Information"></textarea>
                                        </li>
                                        <!--Choose File-->
                                        <li class="list-group-item">
                                            <input name="photo" class="" id="upload-news" type="file" required>
                                        </li>

                                        <li class="list-group-item">
                                            <!--Add button-->
                                            <button type="submit" name="upload_image_content"
                                                class="btn btn-outline-success float-end"
                                                style="max-width:450px;">Add</button>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                </form>

    <!--Displaying data in table-->
    <div class="div_background_light">
        <div class="table-responsive mt-4 mx-auto" style="width:95%;">
            <table class="table mt-3">
                    <thead class="table-dark c-white">
                        <th>Image ID</th>
                        <th>Information</th>
                        <th>Delete</th>
                    </thead>
                            <?php while($rowimage =  mysqli_fetch_array($resultimage)){ ?>
                            <tbody>
                                <td class="text-nowrap c-white"><?php echo $rowimage['id']; ?></td>
                                <td class="text-nowrap c-white"><?php echo $rowimage['info']; ?></td>

                                <td class="c-red d-flex mt-1">

                                    <a href="admin-edit-quicktips.php?updateid=<?php echo $rowimage['id'];?>">
                                        <span class="btn btn-outline-success mx-2">Edit </span>
                                    </a>

                                    <a href="php/quicktips-image-process.php?id=<?php echo $rowimage['id'];?>"><input
                                            type="button" class="btn btn-outline-danger" value="Delete"></a>
                                </td>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>



            <!--DIVISION -->


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
                crossorigin="anonymous">
            </script>
            <script src="/js/script.js"></script>
</body>

</html>