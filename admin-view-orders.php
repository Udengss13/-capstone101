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
    WHERE order_user_id = '$user_id'");

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

<body>
    <nav class="navbar navbar-expand-lg nav_color navbar-dark nav_outline">
        <h3 class=""><img src="asset/logopet.png" alt="Petco Logo"
                style="width: 50px; padding-left: 10px; padding-top: 5px;"><a class="navbar-brand fw-bold c-white"
                href="#" style="padding-left: 15px;">PET CO.</a></h3>
        <button style="margin-right: 20px;" class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end col-6" style="padding-right: 20px;" id="navbarNav">
            <ul class="navbar-nav text-center gap-3" style="padding-left: 10px;">

                <li class="nav-item">
                    <a class="nav-link c-white bg_nav_menu rounded" href="#">Orders</a>
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
                    <a class="nav-link c-green  rounded" href="admin-category-list.php">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link c-green  rounded" href="admin-menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link c-green rounded" href="admin-dashboard.php">User List</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link c-green" href="admin-login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">

        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Qty</th>
                    <th>Order</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php 
          $select_cart = mysqli_query($con, "SELECT * FROM `order` WHERE order_user_id = '$user_id' ");
          $total = 0;
          $grand_total= 0;

       
            while($row=$select_cart->fetch_assoc()):
           
                ?>
                <tr>
				<td><?php echo $row['quantity'] ?></td>
				<td><?php echo $row['product_name'] ?></td>
				<td><?php echo $row['price'] ?></td>
			</tr>
                  
            <?php endwhile; ?>
          
        
            </tbody>
        </table>
        <div class="text-center">
            <button class="btn btn-primary" id="confirm" type="button" onclick="confirm_order()">Confirm</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>