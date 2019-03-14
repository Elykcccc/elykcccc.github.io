<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;
    $comment = $_POST["comment"];//value here
    session_start();
    $user_name2 = $_SESSION['user_name'];

    date_default_timezone_set("Asia/Hong_Kong"); //change the timezone
    $dateAndTime = date("Y-m-d H:i");
   
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO forum (NameOfMember, DateAndTime, Comment) VALUES ('$user_name2', '$dateAndTime', '$comment')" ;

    //echo $sql;
    if ($conn->query($sql) === TRUE) {
        header('Location:forum.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       

