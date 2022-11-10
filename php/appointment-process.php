<?php
    require("connection.php");

    $user_id = $_SESSION['user_id'];

    if(isset($_POST['appoint'])){
        

        $service = $_POST['service'];
        $appointdate = date('Y-m-d', strtotime($_POST['appointdate']));

        // $input = $_POST['input'];
        $appointtime = date('h:i A', strtotime($_POST['appointtime']));
        $petname = $_POST['petname'];


            $sql = "INSERT INTO client_appointment (service, appoint_date, appoint_time, petname, user_id) 
            VALUES('$service', '$appointdate', '$appointtime', '$petname', '$user_id' )";
            mysqli_query($con,$sql);            
            echo  'ok' ;
        
            
  
    }
    // //For deleting menu by ID
    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    //     $querymenu = "SELECT * FROM admin_menu WHERE Menu_id=$id"; 
    //     $resultmenu = mysqli_query($con, $querymenu);
    //     $rowmenu =  mysqli_fetch_array($resultmenu);

    //     $filedir = $rowmenu['Menu_dir'];

    //     $sqldelete = "DELETE FROM admin_menu WHERE Menu_id=$id";
    //     $resultdelete = mysqli_query($con, $sqldelete);
    //     unlink($filedir);
    //     echo '<script> alert("Product Deleted Succesfully");
    //     window.location.href="../employee-menu.php";
    //     </script>'; 
    // }

    
?>