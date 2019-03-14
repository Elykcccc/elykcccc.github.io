<?php
	$servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;

    $user_name=$_POST['userName'];
    $user_password=$_POST['userPassword'];
    $user_password2=$_POST['userConfirmPassword'];
    $user_phoneNumber=$_POST['userPhone'];
    $user_Email=$_POST['userEmail'];
    $user_optradio=$_POST['optradio'];
    $user_Birth = $_POST["Birth"];

    //check input whether null
        if($user_name==''){
        	$message="Please enter USER NAME";
        	echo "<SCRIPT>alert('$message');</SCRIPT>";
        	echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

        if($user_password=='') {
        	$message="Please enter PASSWORD";
        	echo "<SCRIPT>alert('$message');</SCRIPT>";
        	echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

        if($user_password2=='') {
        	$message="Please enter CONFIRM PASSWORD";
        	echo "<SCRIPT>alert('$message');</SCRIPT>";
        	echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

        if($user_phoneNumber=='') {
            $message="Please enter PHONE NUMBER";
            echo "<SCRIPT>alert('$message');</SCRIPT>";
            echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

        if($user_Email=='') {
            $message="Please enter EMAILL";
            echo "<SCRIPT>alert('$message');</SCRIPT>";
            echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

        if($user_optradio=='') {
            $message="Please enter YOUR SEX";
            echo "<SCRIPT>alert('$message');</SCRIPT>";
            echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

        if($user_Birth=='') {
            $message="Please enter BIRTHDAY";
            echo "<SCRIPT>alert('$message');</SCRIPT>";
            echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

        $conn = new mysqli($servername, $username, $password, $dbname, $port);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if($user_password==$user_password2 && $user_password!=null) {
        	
        	$sql="INSERT INTO member (UserName, Password, Phone, Email, Sex, Birthday, Question, imgMember) VALUES ('$user_name', '$user_password', '$user_phoneNumber', '$user_Email', '$user_optradio', '$user_Birth', '0', 'human')";
        	echo $sql;
            if(mysqli_query($conn, $sql)) {
        		header('Location:index.html');
        	} else {
        		echo "Error inserting record:".mysqli_error($conn);
        	}
        	
        } else {
        	$message="Please confirm your PASSWORD";
        	echo "<SCRIPT>alert('$message');</SCRIPT>";
        	echo "<meta http-equiv=REFRESH CONTENT=1;url=register.php>";
        }

    mysqli_close($conn);

?>