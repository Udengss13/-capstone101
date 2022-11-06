<?php

require('connection.php');
session_start();
    if(isset($_POST['update_changes'])){
      $menuid = $_POST['menuid'];
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
          $query = "UPDATE employee_menu SET Menu_name = '$title', Menu_description = '$safe_input', 
          Menu_price = '$price', Menu_category = '$category_name', 
          Menu_dir = '$filenamedir', Menu_filename = '$filename' WHERE Menu_id = '$menuid'";
          

          
          if(mysqli_query($db_admin_account, $query)){

          $_SESSION['update_changes'] = "Your data has been edited successfully";
          header('location: ../employee-edit-menu.php?editid='.$menuid);
          }
        }
        
    }


?>