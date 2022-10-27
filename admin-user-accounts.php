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
<meta charset="UTF-8">
<link rel="icon" href="asset/logopet.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
                            <img src="https://github.com/mdo.png" alt="Admin" width="28" height="28"
                                class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Cha</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
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
                    <div class="w3-black">
                        <h3 class="text-center c-white py-3">User Accounts</h3>
                    </div>
                </div>

                <!--Search-->
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
                <!-- <main class="row overflow-auto"> -->
                <div class="div_background_light ">
                    <div class="w3-main">
                        <div class="table-responsive mt-4 mx-auto" style="width:95%;">
                            <table class="table mt-3 mb-5">

                                <thead class="table-dark">
                                    <th class="text-nowrap text-center">User ID</th>
                                    <th class="text-nowrap text-center ">First Name</th>
                                    <th class="text-nowrap text-center">Middle Name</th>
                                    <th class="text-nowrap text-center">Last Name</th>
                                    <th class="text-nowrap text-center">Suffix</th>
                                    <th class="text-nowrap text-center">Email</th>
                                    <th class="text-nowrap text-center">Status</th>
                                    <th class="text-nowrap text-center">Action</th>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_array($result)){ ?>
                                    <form action="php/user-list-process.php" method="post">
                                        <tr>
                                            <td><input name="user_id" readonly class="c-white text-center " type="text"
                                                    style="background-color:transparent;border:0;"
                                                    value="<?php echo $row['id']; ?>">
                                            </td>
                                            <td><input name="first_name" readonly class="c-white text-center"
                                                    type="text" style="background-color:transparent;border:0;"
                                                    value="<?php echo $row['first_name']; ?>">
                                            </td>
                                            <td><input name="middle_name" readonly class="c-white text-center "
                                                    type="text" style="background-color:transparent;border:0;"
                                                    value="<?php echo $row['middle_name']; ?>">
                                            </td>
                                            <td><input name="last_name" readonly class="c-white text-center "
                                                    type="text" style="background-color:transparent;border:0;"
                                                    value="<?php echo $row['last_name']; ?>">
                                            </td>
                                            <td><input name="suffix" readonly class="c-white text-center " type="text"
                                                    style="background-color:transparent;border:0;"
                                                    value="<?php echo $row['suffix']; ?>">
                                            </td>
                                            <td><input name="email" readonly class="c-white text-center " type="text"
                                                    style="background-color:transparent;border:0; "
                                                    value="<?php echo $row['email']; ?>">
                                            </td>
                                            <td>
                                                <input name="status" readonly class=" text-center " type="text"
                                                    style="background-color:transparent;border:0; color: Green;" value="<?php  if( $row['status']="verified"){
                                echo " Verified";
                                    }; ?>">
                                                <input name="status" readonly class=" text-center " type="text"
                                                    style="background-color:transparent;border:0; color: red;" value="<?php  if( $row['status']!="verified"){
                                 echo "Not Verified";
                                    }; ?>">

                                            </td>
                                            <td class="c-white text-nowrap text-center"><button data-bs-toggle="modal"
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


        <!-- DIVISION -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
        <script src="/js/script.js"></script>
</body>

</html>