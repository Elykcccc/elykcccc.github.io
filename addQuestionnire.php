<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;

    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];

    session_start();
    $user_name2 = $_SESSION['user_name'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO questionnire (NameOfMember, Q1, Q2, Q3, Q4, Q5, Q6) VALUES ('$user_name2','$q1', '$q2', '$q3', '$q4', '$q5', '$q6')" ;

    //echo $sql;
    if ($conn->query($sql) === TRUE) {
        header('Location:MemberQuestionnaire.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       

