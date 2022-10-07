<?php
    require("connection.php");

    if(isset($_POST['news'])){
        $title = $_POST['title'];
        $paragraph = $_POST['paragraph'];
        $paragraph = nl2br($paragraph);
        $safe_input = mysqli_real_escape_string($db_admin_account,$paragraph);

        $price = $_POST['price'];
        $category_name = $_POST['category_name'];
       
      
        $filenamedir = "../asset/menu/".$_FILES["photo"]["name"];
        $filename = $_FILES["photo"]["name"];

        // move file to a folder
        if(move_uploaded_file($_FILES["photo"]["tmp_name"], $filenamedir))
        {
            $sql = "INSERT INTO admin_menu (Menu_name, Menu_description, Menu_price, Menu_category,  Menu_dir, Menu_filename) 
            VALUES('$title', '$safe_input', '$price', '$category_name', '$filenamedir', '$filename')";
            mysqli_query($db_admin_account,$sql);
            header("location: ../admin-menu.php");
        }
        else
        {
            header("location: ../admin-menu.php");
        }
    }

    //For deleting menu by ID
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $querymenu = "SELECT * FROM admin_menu WHERE Menu_id=$id"; 
        $resultmenu = mysqli_query($db_admin_account, $querymenu);
        $rowmenu =  mysqli_fetch_array($resultmenu);

        $filedir = $rowmenu['Menu_dir'];

        $sqldelete = "DELETE FROM admin_menu WHERE Menu_id=$id";
        $resultdelete = mysqli_query($db_admin_account, $sqldelete);
        unlink($filedir);
        header("location: ../admin-menu.php");
    }

    
?>