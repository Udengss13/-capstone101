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

<!DOCTYPE html>
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
                <a href="#">
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
                <div class="user-accounts" >
                    <div class="w3-transparent">
                        <h2 class="text-center">User Accounts</h2>
                    </div>
                </div>
            
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
                                            <?php echo $row['email']; ?>
                                            </td>

                                            <td class=" col-sm-1 col-md-1 col-lg-2">
                                            <div class="col">
                                                Client
                                            <!-- <?php echo $row['email']  ?></div> -->
                                            </td>

                                            <td class=" col-sm-1 col-md-1 col-lg-1 ">
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
</body>

</html>
        