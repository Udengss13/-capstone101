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

<?php 
  if(isset($_POST['confirmed'])){
    $update_status = $_POST['update_status'];
    $update_status_id = $_POST['update_status_id'];
    $update_status = 1;
    
    $update_status_query = mysqli_query($con, "UPDATE `order` SET  order_status = '1'
    WHERE order_id = ".$_GET['id']);

   if($update_status_query){
     header('location: admin-orders.php');
   }
   else{
    echo "amlii";
   }
  }

  if(isset($_POST['pickup'])){
    $update_status = $_POST['update_status'];
    $update_status_id = $_POST['update_status_id'];
    $update_status = 1;
    
    $update_status_query = mysqli_query($con, "UPDATE `order` SET  order_status = '2'
    WHERE order_id = ".$_GET['id']);

   if($update_status_query){
     header('location: admin-orders.php');
   }
  }
?>


<!--When Click ORDER NOW!-->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<<<<<<< HEAD
<body style="background:  #9FBACD;">

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">
             <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flex sticky-top">
                 <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img src="asset/logopet.png" alt="Saint Jude Logo" style="width: 50px; padding-left: 10px; padding-top: 5px;">
                  <span class="fs-5 d-none d-sm-inline">PETCO. ADMIN</span>
=======
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/"
                    class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img
                        src="asset/logopet.png" alt="Saint Jude Logo"
                        style="width: 50px; padding-left: 10px; padding-top: 5px;">
                    <span class="fs-5 d-none d-sm-inline">PETCO. ADMIN</span>
>>>>>>> 2abc0e5da3bb0e72076c763733f11bc696626cee
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                           <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
<<<<<<< HEAD
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-4 bi-person-lines-fill"></i><span class="ms-1 d-none d-sm-inline">Accounts</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="#">Admin Accounts</a></li>
                            <li><a class="dropdown-item" href="admin-user-accounts.php">User Accounts</a></li>
                            <li><a class="dropdown-item" href="#">Employee Accounts</a></li>
=======
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
>>>>>>> 2abc0e5da3bb0e72076c763733f11bc696626cee
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-4 bi-table"></i><span class="ms-1 d-none d-sm-inline">Sales</span></a>
                    </li>
<<<<<<< HEAD
			  <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-4 bi-archive"></i><span class="ms-1 d-none d-sm-inline">Pet Archives</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="#">Pet Profile</a></li>
                            <li><a class="dropdown-item" href="#">Pet Owners</a></li>
                        </ul>
                    </li>
			 <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-4 bi-pencil-square"></i><span class="ms-1 d-none d-sm-inline">Content</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="admin-slider.php">Slider</a></li>
                            <li><a class="dropdown-item" href="admin-quicktips.php">Quicktips</a></li>
                        </ul>
                    </li>
=======
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
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Pet Owner</span>
                                    2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-pencil-square"></i> <span class="ms-1 d-none d-sm-inline">Content</span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="admin-slider.php" class="nav-link px-0"> <span
                                        class="d-none d-sm-inline">Slider</span> </a>
                            </li>
                        </ul>
>>>>>>> 2abc0e5da3bb0e72076c763733f11bc696626cee
                    <li>
                        <a href="admin-orders.php" class="nav-link px-sm-0 px-2">
                            <i class="fs-4 bi-bag-check"></i><span class="ms-1 d-none d-sm-inline">Orders</span> </a>
                    </li>
<<<<<<< HEAD
                </ul>
                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="Admin" width="28" height="28" class="rounded-circle">
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

        <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <table class="table table-striped table table-bordered">
                        <thead>
                            <tr>
                                <!-- <th scope="col">Number</th> -->
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                      $i = 1;
                                      $order_query = mysqli_query($con, "SELECT * FROM `order` JOIN usertable on order.order_user_id=usertable.id ORDER BY `order`.`id` DESC " );
                                      
                                      if(mysqli_num_rows($order_query) > 0){
                                        while($row = mysqli_fetch_assoc($order_query)){    
                                  ?>

                            <tr>
                                <!-- <td><?php echo $i++ ?></td> -->
                                <td><?php echo $row['first_name']." ".$row['last_name']  ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['contact'] ?></td>

                                <?php if($row['order_status'] == 1): ?>
                                <td class="text-center">
                                    <span class="badge badge-success bg-success text-white">Confirmed</span>
                                    <input type="hidden" value="<?php echo $row['order_status'] ?>"
                                        name="update_status">
                                    <input type="hidden" value="<?php echo $row['order_user_id'] ?>"
                                        name="update_status_id">
                                </td>

                                <?php elseif($row['order_status'] == 2): ?>
                                <td class="text-center">
                                    <span class="badge badge-success bg-warning text-white">For Pick Up</span>
                                    <input type="hidden" value="<?php echo $row['order_status'] ?>"
                                        name="update_status">
                                    <input type="hidden" value="<?php echo $row['order_user_id'] ?>"
                                        name="update_status_id">
                                </td>

                                <?php else: ?>
                                <td class="text-center "><span class="badge badge-secondary bg-secondary text-dark">For
                                        Verification</span></td>
                                <?php endif; ?>

                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        View Order
                                    </button>
                                </td>
                            </tr>

                            <?php
                                          };
                                        };
                                    ?>

                        </tbody>
                    </table>
                </form>

=======
>>>>>>> 2abc0e5da3bb0e72076c763733f11bc696626cee

                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="Admin" width="30" height="30"
                                class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Charlize</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
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



 
            <form action=" " method="post" class="row gap-2 justify-content-center">
                <div class="modal-body">
                    <div class="container-fluid">

                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Quantity</th>
                                    <th>Order</th>
                                    <th>Amount</th>
                                    <input type="hidden" value="<?php echo $row['order_status'] ?>"
                                                name="update_status">
                                            <input type="hidden" value="<?php echo $row['order_user_id'] ?>"
                                                name="update_status_id">
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                        $select_cart = mysqli_query($con, "SELECT * FROM order_list o inner join admin_menu p on menu_id = product_id  where order_id =".$_GET['id']);
                                        $total = 0;
                                        $grand_total= 0;


                                    while($row=$select_cart->fetch_assoc()):
                                        $total += $row['qty'] * $row['product_price'];
                                                ?>
                                <tr>
                                    <td><?php echo $row['qty'] ?></td>
                                    <td><?php echo $row['Menu_name'] ?></td>
                                    <td>Php <?php echo number_Format($row['Menu_price'],2 )?></td>
                                </tr>


                                <?php endwhile; ?>
                                <tr>
                                    <th colspan="2" class="text-right">TOTAL</th>
                                    <th>Php <?php echo number_format($total,2) ?></th>
                                </tr>


                            </tbody>
                            <!-- <tfoot> -->
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
                                            <span class="badge badge-success bg-success text-white">Confirmed</span>
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
                            <!-- </tfoot> -->
                        </table>

                        <div class="text-center">
                            <button class="btn-primary" type="submit" name="confirmed">Confirm</a></button>
                            <button class="btn " type="submit" name="pickup">For Pick Up</a></button>
                            <a href="admin-orders.php"><span
                                    class="btn btn-outline-danger mx-2 float-end">Back</span></a>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</body>

</html>