<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;
    $img = $_POST["imgMember"];
    session_start();
    $user_password = $_SESSION['user_password'];
    $user_name2 = $_SESSION['user_name'];
    $user_email = $_SESSION['user_email'];
   
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    //echo$user_password."\n";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "UPDATE member SET imgMember='$img' WHERE UserName='$user_name2' AND Email='$user_email'";
    //echo $sql;

    if ($conn->query($sql) === TRUE) {
        $_SESSION['imgMember'] = $img;
            echo "<meta http-equiv=REFRESH CONTENT=1;url=profile.php>";
        //echo "$sql";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       



