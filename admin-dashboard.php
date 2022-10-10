<?php
    require_once "php/user-list-process.php";
    require('php/connection.php');

    $query = "SELECT * FROM usertable"; //You don't need a like you do in SQL;
    $result = mysqli_query($con, $query);
    

    //this is for search name or id;
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $query = "SELECT * FROM usertable WHERE first_name='$user_id' OR id='$user_id'"; //You don't need a ; like you do in SQL
        $result = mysqli_query($con, $query);
    }else{
        $query = "SELECT * FROM usertable"; //You don't need a ; like you do in SQL
        $result = mysqli_query($con, $query);
    }
?>

<!DOCTYPE html>
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
<title>Admin Dashboard</title>
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

                
                <a class="w3-bar-item w3-button" href="#">User List</a>
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
                    <h1>User Information</h1>
                </div>
        </div>
        <!--Search-->
        <form action="admin-dashboard.php" method="GET">
            <div class="input-group mx-auto" style="width: 450px;">
                <span class="input-group-text">Search User</span>
                <input type="text" required class="form-control" name="id" placeholder="User ID or Name.">
                <span class="input-group-btn">
                    <button class="btn btn-success" name="search" type="submit"><span
                            class="bi bi-search c-white"></span></button>
                </span>
            </div>
        </form>
        <div class="div_background_light">
            <div class="table-responsive mt-4 mx-auto" style="width:95%;">
                <table class="table mt-3 mb-5">
                    <thead class="table-dark">
                        <th class="text-nowrap text-center">User ID</th>
                        <th class="text-nowrap text-center ">First Name</th>
                        <th class="text-nowrap text-center">Middle Name</th>
                        <th class="text-nowrap text-center">Last Name</th>
                        <th class="text-nowrap text-center">Suffix</th>
                        <th class="text-nowrap text-center">Email</th>
                        <th class="text-nowrap text-center">Status</th>
                        <th class="text-nowrap text-center">Action</th>
                    </thead>

                    <tbody>
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                        <form action="php/user-list-process.php" method="post">
                            <tr>
                                <td><input name="user_id" readonly class="c-white text-center " type="text"
                                        style="background-color:transparent;border:0;"
                                        value="<?php echo $row['id']; ?>">
                                </td>
                                <td><input name="first_name" readonly class="c-white text-center" type="text"
                                        style="background-color:transparent;border:0;"
                                        value="<?php echo $row['first_name']; ?>">
                                </td>
                                <td><input name="middle_name" readonly class="c-white text-center " type="text"
                                        style="background-color:transparent;border:0;"
                                        value="<?php echo $row['middle_name']; ?>">
                                </td>
                                <td><input name="last_name" readonly class="c-white text-center " type="text"
                                        style="background-color:transparent;border:0;"
                                        value="<?php echo $row['last_name']; ?>">
                                </td>
                                <td><input name="suffix" readonly class="c-white text-center " type="text"
                                        style="background-color:transparent;border:0;"
                                        value="<?php echo $row['suffix']; ?>">
                                </td>
                                <td><input name="email" readonly class="c-white text-center " type="text"
                                        style="background-color:transparent;border:0; "
                                        value="<?php echo $row['email']; ?>">
                                </td>
                                <td>
                                <input name="status" readonly class=" text-center " type="text"
                                        style="background-color:transparent;border:0; color: Green;" value="<?php  if( $row['status']="verified"){
                                                echo " Verified";
                                        }; ?>">  
                                <input name="status" readonly class=" text-center " type="text"
                                        style="background-color:transparent;border:0; color: red;" value="<?php  if( $row['status']!="verified"){
                                                echo "Not Verified";
                                        }; ?>">

                                   
                                </td>


                                <td class="c-white text-nowrap text-center"><button data-bs-toggle="modal"
                                        data-bs-target="#id<?php echo $row['id'];?>" type="button"
                                        class="btn btn-outline-danger">Delete</button>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="id<?php echo $row['id'] ;?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="id<?php echo $row['id'] ;?>">Confirmation:
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <label class="text-center mb-2 mx-auto">Enter Password before delete
                                                    <span
                                                        class="fw-bold"><?php echo $row['first_name']; ?>!</span></label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password" aria-label="Password"
                                                    aria-describedby="addon-wrapping" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    name="delete_user">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </form>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>


    <script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html>