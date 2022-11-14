<?php
    require_once "php/user-list-process.php";
    require('php/connection.php');
    

    $query = "SELECT * FROM usertable"; //You don't need a like you do in SQL;
    $result = mysqli_query($con, $query);
    

    //this is for search name or id;
    if(isset($_GET['id'])){
        $user_id = $_GET['id'];
        $query = "SELECT * FROM usertable WHERE first_name='$user_id' OR id='$user_id' OR email='$user_id'"; //You don't need a ; like you do in SQL
        $result = mysqli_query($con, $query);
    }else{
        $query = "SELECT * FROM usertable"; //You don't need a ; like you do in SQL
        $result = mysqli_query($con, $query);
    }
?>
<!-- <?php
require_once "controllerAdmin.php";  
?> -->


<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|| Accounts</title>
    <!-- MATERIAL CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./adminstyles.css">
</head>
=======
<html>

<head>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f8f3c8a43b.js" crossorigin="anonymous"></script>
    <title>Admn || User Accounts</title>
>>>>>>> 520b4447ede0ada0fb05c4e5393048b5e3c48edb

    <script>
    function populate(s1, s2) {
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if (s1.value == "Dog") {
            var optionArray = ["americanbuly|American Bully", "chowchow|Chow Chow", "corgi|Corgi",
                "englishbulldog|English Bulldog", "frenchbulldog|French Bulldog",
                "goldentetriever|Golden Retriever", "pomeranian|Pomeranian", "poodle|Poodle", "pug|Pug",
                "siberianhusky|Siberian Husky", "shittzu|Shih Tzu"
            ];
        } else if (s1.value == "Cat") {
            var optionArray = ["abyssinian|Abyssinian", "siamese|Siamese"];
        }
        for (var option in optionArray) {
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }
    }
    </script>
</head>

