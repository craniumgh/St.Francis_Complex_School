<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     include 'connect.php';
//     $Name = $_POST['USERNAME'];
//     //$email=$_POST['email'];
//     $Password = $_POST['PASSWORD'];


    $hostname = 'localhost';
    $Username = 'root';
    $password = '';
    $database = 'amu';



    $conn = new mysqli($hostname, $Username, $password, $database);
    if ($conn) {
         echo "connection successful";

        // $sql = "INSERT INTO `registration`(`USERNAME`,`PASSWORD`)values($Name,$Password)";
        // $result = mysqli_query($conn, $sql);
        // if ($result) {
        //     echo " Data inserted";
        // } else {
        //     die(mysqli_error(($conn)));
        // }
     }
     else {
        die(mysqli_error(($conn)));
    }
// } else {
//     echo "fred";
// }?>