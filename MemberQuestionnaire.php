<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;

    session_start();
    $user_name2 = $_SESSION['user_name'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE member SET Question='1' WHERE UserName='$user_name2'";

    //echo $sql;
    if ($conn->query($sql) === TRUE) {
        $_SESSION['do_question'] = '1';
        header('Location:questionnaire.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       

