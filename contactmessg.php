<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $messg = $_POST["messg"];

    date_default_timezone_set("Asia/Hong_Kong"); //change the timezone
    $dateAndTime = date("Y-m-d H:i");
   
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO contactmessg (Name, Phone, Email, messg, DateAndTime, Status) VALUES ('$name', '$phone', '$email', '$messg', '$dateAndTime', 'unread')" ;

    //echo $sql;
    
    if ($conn->query($sql) === TRUE) {
        header('Location:index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       