<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|| Dashboard</title>
    <!-- MATERIAL CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp"
      rel="stylesheet">
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
                    <h3>Accounts</h3>
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
                <a href="admin-content.php">
                    <span class="material-icons-sharp">add</span>
                    <h3>Add Content</h3>
                </a>
                <a href="admin-login.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        
             <!---End of Aside-->
        <main>
            <h1>User Accounts</h1>
                <form action="admin-user-accounts.php" method="GET">
                    <div class="input-group mx-auto" style="width: 450px;">
                        <span class="input-group-text">Search User</span>
                        <input type="text" required class="form-control" name="id" placeholder="User ID or Name.">
                        <span class="input-group-btn">
                            <button class="btn btn-success" name="search" type="submit">
                                <span class="material-icons-sharp">search</span>
                        </span>
                    </div>
                </form>

                <!--    <div class="card mt-3"> -->
                    <div class="card-body">
                        <form action="" method="POST">
                            <table class="table table-striped table table-bordered">
                                <thead>
                                    <tr>


                                        <th scope="col">User ID</th>
                                        <th scope="col">First Name</th>
                                         <th scope="col">Last Name</th>
                                        <!--<th  scope="col">Last Name</th> -->
                                        <!-- <th  scope="col">Suffix</th> -->
                                        <th scope="col">Email</th>
                                        <th scope="col">User Level</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

						 <tbody>
                                    <?php while($row = mysqli_fetch_array($result)){ ?>
                                    <form action="php/user-list-process.php" method="post">
                                        <tr>
                                            <td class="col-sm-1 col-md-2 col-lg-1">

                                                <div class="col"><?php echo $row['id'] ?></div>
                                            </td>
                                            <td class="col-sm-1 col-md-1 col-lg-2">
                                                <div class="col">
                                                    <?php echo $row['first_name']  ?></div>
                                            </td>
                                            <td class="col-sm-1 col-md-1 col-lg-2">
                                                <div class="col">
                                                    <?php echo $row['last_name']  ?></div>
                                            </td>
                                           
                                            <td class=" col-sm-1 col-md-1 col-lg-3">
                                            <div class="col-sm-1">
=======
<body style="background:  #9FBACD;">

     <!--Navbar-->
     <div class="nav-bar container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">
            <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 d-flexs sticky-top">
                <div
                    class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                    <a href="/"
                        class="navbar-brand d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none"><img
                            src="asset/logopet.png" alt="Saint Jude Logo"
                            style="width: 50px; padding-left: 10px; padding-top: 5px;">
                        <span class="navbar-brand">PETCO. ADMIN</span>
                    </a>
                    <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-speedometer2"></i> <span
                                    class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <?php 
                        $selectMessages = mysqli_query($con,"SELECT * FROM `messages` WHERE seen = 0 AND sender_id != 'petko'") or die ('query failed');
                        $count_message = mysqli_num_rows($selectMessages);
                        ?>
                        <li>
                            <a href="admin-message.php" class="nav-link px-sm-0 px-2">
                                <i class="fa fa-envelope text-white"></i><span class="ms-1 d-none d-sm-inline"> Messages <?php if($count_message>0){ ?><span class="badge badge-danger text-white bg-danger"><?php echo $count_message; ?></span><?php } ?></span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi-person-lines-fill"></i><span
                                    class="ms-1 d-none d-sm-inline">Accounts</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="#">Admin Accounts</a></li>
                                <li><a class="dropdown-item" href="admin-user-accounts.php">User Accounts</a></li>
                                <li><a class="dropdown-item" href="#">Employee Accounts</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link px-sm-0 px-2">
                                <i class="fs-4 bi-table"></i><span class="ms-1 d-none d-sm-inline">Sales</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi-archive"></i><span class="ms-1 d-none d-sm-inline">Pet Archives</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="#">Pet Profile</a></li>
                                <li><a class="dropdown-item" href="#">Pet Owners</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi-pencil-square"></i><span
                                    class="ms-1 d-none d-sm-inline">Content</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="admin-slider.php">Slider</a></li>
                                <li><a class="dropdown-item" href="admin-quicktips.php">Quicktips</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="admin-orders.php" class="nav-link px-sm-0 px-2">
                                <i class="fs-4 bi-bag-check"></i><span class="ms-1 d-none d-sm-inline">Orders</span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="asset/cha.jpg" alt="Admin" width="28" height="28" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Cha</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="admin-profile.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="admin-login.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!--Search-->
            <!-- <form action="admin-user-accounts.php" method="GET">
                <div class="input-group mx-auto" style="width: 450px;">
                    <span class="input-group-text">Search User</span>
                    <input type="text" required class="form-control" name="id" placeholder="User ID or Name.">
                    <span class="input-group-btn">
                        <button class="btn btn-success" name="search" type="submit"><span
                                class="bi bi-search c-white"></span></button>
                    </span>
                </div>
            </form> -->
            <div class="col py-3">
                <div class="w3-main">
                    <div class="w3-transparent">
                        <h3 class="text-center c-white py-3">User Accounts</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <form action="admin-user-accounts.php" method="GET">
                            <div class="input-group mx-auto" style="width: 450px;">
                                <span class="input-group-text">Search User</span>
                                <input type="text" required class="form-control" name="id"
                                    placeholder="User ID or Name.">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" name="search" type="submit"><span
                                            class="bi bi-search c-white"></span></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <div class="dropdown  ms-auto ms-sm-0 flex-shrink-1 " style="background-color: #EA6D52; border-radius: 10px;">

                            <a href="#" class="d-flex align-items-center text-decoration-none text-dark dropdown-toggle btn"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-circle-plus text-primary"></i>
                                Add User
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="adminAddClient.php">Client</a></li>
                                <li><a class="dropdown-item" href="#">Admin</a></li>
                                <li><a class="dropdown-item" href="adminAddEmployee.php">Employee</a></li>
                                
                            </ul>
                        </div>

                        <div class="d-flex flex-row-reverse">

                        </div>
                    </div>

                </div>
             



            <!-- Modal -->


            <!--    <div class="card mt-3"> -->
            <div class="card-body">
                <form action="" method="POST">
                    <table class="table table-striped table table-bordered">
                        <thead>
                            <tr>


                                <!-- <th scope="col">User ID</th> -->
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <!--<th  scope="col">Last Name</th> -->
                                <!-- <th  scope="col">Suffix</th> -->
                                <th scope="col">Email</th>
                                <th scope="col">User Level</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                            <form action="php/user-list-process.php" method="post">
                                <tr>
                                    <!-- <td class="col-sm-1 col-md-2 col-lg-1">

                                        <div class="col"><?php echo $row['id'] ?></div>
                                    </td> -->
                                    <td class="col-sm-1 col-md-1 col-lg-2">
                                        <div class="col">
                                            <?php echo $row['first_name']  ?></div>
                                    </td>
                                    <td class="col-sm-1 col-md-1 col-lg-2">
                                        <div class="col">
                                            <?php echo $row['last_name']  ?></div>
                                    </td>

                                    <td class=" col-sm-1 col-md-1 col-lg-3">
                                        <div class="col-sm-1">
>>>>>>> 520b4447ede0ada0fb05c4e5393048b5e3c48edb
                                            <?php echo $row['email']; ?>
                                    </td>

                                    <td class=" col-sm-1 col-md-1 col-lg-2">
                                        <div class="col">

                                            <?php echo $row['user_level']  ?></div>
                                    </td>

                                    <td class=" col-sm-1 col-md-1 col-lg-1 ">
<<<<<<< HEAD
                                        <div class="col-sm-1 text-success"><?php  if( $row['status']="verified"){
                                                echo " Verified";
                                                    }; ?></div>
                                        <div class="col-sm-1 text-danger"><?php  if( $row['status']!="verified"){
                                                    echo "Not Verified";
                                                        }; ?></div>

                                            </td>
								 <td class="c-white text-nowrap text-center">
                                                <button data-bs-toggle="modal"
                                                    data-bs-target="#id<?php echo $row['id'];?>" type="button"
                                                    class="btn btn-outline-danger">Delete</button>
                                            </td>
=======
                                        <!-- <td> -->
                                   
                                        <input name="status" readonly class=" text-center " type="text"
                                        style="background-color:transparent;border:0; color: " value="<?php  if( $row['status']!="verified"){
                                                echo "Not Verified";}
                                                else{
                                                    echo "Verified";
                                            }; 
                                        ?>">

                                    </td>
                                    <td class="c-white text-nowrap text-center">
                                        <button data-bs-toggle="modal" data-bs-target="#id<?php echo $row['id'];?>"
                                            type="button" class="btn btn-outline-danger">Archive</button>
                                    </td>
