<?php
    $servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;
    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userPhone = $_POST["userPhone"];
    $OldPassword = $_POST["OldPassword"];
    $userPassword = $_POST["userPassword"];
    $Birth = $_POST["Birth"];
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
    if($OldPassword==$user_password){
    $sql = "UPDATE member SET Password='$userPassword', Phone='$userPhone', Birthday='$Birth' WHERE UserName='$user_name2' AND Email='$user_email'";
    }
    //echo $sql;

    if ($conn->query($sql) === TRUE) {
            $message="Update  Successful!";

        $_SESSION['user_password'] = $userPassword;
        $_SESSION['user_phone'] = $userPhone;
        $_SESSION['user_birth'] = $Birth;
            echo "<SCRIPT>alert('$message');</SCRIPT>";
            echo "<meta http-equiv=REFRESH CONTENT=1;url=profile.php>";
        //echo "$sql";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     $conn->close();
?>
       



