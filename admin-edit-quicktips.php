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