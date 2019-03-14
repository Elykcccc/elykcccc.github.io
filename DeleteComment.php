<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;
    $NumComment = $_POST["NumComment"];//value here

   
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE forum SET Comment='####Comment have been covered.####' WHERE NumberOfComment='$NumComment'" ;

    //echo $sql;
    if ($conn->query($sql) === TRUE) {
        header('Location:forum.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       

