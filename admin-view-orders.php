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
    $sqlInfo = mysqli_query($con, "SELECT * FROM `order` where `order`.`order_status`");
?>

<?php 
  if(isset($_POST['confirmed'])){
    $update_status_query = mysqli_query($con, "UPDATE `order` SET `order_status` = '1' WHERE `order`.`id` = ".$_GET['id']);

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
    
    $update_status_query = mysqli_query($con, "UPDATE `order` SET `order_status` = '2' WHERE `order`.`id` = ".$_GET['id']);
    

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

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/"
                    class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img
                        src="asset/logopet.png" alt="Saint Jude Logo"
                        style="width: 50px; padding-left: 10px; padding-top: 5px;">
                    <span class="fs-5 d-none d-sm-inline">PETCO. ADMIN</span>
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                           <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
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
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-4 bi-table"></i><span class="ms-1 d-none d-sm-inline">Sales</span></a>
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
                    <li>
                        <a href="admin-orders.php" class="nav-link px-sm-0 px-2">
                            <i class="fs-4 bi-bag-check"></i><span class="ms-1 d-none d-sm-inline">Orders</span> </a>
                    </li>

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
                                    <td><img src=" asset/menu/<?php echo $row['Menu_filename']; ?> "
                                        class="zoom img-thumbnail img-responsive images_menu" height="50" width="50"></td>
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