<?php require_once "controllerAdmin.php";  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin|| Add Employee</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/emp.css">




</head>

<body>

    <body>



        
        <h2 class="text-center text-white mt-4">Create Employee Account </h2>
            <p class="text-center text-white">It's quick and easy to Petko.</p>



        <!--Sign Up form-->
        <div class="container py-3 mt-5 mb-5 rounded-3">

            <form action="adminAddEmployee.php" method="POST" autocomplete="">

                <!--Message Alert-->
                <?php if(count($errors) == 1){ ?>
                <div class="alert alert-danger text-center">
                    <?php
                foreach($errors as $showerror){
                  echo $showerror;
                }
            ?>
                </div>
                <?php
            }
            elseif(count($errors) > 1){
            ?>
                <div class="alert alert-danger">
                    <?php
              foreach($errors as $showerror){
            ?><ul>
                        <li><?php echo $showerror; ?></li>
                    </ul>
                    <?php
              }
            ?>
                </div>
                <?php
                    }
                    ?>


                <div class="container ">
                    <!--1st row-->
                    <div class="row ">
                        <div class="col-6">
                            <!--FName-->
                            <div class="form-floating mt-3">
                                <input class="form-control mb-2" type="text" name="firstname" placeholder="First Name"
                                    required value="<?php echo $fname ?>" id="floatingFirst" autocomplete="off">
                                <label for="floatingFirst">First Name</label>
                            </div>

                            <!--MName-->
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" name="middle_name" placeholder="Middle Name"
                                    required value="<?php echo $mname ?>" id="floatingMiddle" autocomplete="off">
                                <label for="floatingMiddle">Middle Name</label>
                            </div>

                            <!--LName-->
                            <div class="form-floating">
                                <input class="form-control mb-2" type="text" name="last_name" placeholder="Last Name"
                                    required value="<?php echo $lname ?>" id="floatingLast" autocomplete="off">
                                <label for="floatingLast">Last Name</label>
                            </div>

                            <!--Suffix-->
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" name="suffix" placeholder="Suffix"
                                    value="<?php echo $suffix ?>" id="floatingSuffix" autocomplete="off">
                                <label for="floatingSuffix">Suffix</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" name="contact" placeholder="Suffix"
                                    id="floatingSuffix" autocomplete="off">
                                <label for="floatingSuffix">Contact No</label>
                            </div>

                            <div class="form-group">
                                <!-- <label for="exampleFormControlSelect1">Position</label> -->
                                <select class="form-control" id="exampleFormControlSelect1" name="position" value="<?php echo $position ?>">
                                    <option value="" disabled selected> Select Position ▼ </option>
                                    <option value="veterinarian">Veterinarian</option>
                                    <option value="receptionist">Receptionist</option>
                                </select>
                            </div>

                        </div>

                        <!--2nd Column-->
                        <div class="col-6 mt-3">
                            <!-- ID Number -->
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" name="idno" placeholder="Email Address"
                                    required value="<?php echo $idno ?>" id="floatingEmail" autocomplete="off">
                                <label for="floatingEmail">ID Number</label>
                            </div>
                            <!--Email-->
                            <div class="form-floating mb-2">
                                <input class="form-control" type="email" name="email" placeholder="Email Address"
                                    required value="<?php echo $email ?>" id="floatingEmail" autocomplete="off">
                                <label for="floatingEmail">Email</label>
                            </div>

                            <!--Address-->
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" name="address" placeholder="Address" required
                                    value="<?php echo $address ?>" id="floatingAddress" autocomplete="off">
                                <label for="floatingAddress">Complete Address</label>
                            </div>

                            <!--Password-->
                            <div class="form-floating mb-2">
                                <input class="form-control" type="password" name="password" placeholder="Password"
                                    required id="floatingPass">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <!--Confirm Password-->
                            <div class="form-floating">
                                <input class="form-control" type="password" name="cpassword"
                                    placeholder="Confirm password" required id="floatingConfirm">
                                <label for="floatingConfirm">Confirm Password</label>
                            </div>
                        </div>
                        <!--end of row-->
                    </div>


                    <div class="form-group mt-4 text-center">
                        <input class="form-control btn  " style="background-color: #EA6D52; width: 20%" type="submit"
                            name="signup_emp" value="Signup">
                    </div>
                    <div class="link login-link text-center text-white">Already have an account? <a
                            href="employee.php" class="text-primary">Login here</a></div>
            </form>
        </div>


    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</html>