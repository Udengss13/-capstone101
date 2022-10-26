<?php
require_once "controllerUserData.php"; 
     require('php/connection.php');
     

?>
<?php 
    //GET USER ID IN REGISTRATION
    $user_id = $_SESSION['user_id'];

    // if(!isset($user_id)){
    //   header('location: login-user.php');
    // }
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
    WHERE order_user_id = '$user_id'");

   if($update_status_query){
     header('location: admin-orders.php');
   }
  }

  if(isset($_POST['pickup'])){
    $update_status = $_POST['update_status'];
    $update_status_id = $_POST['update_status_id'];
    $update_status = 2;
    
    $update_status_query = mysqli_query($con, "UPDATE `order` SET  order_status = '2'
    WHERE order_user_id = '$user_id'");

   if($update_status_query){
     header('location: admin-orders.php');
   }
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin || Order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/admin.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body style="background:  #9FBACD;">

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">
             <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
                 <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img src="asset/logopet.png" alt="Saint Jude Logo" style="width: 50px; padding-left: 10px; padding-top: 5px;">
                  <span class="fs-5 d-none d-sm-inline">PETCO. ADMIN</span>
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                           <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-4 bi-person-lines-fill"></i><span class="ms-1 d-none d-sm-inline">Accounts</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="#">Admin Accounts</a></li>
                            <li><a class="dropdown-item" href="admin-user-accounts.php">User Accounts</a></li>
                            <li><a class="dropdown-item" href="#">Employee Accounts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-4 bi-table"></i><span class="ms-1 d-none d-sm-inline">Sales</span></a>
                    </li>
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
                    <li>
                        <a href="admin-orders.php" class="nav-link px-sm-0 px-2">
                            <i class="fs-4 bi-bag-check"></i><span class="ms-1 d-none d-sm-inline">Orders</span> </a>
                    </li>
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

    <div class="col-md-9 col-xl-10 py-3">
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


            </div>
        </div>

    </div>

    <!-- Button trigger modal -->
    <!-- <div>
    <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        ADD
    </button>
    </div> -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> View Order</h4>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                </div>

                <!-- Modal body -->

                <form action=" " method="post" class="row gap-2 justify-content-center">
                    <div class="modal-body">
                        <div class="container-fluid">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th>Quantity</th>
                                        <th>Order</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $select_cart = mysqli_query($con, "SELECT * FROM `order_list` WHERE order_user_id = '$user_id' ");
                                        $total = 0;
                                        $grand_total= 0;


                                    while($row=$select_cart->fetch_assoc()):
                                        $total += $row['qty'] * $row['price'];
                                                ?>
                                    <tr>
                                        <td><?php echo $row['qty'] ?></td>
                                        <td><?php echo $row['product_name'] ?></td>
                                        <td>Php <?php echo number_Format($row['price'],2 )?></td>
                                    </tr>
                                    

                                    <?php endwhile; ?>
                                    <tr>
                                        <th colspan="2" class="text-right">TOTAL</th>
                                        <th>Php <?php echo number_format($total,2) ?></th>
                                    </tr>


                                </tbody>
                                <!-- <tfoot> -->
                                    
                                <!-- </tfoot> -->
                            </table>
                            <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="confirmed">Confirm</a></button>
                            <button class="btn btn-primary" type="submit" name="pickup">For Pick Up</a></button>
                                    <a href="admin-orders.php"><span class="btn btn-outline-danger mx-2 float-end">Back</span></a>

                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="/js/script.js"></script>
</body>

</html>