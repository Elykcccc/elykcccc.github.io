<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;

    $NumMsg = $_POST['NumMsg'];
    $have_read = $_POST['have_read'];
    session_start();
    $user_name2 = $_SESSION['user_name'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE contactmessg SET Status='$have_read' WHERE NumberOfMessg='$NumMsg'";

    //echo $sql;
    if ($conn->query($sql) === TRUE) {
        header('Location:showMessg.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       

