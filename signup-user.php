<?php require_once "controllerUserData.php";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- <script>
    function ageCalculator() {
        var userinput = document.getElementById("DOB").value;
        var dob = new Date(userinput);
        if (userinput == null || userinput == '') {
            document.getElementById("message").innerHTML = "**Choose a date please!";
            return false;
        } else {

            //calculate month difference from current date in time
            var month_diff = Date.now() - dob.getTime();

            //convert the calculated difference in date format
            var age_dt = new Date(month_diff);

            //extract year from date    
            var year = age_dt.getUTCFullYear();

            //now calculate the age of the user
            var age = Math.abs(year - 1970);

            $age = age;

            //display the calculated age
            return document.getElementById("result").innerHTML =
                "Age: " + $age ;
        }
    }
    </script> -->

</head>

<body>
    <!--Navigation Bar-->

    <body
        style="background-image: linear-gradient(to right, rgb(215, 238, 245), rgb(102, 185, 198),rgb(90, 187, 232));">
        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-lg navbar-light ; border-bottom border-secondary" style="background: #1572A1;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="asset/logopet.png" alt="Logo" style="width:19%; height:8vh" /><span
                        style="text-shadow: 3px 3px 3px  black" class="mx-2 text-info fw-bold">PETKO.</span>
                    <span style="border-left: 3px solid rgba(5, 13, 98, 0.767); margin-right: 3px;padding: 3px;">
                    </span>
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
                            <a class="nav-link active text-white" style="border-radius:10px; margin-left:3px;"
                                aria-current="page" href="index.php">HOME</a>
                        </li>
                    </div>
                    <div class="text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="aboutUs.php">ABOUT US</a>
                        </li>
                    </div>
                    <div class="text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="services.php">SERVICES</a>
                        </li>
                    </div>
                    <div class="text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="shop.php">SHOP</a>
                        </li>
                    </div>
                    <div class="text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="petgalery.php">PET GALLERY</a>
                        </li>
                    </div>
                    <!-- <div class=" text-white">
          <?php echo  date("m/d/y") . "<br>"; ?>
        </div> -->
                    <div class="text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="login-user.php">SIGN IN</a>
                        </li>
                    </div>
                </ul>
            </div>
        </nav>

        <!--Sign Up form-->
        <div class="container py-3 mt-5 mb-5 rounded-3">
            <h2 class="text-center text-white">Create Your Account </h2>
            <p class="text-center text-white">It's quick and easy to Petko.</p>

            <form action="signup-user.php" method="POST" autocomplete="">

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
                                <input class="form-control mb-2" type="text" name="first_name" placeholder="First Name"
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

                            <div class="form-floating">
                                <input class="form-control" type="text" name="contact" placeholder="Suffix"
                                    id="floatingSuffix" autocomplete="off">
                                <label for="floatingSuffix">Contact No</label>
                            </div>
                        </div>

                        <!--2nd Column-->
                        <div class="col-6 mt-3">
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

                    <!--2nd Row-->

                    <div class="mt-4">
                        <p style="text-shadow: 1px 1px 1px blue; color:blue; ">Now To continue creating account please,
                            provide all
                            the information about your pets that are
                            need below.</p>
                    </div>

                    <!-- 3rd row -->
                    <div class="row " style="  font-weight: bolder; color: blue;">
                        <div class="col-4">Pet Type:
                            <div class="input-group flex-nowrap">
                                <select class="form-select form-select-md" name="pettype" required>
                                    <option value="dog">Dog </option>
                                    <option value="cat">Cat</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-4">Pet Name:
                            <input class="form-control" type="text" name="petname" placeholder="Pet Name" required
                                id="floatingAddress" autocomplete="off">
                        </div>


                        <div class="col-4"> Pet Breed
                            <div class="input-group flex-nowrap">
                                <select class="form-select form-select-md" name="petbreed" required>
                                    <option value="shittzu" class="text-primary" Disabled>--For Dog-- </option>
                                    <option value="americanbuly">American Bully</option>
                                    <option value="chowchow">Chow Chow</option>
                                    <option value="corgi">Corgi</option>
                                    <option value="englishbulldog">English Bulldog</option>
                                    <option value="frenchbulldog">French Bulldog</option>
                                    <option value="goldentetriever">Golden Retriever</option>
                                    <option value="pomeranian">Pomeranian</option>
                                    <option value="poodle">Poodle</option>
                                    <option value="pug">Pug</option>
                                    <option value="siberianhusky">Siberian Husky</option>
                                    <option value="shittzu">Shih Tzu </option>
                                    <option value="shittzu" Disabled class="text-danger">--For Cat-- </option>
                                    <option value="abyssinian">Abyssinian </option>
                                    <option value="siamese">Siamese</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row " style="  font-weight: bolder; color: blue;">
                        <div>
                            <label for="">Please enter Date of Birth</label>
                            <input type="date" name="petbday" />
                        </div>
                    </div>
                </div>


                <div class="form-group mt-4 text-center">
                    <input class="form-control btn btn-primary w-50 " type="submit" name="signup" value="Signup">
                </div>
                <div class="link login-link text-center text-white">Already a member? <a href="login-user.php"
                        class="text-warning">Login here</a></div>
            </form>
        </div>

    </body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</html>