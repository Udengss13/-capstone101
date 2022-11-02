<?php 
  $db_admin_account = mysqli_connect('localhost', 'root', '', 'petko_admin_account');
  $con = mysqli_connect('localhost', 'root', '', 'petko_userform');
  // $db_emp = mysqli_connect('localhost', 'root', '', 'petko_employee');
?>

<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='dummy_db';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}