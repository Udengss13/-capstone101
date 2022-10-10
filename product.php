<?php require_once "controllerUserData.php"; 
     require('php/connection.php');

    //https://www.codepile.net/pile/NYN5P9Qq
       //call all Category
      $querycategory = "SELECT * FROM admin_category"; 
      $resultcategory = mysqli_query($db_admin_account, $querycategory);   

      $user_id = $_SESSION['user_id'];

      if(!isset($user_id)){
        header('location: login-user.php');
      }
?>

<?php 
  //FOR MAIN CONTENT
  if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name']; //it is get on hidden input
    $product_price = $_POST['product_price']; //it is get on hidden input
    $product_image = $_POST['product_image']; //it is get on hidden input
    $product_quantity = 1;

    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE Cart_name = '$product_name' AND Cart_user_id = '$user_id'");

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = "Product is already added to your cart!" ;
    }else{
      $insert_product = mysqli_query($con, "INSERT INTO `cart`(Cart_user_id, Cart_name, Cart_price, Cart_image, Cart_quantity) 
      VALUES ('$user_id','$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = "Product successfully add to cart!" ;
    }
  }
?>

<?php 
  //FOR SELECT & SEARCH ADD TO CART PROCESS
  if(isset($_POST['add_to_cart_select'])){
    $product_select_name = $_POST['product_category_name']; //it is get on hidden input
    $product_select_price = $_POST['product_category_price']; //it is get on hidden input
    $product_select_image = $_POST['product_category_image']; //it is get on hidden input
    $product_select_quantity = 1;

    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE Cart_name = '$product_select_name' AND Cart_user_id = '$user_id'");

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = "Product is already in added in your cart!!" ;
    }else{
      $insert_product = mysqli_query($con, "INSERT INTO `cart`(Cart_user_id, Cart_name, Cart_price, Cart_image, Cart_quantity) 
      VALUES ('$user_id','$product_select_name', '$product_select_price', '$product_select_image', '$product_select_quantity' )");
      $message[] = "Product successfully add to cart!" ;
    }
  }
?>


<?php 
  if(isset($message)){
    foreach($message as $message){
     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert" id="Myid">'
    .$message.
     '<button type="button" class="btn-close" aria-label="Close" onclick="toggleText()"></button></div>';
     echo '<script>
     function toggleText(){
       var x = document.getElementById("Myid");
       if (x.style.display === "none") {
         x.style.display = "block";
       } else {
         x.style.display = "none";
       }
     }
     </script>';

}
}
?>

<?php
  $num_per_page = 06;

  if(isset($_GET["page"])){
    $page = $_GET['page'];
  }
  else{
    $page = 1;
  }  

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
</head>

<body class="">
    <!--Navigation Bar-->
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="asset/logopet.png" alt="Logo" style="width:22%; height:8vh" />
                <span style="text-shadow: 2px 2px 2px  rgba(49, 44, 44, 0.767);" class="text-white"><b>PETCO. ANIMAL
                        CLINIC</b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse me-3" id="navbarScroll">
            <ul class="navbar-nav me-auto my-0 my-lg-0 " style="--bs-scroll-height: 100px;">


                <div class="text-nowrap">
                    <li class="nav-item">

                        <a class="nav-link active text-white mt-2" aria-current="page" href="home.php">HOME</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link bg-primary text-white mt-2" href="product.php">SHOP</a>
                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a href="userprofile.php" class="nav-link text-white"><img src=" asset/picon.png" alt="PETCO"
                                style="width: 40px;"></a>
                    </li>
                </div>

                <?php 
                    $select_rows = mysqli_query($con,"SELECT * FROM `cart` WHERE Cart_user_id = '$user_id'") or die ('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                  ?>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="cart.php"><img src=" asset/cart.png" alt="PETCO"
                                style="width: 40px;"><span
                                class="badge badge-light mx-1 bg-light text-dark"><?php echo $row_count ?></span></a>

                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link  text-white mt-2" href="logout-user.php"
                            onclick="return confirm('Are you sure do you want to logout?')">LOGOUT</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>


    <!-- For Category Container -->
    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <form action="product.php" method="GET">
                    <div class="input-group flex-nowrap ">
                        <select class="form-select form-select-md" name="select_category" required
                            onchange="this.form.submit()">
                            <option value="" disabled selected>Select Category</option>
                            <?php while($rowcategory =  mysqli_fetch_array($resultcategory)){ ?>
                            <option value=" <?php echo $rowcategory['category_name']; ?>">
                                <?php echo $rowcategory['category_name']; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--Search Form-->
    <div class="container">
        <div class="row">
            <div class="col-6 float-end">
                <div class="card mt-4">
                    <div class="card-header">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="product.php" method="GET">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" required name="search" value="<?php if(isset($_GET['search'])) {
                        echo $_GET['search'];
                      }?>" placeholder="Search Data">
                                            <!--Button Search-->
                                            <button class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container mt-3">
        <tbody>
            <!--Select-->
            <?php   
          if(isset($_GET['select_category'])){
           $filtervalues = $_GET['select_category']; 
           $querysearchmenu = mysqli_query($db_admin_account,"SELECT * FROM admin_menu WHERE CONCAT(Menu_name, Menu_price, Menu_category,Menu_filename) LIKE '%$filtervalues%'"); //You dont need like you do in SQL;
                   
             if(mysqli_num_rows($querysearchmenu)>0 ){
                ?> <div class="fs-5 fw-bold">Search Result:</div>
            <table class="table table-striped table-hover">
                <thead class="bg-dark text-white">
                    <tr>
                        <th class="text-center">Image</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Category</th>
                        <th class="text-center" colspan="2">Action</th>
                    </tr>
                </thead>
                <?php while($fetch_product_select = mysqli_fetch_assoc($querysearchmenu)){
               ?>

                <!--DISPLAYING DATA OF SELECT-->


                <form action="product.php" method="post">
                    <tr>
                        <td> <img src="asset/menu/<?php echo $fetch_product_select['Menu_filename']?>"
                                alt="Image section" class="card-img-top pt-3 img-responsive "
                                style="height:10rem; width:40%; display:block; margin-left:auto; margin-right:auto">
                        </td>
                        <td>
                            <p class="mt-2 text-center"><?php echo $fetch_product_select['Menu_name']?></p>
                        </td>
                        <td>
                            <p class="mt-2 text-center"><?php echo $fetch_product_select['Menu_price']?></p>
                        </td>
                        <td>
                            <p class="mt-2 text-center"><?php echo $fetch_product_select['Menu_category']?></p>
                        </td>
                        <td>
                            <!--hidden inputs-->
                            <input type="hidden" name="product_category_name"
                                value="<?php echo $fetch_product_select['Menu_name'] ?>">

                            <input type="hidden" name="product_category_price"
                                value="<?php echo $fetch_product_select['Menu_price'] ?>">

                            <input type="hidden" name="product_category_category"
                                value="<?php echo $fetch_product_select['Menu_category'] ?>">
                            <input type="hidden" name="product_category_image"
                                value="<?php echo $fetch_product_select['Menu_filename'] ?>">
                        </td>
                        <td>
                            <!--Add to cart button-->
                            <a href="home-view-image.php?id=<?php echo $fetch_product_select['Menu_id'] ?>"
                                class=" btn btn-outline-secondary w-100 mb-3">View</a>
                            <input type="submit" name="add_to_cart_select" value="Add to Cart"
                                class="btn btn-success w-100">
                        </td>
                    </tr>
                </form>
                <?php
                };
                };?>

                <?php } ?>




                <!--SEARCH SECTION-->
                <?php   
          if(isset($_GET['search'])){
           $filtervalues = $_GET['search']; 
           $querysearchmenu = mysqli_query($db_admin_account,"SELECT * FROM admin_menu WHERE CONCAT(Menu_name, Menu_price) LIKE '%$filtervalues%'"); //You dont need like you do in SQL;
                   
             if(mysqli_num_rows($querysearchmenu)>0 ){
                ?><div class="fs-5 fw-bold">Search Result:</div>

                <table class="table table-striped table-hover">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th class="text-center">Image</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Category</th>
                            <th class="text-center" colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
               while($fetch_product_select = mysqli_fetch_assoc($querysearchmenu)){
               ?>
                    <form action="product.php" method="post">
                        <tr>
                            <td> <img src="asset/menu/<?php echo $fetch_product_select['Menu_filename']?>"
                                    alt="Image section" class="card-img-top pt-3 img-responsive "
                                    style="height:10rem; width:40%; display:block; margin-left:auto; margin-right:auto">
                            </td>
                            <td>
                                <p class="mt-2 text-center"><?php echo $fetch_product_select['Menu_name']?></p>
                            </td>
                            <td>
                                <p class="mt-2 text-center">Php <?php echo $fetch_product_select['Menu_price']?></p>
                            </td>
                            <td>
                                <p class="mt-2 text-center"><?php echo $fetch_product_select['Menu_category']?></p>
                            </td>
                            <td>
                                <!--hidden inputs-->
                                <input type="hidden" name="product_category_name"
                                    value="<?php echo $fetch_product_select['Menu_name'] ?>">

                                <input type="hidden" name="product_category_price"
                                    value="<?php echo $fetch_product_select['Menu_price'] ?>">

                                <input type="hidden" name="product_category_category"
                                    value="<?php echo $fetch_product_select['Menu_category'] ?>">
                                <input type="hidden" name="product_category_image"
                                    value="<?php echo $fetch_product_select['Menu_filename'] ?>">
                            </td>
                            <td>
                                <!--Add to cart button-->
                                <a href="home-view-image.php?id=<?php echo $fetch_product_select['Menu_id'] ?>"
                                    class=" btn btn-outline-secondary w-100 mb-3">View</a>
                                <input type="submit" name="add_to_cart_select" value="Add to Cart"
                                    class="btn btn-success w-100">
                            </td>
                        </tr>
                    </form>
                    <?php
                };
                };?>

                    <?php } ?>


        </tbody>
        </table>




    </div>










    <!--IMage Section-->
    <section class="product ms-5 mb-4">
        <h1 class="text-center mt-5 mb-3">Products</h1>
        <div class="box-container justify-content-center">

            <?php
        $start_from = ($page - 1 )*06;
  
        $select_product = mysqli_query($db_admin_account,"SELECT * FROM (SELECT * FROM admin_menu LIMIT $start_from, $num_per_page) _t ORDER BY RAND()"); //You dont need like you do in SQL;
        if(mysqli_num_rows($select_product)>0){
          while($fetch_product = mysqli_fetch_assoc($select_product)){
      ?>
            <form action="product.php" method="post">
                <div class="m-3 mb-3 rounded-3 ">

                    <a href="home-view-image.php?id=<?php echo $fetch_product['Menu_id'] ?>" class=" w-100 mb-3"><img
                            src="asset/menu/<?php echo $fetch_product['Menu_filename']?>" alt="Image section"
                            class="card-img-top  img-responsive " style="height:17rem; width:100%;"></a>
                    <h4 class="mt-2"><?php echo $fetch_product['Menu_name']?></h4>
                    <div class="mt-2 text-light">Php <?php echo $fetch_product['Menu_price']?></h3>

                    </div>

                    <!--hidden inputs-->
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['Menu_name'] ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['Menu_price'] ?>">
                    <input type="hidden" name="product_description"
                        value="<?php echo $fetch_product['Menu_description'] ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['Menu_filename'] ?>">

                    <!--Add to cart button-->
                    <!-- <a href="home-view-image.php?id=<?php echo $fetch_product['Menu_id'] ?>"
                        class=" btn btn-outline-secondary w-100 mb-3">View</a> -->
                    <input type="submit" name="add_to_cart" value="Add to Cart"
                        class="btn btn-danger bg-button text w-90">

                </div>
            </form>

            <?php
               };
              };?>
        </div>
    </section>


    <!--Page content-->
    <?php
    $sql = "SELECT * FROM admin_menu";
    $resultsql = mysqli_query($db_admin_account, $sql);
    $total_records = mysqli_num_rows($resultsql);
    $total_pages = ceil($total_records/$num_per_page);
    
  ?>
    <nav aria-label=" Page navigation example">
        <ul class="pagination justify-content-center ">
            <li class="page-item mx-1">
                <?php 
         if($page > 1){
          echo "  
          <a href='product.php?page=".($page-1)."' class='page-link  btn btn-primary '>
          Previous
        </a>";
        }
        ?>
            </li>

            <li class="page-item active">
                <?php
          for($i=1; $i<$total_pages; $i++){
            echo "<li class='page-item mx-1'><a href='product.php?page=".$i."' class='page-link'> ".$i."</a></li>";
           }  
        ?>
            </li>

            <li class="page-item mx-1">
                <?php
          if($i > $page){
            echo "
            <a href='product.php?page=".($page+1)."' class='page-link'>Next</a>";
          }
         ?>
            </li>
        </ul>
    </nav>


    <footer class=" footer-banner" id="about">
        <div class="container text">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="follow">
                        <h3>Please follow us</h3>

                        <a href="https://www.facebook.com/"><img src="asset/facebook.png" width="50px"
                                height="40px"></a>
                        <a href="https://www.instagram.com//"><img src="asset/instagram.png" width="50px"
                                height="40px"></a>
                        <a href="https://www.messenger.com/"><img src="asset/messenger.png" width="50px"
                                height="40px"></a>
                    </ul>
                    <h5>© 2022 All Rights Reserved. PetCo. Animal Clinic.</h5>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>