>>>>>>> 520b4447ede0ada0fb05c4e5393048b5e3c48edb

                                    <!-- Modal -->
                                    <div class="modal fade" id="id<?php echo $row['id'] ;?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="id<?php echo $row['id'] ;?>">
                                                        Confirmation:
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <label class="text-center mb-2 mx-auto">Enter Password
                                                        before delete
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
                                            <!-- Modal -->
                                            <div class="modal fade" id="id<?php echo $row['id'] ;?>" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="id<?php echo $row['id'] ;?>">
                                                                Confirmation:
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <label class="text-center mb-2 mx-auto">Enter
                                                                Password
                                                                before delete
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
<<<<<<< HEAD
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="id<?php echo $row['id'] ;?>"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="id<?php echo $row['id'] ;?>">
                                                                        Confirmation:
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <label class="text-center mb-2 mx-auto">Enter
                                                                        Password
                                                                        before delete
                                                                        <span
                                                                            class="fw-bold"><?php echo $row['first_name']; ?>!</span></label>
                                                                    <input type="password" class="form-control"
                                                                        name="password" placeholder="Password"
                                                                        aria-label="Password"
                                                                        aria-describedby="addon-wrapping" required>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="delete_user">Submit</button>
                                                                </div>
                                                            </div>
                                                            
                                        </tr>
                                    </form>
                                    <?php } ?>
                                </tbody>
                            </table>
                    </div>
                </div>
=======

                                </tr>
                            </form>
                            <?php } ?>
                        </tbody>
                    </table>
>>>>>>> 520b4447ede0ada0fb05c4e5393048b5e3c48edb
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="id<?php echo $row['id'] ;?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id<?php echo $row['id'] ;?>">
                        Confirmation:
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <label class="text-center mb-2 mx-auto">Enter Password
                        before delete
                        <span class="fw-bold"><?php echo $row['first_name']; ?>!</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Password"
                        aria-label="Password" aria-describedby="addon-wrapping" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="delete_user">Submit</button>
                </div>
            </div>
        </div>
    </div>                             
</main>

<!--DIVISION -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="/js/script.js"></script>
</body>

</html>
        