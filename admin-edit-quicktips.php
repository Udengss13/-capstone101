<?php
    
    require('php/connection.php');

    session_start();
    //This is for message
      if(isset($_SESSION['update_changes'])){
          $applychanges = $_SESSION['update_changes'];
          unset($_SESSION['update_changes']);
      }
      else{
          $applychanges="";
      }
  
  
    
    $queryimage = "SELECT * FROM admin_quicktips"; //You don't need a like you do in SQL;
    $resultimage = mysqli_query($db_admin_account, $queryimage);


    if (isset($_GET['updateid'])){
      $id = $_GET['updateid'];

      $queryimageEdit = "SELECT * FROM admin_quicktips WHERE id = '$id'";
      $resultimageEdit = mysqli_query($db_admin_account, $queryimageEdit);
      $rowimageEdit = mysqli_fetch_array($resultimageEdit, MYSQLI_ASSOC);
    }
    
?>

<html>
<meta charset="UTF-8">
<link rel="icon" href="asset/logopet.png" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/color.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <<button href="#" class="btn1"><i class="fa fa-home"></i> Dashboard</button>
            
            <div class="dropdown">     
            <button class="btn1"><i class="fa fa-bars"></i> Content</button>
                     <div class="dropdown-content">
                    <a href="admin-content.php">Announcement and Promos</a>
                    <a href="admin-quicktips.php">Quicktips</a>
                    <a href="admin-slider.php">Slider</a>
             </div>
        </div>
                    
         
         
             <button href="admin-category-list.php" class="btn1"><i class="fa fa-archive"></i> Category</button>
             
             <button href="admin-dashboard.php" class="btn1"><i class="fa fa-folder"></i> User List</button>
                
             <button href="admin-login.php" class="btn1"><i class="fa fa-close"></i> Log-out</button>

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
                    <h1 class="text-center c-white py-3">Edit Information Content for Home</h1>
                </div>
        </div>

        <!--All Content Here-->

    <form action="php/quicktips-image-edit-process.php" method="post" enctype="multipart/form-data"
      class="row gap-2 justify-content-center">
      <div class="row justify-content-md-center mb-5">
        <div class="col-lg-7 col-md-6 col-sm-12">
          <div class="card d-flex justify-content-center">
            <div class="card-header">
              Edit Information for Quicktips
            </div>
            <!--Success Message-->
            <?php if($applychanges!=""){?>
            <div class="alert alert-primary alert-dismissible fade show mt-3 mx-auto" role="alert" style="width: 90%;">
              <strong>Apply Changes Successfully!</strong> <?php echo $applychanges; ?>.
            </div>
            <?php } ?>
            <ul class="list-group list-group-flush">
              <!--Title-->
              <li class="list-group-item">
                <input name="id" class="col-12" type="text"
                  value="<?php echo $rowimageEdit['id'];    ?>" hidden>
            
                  </li>
              <!--Body-->
              <li class="list-group-item">
                <div> <label>Information</label></div>
                <textarea name="info" style="height:150px;" required
                  class="col-12"><?php echo $rowimageEdit['info']  ?></textarea>
              </li>
              <!--Choose File-->
              <li class="list-group-item">
                <input name="photo" class="" id="upload-news" type="file" required>
              </li>


              <li class="list-group-item">
                <!--Back-->
                <a href="admin-quicktips.php"><span class="btn btn-outline-danger mx-2 float-end">Back</span></a>

                <!--Add button-->
                <button type="submit" name="update_image_content" class="btn btn-outline-success float-end"
                  style="max-width:450px;">Update</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="/js/script.js"></script>
</body>

</html>