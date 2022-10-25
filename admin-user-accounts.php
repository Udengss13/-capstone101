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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<title>Admin Accounts</title>
</head>

<body style="background:  #9FBACD;">

    <!--Navbar-->

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class=" col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img
                            src="asset/logopet.png" alt="Saint Jude Logo"
                            style="width: 50px; padding-left: 10px; padding-top: 5px;">
                        <span class="fs-5 d-none d-sm-inline">PETCO. ADMIN</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-speedometer2"></i> <span
                                    class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-person-lines-fill"></i> <span
                                    class="ms-1 d-none d-sm-inline">Accounts</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Admin
                                            Accounts</span></a>
                                </li>
                                <li>
                                    <a href="admin-user-accounts.php" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">User Accounts</span></a>
                                </li>
                                <li>
                                    <a href="admin-user-accounts.php" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Employee Accounts</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Sales</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-archive"></i> <span class="ms-1 d-none d-sm-inline">Pet
                                    Archives</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Pet
                                            Profile</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Pet
                                            Owner</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-pencil-square"></i> <span
                                    class="ms-1 d-none d-sm-inline">Content</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="admin-slider.php" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Slider</span> </a>
                                </li>
                            </ul>
                        <li>
                            <a href="admin-view-orders.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-bag-check"></i> <span class="ms-1 d-none d-sm-inline">Orders</span>
                            </a>
                        </li>

                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="Admin" width="30" height="30"
                                    class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">Charlize</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                aria-labelledby="dropdownUser1">
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


            <!--Search-->
            <div class="col-md-9 col-xl-10 py-3">
                <h3>User Accounts</h3>
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
                                        <td><input name="first_name" readonly class="c-white text-center" type="text"
                                                style="background-color:transparent;border:0;"
                                                value="<?php echo $row['first_name']; ?>">
                                        </td>
                                        <td><input name="middle_name" readonly class="c-white text-center " type="text"
                                                style="background-color:transparent;border:0;"
                                                value="<?php echo $row['middle_name']; ?>">
                                        </td>
                                        <td><input name="last_name" readonly class="c-white text-center " type="text"
                                                style="background-color:transparent;border:0;"
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
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
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


    <script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
    </script>

</body>

</html>