<?php
    require_once "php/user-list-process.php";
    require('php/connection.php');

    $query = "SELECT * FROM usertable"; //You don't need a like you do in SQL;
    $result = mysqli_query($con, $query);
    

    //this is for search name or id;
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $query = "SELECT * FROM usertable WHERE first_name='$user_id' OR id='$user_id' OR email='$user_id'"; //You don't need a ; like you do in SQL
        $result = mysqli_query($con, $query);
    }else{
        $query = "SELECT * FROM usertable"; //You don't need a ; like you do in SQL
        $result = mysqli_query($con, $query);
    }
?>

<!DOCTYPE html>
<html>
<link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Admn || User Accounts</title>


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


            <!--Search-->
            <!-- <form action="admin-user-accounts.php" method="GET">
                <div class="input-group mx-auto" style="width: 450px;">
                    <span class="input-group-text">Search User</span>
                    <input type="text" required class="form-control" name="id" placeholder="User ID or Name.">
                    <span class="input-group-btn">
                        <button class="btn btn-success" name="search" type="submit"><span
                                class="bi bi-search c-white"></span></button>
                    </span>
                </div>
            </form> -->
        <div class="col py-3">
            <div class="w3-main" >
                <div class="w3-transparent">
                        <h3 class="text-center c-white py-3">User Accounts</h3>
                    </div>
                </div>
            
                <form action="admin-user-accounts.php" method="GET">
                    <div class="input-group mx-auto" style="width: 450px;">
                        <span class="input-group-text">Search User</span>
                        <input type="text" required class="form-control" name="id" placeholder="User ID or Name.">
                        <span class="input-group-btn">
                            <button class="btn btn-success" name="search" type="submit"><span
                                    class="bi bi-search c-white"></span></button>
                        </span>
                    </div>
                </form>

                <!--    <div class="card mt-3"> -->
                    <div class="card-body">
                        <form action="" method="POST">
                            <table class="table table-striped table table-bordered">
                                <thead>
                                    <tr>


                                        <th scope="col">User ID</th>
                                        <th scope="col">First Name</th>
                                         <th scope="col">Last Name</th>
                                        <!--<th  scope="col">Last Name</th> -->
                                        <!-- <th  scope="col">Suffix</th> -->
                                        <th scope="col">Email</th>
                                        <th scope="col">User Level</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php while($row = mysqli_fetch_array($result)){ ?>
                                    <form action="php/user-list-process.php" method="post">
                                        <tr>
                                            <td class="col-sm-1 col-md-2 col-lg-1">

                                                <div class="col"><?php echo $row['id'] ?></div>
                                            </td>
                                            <td class="col-sm-1 col-md-1 col-lg-2">
                                                <div class="col">
                                                    <?php echo $row['first_name']  ?></div>
                                            </td>
                                            <td class="col-sm-1 col-md-1 col-lg-2">
                                                <div class="col">
                                                    <?php echo $row['last_name']  ?></div>
                                            </td>
                                           
                                            <td class=" col-sm-1 col-md-1 col-lg-3">
                                            <div class="col-sm-1">
                                            <?php echo $row['email']; ?>
                                            </td>

                                            <td class=" col-sm-1 col-md-1 col-lg-2">
                                            <div class="col">
                                                Client
                                            <!-- <?php echo $row['email']  ?></div> -->
                                            </td>

                                            <td class=" col-sm-1 col-md-1 col-lg-1 ">
                                            <div class="col-sm-1 text-success"><?php  if( $row['status']="verified"){
                                                echo " Verified";
                                                    }; ?></div>
                                               <div class="col-sm-1 text-danger"><?php  if( $row['status']!="verified"){
                                                    echo "Not Verified";
                                                        }; ?></div>

                                            </td>
                                            <td class="c-white text-nowrap text-center">
                                                <button data-bs-toggle="modal"
                                                    data-bs-target="#id<?php echo $row['id'];?>" type="button"
                                                    class="btn btn-outline-danger">Delete</button>
                                            </td>

                                            <!-- Modal -->
                                            <div class="modal fade" id="id<?php echo $row['id'] ;?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="id<?php echo $row['id'] ;?>">
                                                                Confirmation:
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <label class="text-center mb-2 mx-auto">Enter Password
                                                                before delete
                                                                <span
                                                                    class="fw-bold"><?php echo $row['first_name']; ?>!</span></label>
                                                            <input type="password" class="form-control" name="password"
                                                                placeholder="Password" aria-label="Password"
                                                                aria-describedby="addon-wrapping" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                name="delete_user">Submit</button>
                                                        </div>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="id<?php echo $row['id'] ;?>"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="id<?php echo $row['id'] ;?>">
                                                                        Confirmation:
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <label class="text-center mb-2 mx-auto">Enter
                                                                        Password
                                                                        before delete
                                                                        <span
                                                                            class="fw-bold"><?php echo $row['first_name']; ?>!</span></label>
                                                                    <input type="password" class="form-control"
                                                                        name="password" placeholder="Password"
                                                                        aria-label="Password"
                                                                        aria-describedby="addon-wrapping" required>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="delete_user">Submit</button>
                                                                </div>
                                                            </div>

                                        </tr>
                                    </form>
                                    <?php } ?>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="id<?php echo $row['id'] ;?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id<?php echo $row['id'] ;?>">
                        Confirmation:
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <label class="text-center mb-2 mx-auto">Enter Password
                        before delete
                        <span class="fw-bold"><?php echo $row['first_name']; ?>!</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Password"
                        aria-label="Password" aria-describedby="addon-wrapping" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="delete_user">Submit</button>
                </div>
            </div>
        </div>
    </div>




    <!-- DIVISION -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="/js/script.js"></script>
</body>

</html>