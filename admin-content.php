<?php
    require_once "php/user-list-process.php";
    require('php/connection.php');
    require_once "php/content-image-process.php";

    
    $queryimage = "SELECT * FROM admin_content_homepage"; //You don't need a like you do in SQL;
    $resultimage = mysqli_query($db_admin_account, $queryimage);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|| Content</title>
    <!-- MATERIAL CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
      rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./adminstyles.css">
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
             <div class="logo">
                <img src="asset/logopet.png">
                <h2>PETCo.<span class="danger">ADMIN</span></h2>
             </div>
             <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
             </div>
            </div>
            <div class="sidebar">
                <a href="admin-dashboard.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="admin-user-accounts.php">
                    <span class="material-icons-sharp">person</span>
                    <h3>Customers</h3>
                </a>
                <a href="admin-orders.php">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Orders</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Products</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Product</h3>
                </a>
                <a href="admin-login.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Image Content for Home</h1>
                    
                
                <!--All Content for Image Here-->
                
                <form action="php/content-image-process.php" method="post" enctype="multipart/form-data"
                    class="row gap-2 justify-content-center">
                    <div class="row justify-content-md-center mb-5">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div class="card d-flex justify-content-center mt-5">
                                <div class="card-header">
                                    Upload New Image for Homepage

                                    <?php if(!empty($messages)){
	                              echo "<div class='alert alert-success'>";
	                                foreach ($messages as $message) {
		                              echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;".$message."<br>";
	                                }
	                                 echo "</div>";
                                    }
                          ?>

                                    <ul class="list-group list-group-flush">
                                        <!--Title-->
                                        <li class="list-group-item">
                                            <label>Header Name:</label>
                                            <input name="title" class="col-12" type="text" placeholder="News Title"
                                                required>
                                        </li>
                                        <!--Subtitle-->
                                        <li class="list-group-item">
                                            <label>Subtitle:</label>
                                            <input name="subtitle" class="col-12" type="text"
                                                placeholder="News Subtitle" required>
                                        </li>
                                        <!--Body-->
                                        <li class="list-group-item">
                                            <div> <label>Body:</label></div>
                                            <textarea name="paragraph" style="height:150px;" required class="col-12"
                                                placeholder="News Paragraph"></textarea>
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
                    </div>
                </div>
            </div>



            <!--Displaying data in table-->
           <!--Displaying Data -->
           
           <div class="container-fluid mt-4">
                <table class="table table-striped table table-bordered">
                    <!-- <div class="row"> -->
                    <thead>
                        <tr>
                            <div class="row">

                                <th scope="col">
                                    <div class="col">Image</div>
                                </th>
                                <th scope="col">
                                    <div class="col">Title</div>
                                </th>
                                <th scope="col">
                                    <div class="col">Subtitle</div>
                                </th>
                                <th scope="col">
                                    <div class="col">Body</div>
                                </th>
                                <th scope="col">
                                    <div class="col">Delete</div>
                                </th>
                        </tr>
                    </thead>
                    <?php while($rowimage =  mysqli_fetch_array($resultimage)){ ?>
                    <tr>

                        <td>
                            <div class="col">
                                <a href="Petkoproj/<?php echo $rowmimage['Image_dir']; ?>" class="fancybox "
                                    rel="ligthbox">
                                    <img src=" asset/homepage/<?php echo $rowimage['Image_filename']; ?> "
                                        class="zoom img-thumbnail img-responsive images_menu"></a>
                        </td>
                        <td>
                            <div class="col">
                                <?php echo $rowimage['Image_title']; ?></div>
                        </td>
                        <td>
                            <div class="col">
                                <?php echo $rowimage['Image_subtitle']; ?></div>
                        </td>
                        <td>
                            <div class="col">
                                <?php echo $rowimage['Image_body']; ?></div>
                        </td>
                        <td class="col-1">
                            <div class="col">
                                <a href="admin-edit-content.php?updateid=<?php echo $rowimage['Image_id'];?>">
                                    <i class="fa-solid fa-pen" style="font-size:25px; "></i>
                                </a>


                                <a href="php/content-image-process.php?id=<?php echo $rowimage['Image_id'];?>"
                                    onclick="return confirm('Are you sure you want to delete?')"><i class="fa-solid fa-trash-can"
                                            style="font-size:25px; color:red;"></i></a>

                                </a>
                            </div>

                        </td>


                        <?php } ?>


    </main>
    <!--DIVISION -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="/js/script.js"></script>


</body>

</html>
        