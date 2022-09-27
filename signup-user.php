<?php require_once "controllerUserData.php";  




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

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

    <style>
    .mystyle {
        width: 100%;
        padding: 25px;
        background-color: coral;
        color: white;
        font-size: 25px;
        box-sizing: border-box;
    }

    .nav-item {
        margin-left: 3px;
        text-shadow: 2px 2px 2px rgba(49, 44, 44, 0.767);
        /* font-weight: bolder; */
        font-family: montserrat;


    }


    .pettype_box {
        background: white;
        height: 35px;
        border-radius: 10px;
        color: black;
        border-color: transparent;
        padding: 5px;
    }

    .inline {
        display: flex;
        flex-flow: row wrap;
        align-items: center;
    }
    </style>

</head>

<body>

    <body>

        <!--Navigation Bar-->
        <nav class="navbar navbar-expand-lg navbar-light ; ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="asset/logopet.png" alt="Logo" class="logo" />
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
                            <a class="nav-link text-white " style="border-radius:10px; margin-left:3px;"
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

                            <a class="nav-link text-white" href="petgallery.php">PET GALLERY</a>

                        </li>
                    </div>
                    <!-- <div class=" text-white">
         <?php echo  date("m/d/y") . "<br>"; ?>
       </div> -->
                    <div class="text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="login-user.php">SIGN IN</a>
                        </li>
                    </div>

                    <div class="text-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-white bg-primary" href="signup-user.php">SIGN UP</a>
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
                    <div class="row">
                        <div class="col mt-4">
                            <p style="text-shadow: 1px 1px 1px blue; color:blue; ">Now To continue creating account
                                please,
                                provide all
                                the information about your pets that are
                                need below.</p>
                        </div>
                    </div>


                    <div id="dynamic_field">
                        <div class="row inline" id="row">
                            <div class="col-4 ">Pet Type:
                                <!-- <div class=" flex-nowrap"> -->
                                <select class="pettype_box" id="slct1" name="pettype"
                                    onchange="populate(this.id,'slct2')" value="<?php echo $pettype ?>">
                                    <option value=""></option>
                                    <option value="Dog">Dog</option>
                                    <option value="Cat">Cat</option>

                                </select>
                                <!-- </div> -->
                            </div>


                            <div class="col-4"> Pet Breed
                                <!-- <div class=" flex-nowrap"> -->
                                <select class="pettype_box" id="slct2" name="petbreed"></select>
                                <!-- </div> -->
                            </div>

                            <div class="col-4">Pet Name:
                                <input class="form-control pettype_box" type="text" name="petname"
                                    placeholder="Pet Name" required id="floatingAddress" autocomplete="off">
                            </div>
                        </div>



                        <div class="row mt-4">
                            <div class="col-4">Pet Sex:
                                <!-- <div class=" flex-nowrap"> -->
                                <select class="pettype_box" name="petsex">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>

                                </select>

                                <!-- </div> -->
                            </div>
                            <div class="col-4">
                                <div class="form-group mb-3">
                                    <label for="">Date of Birth</label>
                                    <input type="date" name="petbday" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>







                    <div class="form-group mt-4 text-center">
                        <input class="form-control btn  " style="background-color: #EA6D52; width: 20%" type="submit"
                            name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center text-white">Already have an account? <a
                            href="login-user.php" class="text-primary">Login here</a></div>
            </form>
        </div>


    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<div class="row" id="row' + i +
                '"> <div class="col-4">Pet Type:<select id="slct1" name="pettype[]" onchange="populate(this.id,'
                slct2 ')" ><option value="dog">Dog</option>option value="cat">Cat</option> </select><div class="col"><input type="text" class="form-control" name="durchgefuhrte_arbeiten[]"><input class="form-check-input" type="radio" name="f5" id="exampleRadios2" value="option2"><label class="form-check-label" for="exampleRadios1">Ja</label><br><input class="form-check-input" type="radio" name="f5" id="exampleRadios2" value="option2"><label class="form-check-label" for="exampleRadios1">Ja</label> </div> <div class="col"> <input type="text" class="form-control" name="von[]"> </div> <div class="col"> <input type="text" class="form-control" name="bis[]"> </div> <div class="col"> <input type="text" class="form-control" name="std[]"> </div> <di<div class="col"> <td><button type="button" name="add" class="btn btn-danger btn_remove" id="' +
                i + '"><i class="fa fa fa-trash"></i></button></td> </div> </div>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");

            $('#row' + button_id + '').remove();
        });


    });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</html>