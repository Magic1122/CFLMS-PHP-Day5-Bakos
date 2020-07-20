<?php 
ob_start();
session_start();
require_once '../dbconnect.php';

// if session is not set this will redirect to login page
if(!isset($_SESSION['admin'])) {
 header("Location: index.php");
 exit;
}

if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit;
}

if ($_POST) {
   $model = $_POST['model'];
   $type = $_POST['type'];
   $color = $_POST['color'];

   $sql = "INSERT INTO car (model, type, color) VALUES ('$model', '$type', '$color')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

   $conn->close();
}

?>

