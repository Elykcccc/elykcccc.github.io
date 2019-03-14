<?php
	$servername = "localhost";
    $username = "yuen";
    $password = "cZDJ3D3UuorRRirs";
    $dbname = "imaginal";
    $port = 8889;

    $userName=$_POST['userName'];
    $user_password=$_POST['Password'];
    //Check input id and password
    if($userName==''){
    	$message="Please enter User ID";
    	echo "<SCRIPT>alert('$message');</SCRIPT>";
    	echo "<meta http-equiv=REFRESH CONTENT=1;url=login.php>";
    }

    if($user_password==''){
    	$message="Please enter PASSWORD";
    	echo "<SCRIPT>alert('$message');</SCRIPT>";
    	echo "<meta http-equiv=REFRESH CONTENT=1;url=login.php>";
        $conn->close();
    }

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM member WHERE userName = '$userName'";
    $result = $conn->query($sql);

    session_start();

    if($result->num_rows>0) {
    	$rowcount=mysqli_num_rows($result);
    	if($rowcount == 1){
    		while($row = $result->fetch_assoc()){
    			$db_password = $row['Password'];
    			if($user_password == $db_password){
    				$message="Welcome ".$row['UserName'];
                    $_SESSION['user_name'] = $row['UserName'];
                    $_SESSION['user_password'] = $row['Password'];
                    $_SESSION['user_email'] = $row['Email'];
                    $_SESSION['user_phone'] = $row['Phone'];
                    $_SESSION['user_birth'] = $row['Birthday'];
                    $_SESSION['do_question'] = $row['Question'];
                    $_SESSION['imgMember'] = $row['imgMember'];
                    echo "<SCRIPT>alert('$message');</SCRIPT>";
                    echo "<meta http-equiv=REFRESH CONTENT=1;url=index.php>";

    			}else{
    				$message="Wrong MEMBER PASSWORD";
    				echo "<SCRIPT>alert('$message');</SCRIPT>";
    				echo "<meta http-equiv=REFRESH CONTENT=1;url=login.php>";
    			}
    		}
    	}
    } else {
    	//echo "0 results";
    }

    $conn->close();



?>