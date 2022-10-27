<?php require_once "controllerUserData.php"; 
     require('php/connection.php');
     
    //GET USER ID IN REGISTRATION
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
      header('location: login-user.php');
    }
?>
<?php
  //This is for calling the informaiton of user in fields.
    $sqlInfo = mysqli_query($con, "SELECT * FROM order WHERE order_user_id = '$user_id'");
?>



<!--When Click ORDER NOW!-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin||Orders</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap body">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img
                            src="asset/logopet.png" alt="Saint Jude Logo"
                            style="width: 50px; padding-left: 10px; padding-top: 5px;">
                        <span class="fs-5 d-none d-sm-inline m-1">PETCO. ADMIN</span>
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
                            <a href="admin-orders.php" class="nav-link px-0 align-middle">
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



            <div class="col-auto col-md-9 col-xl-10 mt-5 body">
                <!-- <div class="container mt-4 box"> -->
                <!-- <div class="div_background_dark "> -->
                    <form action="" method="POST">
                        <table class="table table-striped table table-bordered">
                            <!-- <div class="row"> -->
                            <thead style="background: black; color: white;">
                                <tr>

                                    <th scope="col" class="div_background_dark ">
                                        <div class="col">Name</div>
                                    </th>
                                    <th scope="col">
                                        <div class="col">Email</div>
                                    </th>
                                    <th scope="col">
                                        <div class="col">Address</div>
                                    </th>
                                    <th scope="col">
                                        <div class="col">Contact No.</div>
                                    </th>
                                    <th scope="col">
                                        <div class="col">Status</div>
                                    </th>
                                    <th scope="col">
                                        <div class="col">Action</div>
                                    </th>
                                </tr>
                            </thead>
                            <!-- </div> -->
                            <tbody>
                                <?php 
                                      $i = 1;
                                      $order_query = mysqli_query($con, "SELECT * FROM `order` ORDER BY `order`.`id` DESC " );
                                      
                                      if(mysqli_num_rows($order_query) > 0){
                                        while($row = mysqli_fetch_assoc($order_query)){    
                                  ?>

                                <tr>

                                    <td>
                                        <div class="col">
                                            <?php echo $row['first_name']." ".$row['last_name']  ?></div>
                                    </td>
                                    <td class="col-md-1">
                                        <div class=""><?php echo $row['email'] ?></div>
                                    </td>

                                    <td class="col-md-3">
                                        <div class="col"><?php echo $row['address'] ?></div>
                                    </td>
                                    <td>
                                        <div class="col"><?php echo $row['contact'] ?></div>
                                    </td>

                                    <?php if($row['order_status'] == 1): ?>
                                    <td class="text-center">
                                        <div class="col">
                                            <span class="badge badge-success bg-success text-white">Confirmed</span>
                                            <input type="hidden" value="<?php echo $row['order_status'] ?>"
                                                name="update_status">
                                            <input type="hidden" value="<?php echo $row['order_user_id'] ?>"
                                                name="update_status_id">
                                        </div>
                                    </td>

                                    <?php elseif($row['order_status'] == 2): ?>
                                    <td class="text-center">
                                        <div class="col">
                                            <span class="badge badge-success bg-warning text-white">to Pick Up</span>
                                            <input type="hidden" value="<?php echo $row['order_status'] ?>"
                                                name="update_status">
                                            <input type="hidden" value="<?php echo $row['order_user_id'] ?>"
                                                name="update_status_id">
                                        </div>
                                    </td>

                                    <?php else: ?>
                                    <td class="text-center ">
                                        <div class="col"><span class="badge badge-secondary bg-secondary text-dark">For
                                                Verification</span></div>
                                    </td>
                                    <?php endif; ?>

                                    <td>
                                        <div  class="container btn btn-primary mt-3">
                                       
                                                <a class="btn btn primary  text-light" href='admin-view-orders.php?id=<?php echo $row["id"] ?>'>View Orders</a>
                                            
                                        </div>
                                       
                                    </td>
                                </tr>

                                <?php
                                          };
                                        };
                                    ?>
                    </form>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>