<?php
    require_once "php/user-list-process.php";
    require('php/connection.php');
    

    
    $queryimage = "SELECT * FROM admin_quicktips"; //You don't need a like you do in SQL;
    $resultimage = mysqli_query($db_admin_account, $queryimage);
    
?>

<html>
<meta charset="UTF-8">
<link rel="icon" href="asset/logopet.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Admin Content</title>
</head>

<body style="background:  #9FBACD;">

    <!--Navbar-->
        
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <h3 class=""><img src="asset/logopet.png" alt="Saint Jude Logo"
                style="width: 50px; padding-left: 10px; padding-top: 5px;"><a class="navbar-brand fw-bold c-DarkBlue"
                href="#" style="padding-left: 15px;">PET CO.</a></h3>
            <ul class="navbar-nav text-center gap-1" style="padding-left: 5px;">
                <a href="#" class="w3-bar-item w3-button">Order</a>
                </li>
    
           <div class="dropdown">
           <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"> Content</button>
          <ul class="dropdown-menu">
           <li class="nav-item">
                <a class="dropdown-item" href="admin-content.php">Announcement and Promos</a>
           </li>
            <li><a class="dropdown-item" href="admin-quicktips.php">Quicktips</a></li>
            <li><a class="dropdown-item" href="admin-slider.php">slider</a></li>
            
          </ul>
                    
                
                 <a href="admin-category-list.php" class="w3-bar-item w3-button">Category</a>
                 </li>

                
                <a class="w3-bar-item w3-button" href="admin-menu.php">Product</a>
                </li>

                
                <a class="w3-bar-item w3-button" href="admin-dashboard.php">User List</a>
                </li>

                
                <a class="w3-bar-item w3-button" href="admin-login.php">Logout</a>
                </li>
                <div class="social_media">
                <a href="https://www.facebook.com/"><img src="asset/facebook.png" width="35px"
                                height="40px"></a>
                <a href="https://www.instagram.com//"><img src="asset/instagram.png" width="35px"
                                height="40px"></a>
                <a href="https://www.messenger.com/"><img src="asset/messenger.png" width="35px"
                                height="40px"></a>
            </ul> 
        </div>

        <div class="w3-main" style="margin-left:200px">
            <div class="w3-black">
            <button class="w3-button w3-blue w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
             <div class="w3-container">
                    <h1 class="text-center c-white py-3">Image Content for Home</h1>
                </div>
        </div>

  <!--All Content for Image Here-->

        <form action="php/quicktips-image-process.php" method="post" enctype="multipart/form-data"
            class="row gap-2 justify-content-center">
            <div class="row justify-content-md-center mb-5">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="card d-flex justify-content-center">
                        <div class="card-header">
                            Upload New Image for Quicktips

                            <?php if(!empty($messages)){
	                              echo "<div class='alert alert-success'>";
	                                foreach ($messages as $message) {
		                              echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;".$message."<br>";
	                                }
	                                 echo "</div>";
                                    }
                          ?>

                            <ul class="list-group list-group-flush">
                                
                        
                                <!--Body-->
                                <li class="list-group-item">
                                    <div> <label>Information:</label></div>
                                    <textarea name="info" style="height:150px;" required class="col-12"
                                        placeholder="Information"></textarea>
                                </li>
                                <!--Choose File-->
                                <li class="list-group-item">
                                    <input name="photo" class="" id="upload-news" type="file" required>
                                </li>

                                <li class="list-group-item">
                                    <!--Add button-->
                                    <button type="submit" name="upload_image_content"
                                        class="btn btn-outline-success float-end" style="max-width:450px;">Add</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
        </form>

        <!--Displaying data in table-->
        <div class="div_background_light">
            <div class="table-responsive mt-4 mx-auto" style="width:95%;">
                <table class="table mt-3">
                    <thead class="table-dark c-white">
                        <th>Image ID</th>
                        <th>Information</th>
                        <th>Delete</th>
                    </thead>
                    <?php while($rowimage =  mysqli_fetch_array($resultimage)){ ?>
                    <tbody>
                        <td class="text-nowrap c-white"><?php echo $rowimage['id']; ?></td>
                        <td class="text-nowrap c-white"><?php echo $rowimage['info']; ?></td>

                        <td class="c-red d-flex mt-1">

                            <a href="admin-edit-quicktips.php?updateid=<?php echo $rowimage['id'];?>">
                                <span class="btn btn-outline-success mx-2">Edit </span>
                            </a>

                            <a href="php/quicktips-image-process.php?id=<?php echo $rowimage['id'];?>"><input
                                    type="button" class="btn btn-outline-danger" value="Delete"></a>
                        </td>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>



  

 


</body>
</html>

