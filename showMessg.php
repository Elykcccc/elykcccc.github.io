<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Show Messages</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- self css-->
    <link href="../css/style.css" rel="stylesheet">

    <link href="../css/style2.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top bg-dark" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img src="../images/logo.png" class="logoImage"></a>
            </div>
            <!-- /.navbar-header -->
            <div class="navv">
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                  <a href="product.php">Product</a>
                </li>
                <li class="dropdown">
                  <a href="forum.php">Forum</a>
                </li>
                <li class="dropdown">
                  <a href="questionnaire.php">Questionnaire</a>
                </li> 
                <li class="dropdown">
                  <a href="aboutus.php">About Us</a>
                </li> 
                <li class="dropdown">
                  <a href="contact.php">Contact Us</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><?php 
                            session_start();
                            $user_name2 = $_SESSION['user_name'];
                            $user_email = $_SESSION['user_email'];
                            $user_password = $_SESSION['userPassword'];
                            $user_phone = $_SESSION['user_phone'];
                            $user_birth = $_SESSION['user_birth'];
                            echo $user_name2;
                        ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php                          
                            if($user_name2!=''){
                                if($user_name2=='admin'&& $user_email=='admin@imaginal.com'){
                                    echo "<li><a href='showMessg.php'><i class='fa fa-cog fa-fw'></i> Messages</a></li>
                                    <li><a href='questionnaireTable.php'><i class='fa fa-cog fa-fw'></i> Questionnaire Table</a></li>";
                                }
                                echo "<li><a href='profile.php'><i class='fa fa-cog fa-fw'></i> Profile</a></li>
                                <li class='divider'></li>
                                <li><a href='logout.php'><i class='fa fa-sign-out fa-fw'></i> Logout</a></li>";

                            } else {
                                echo "<li><a href='login.php'><i class='fa fa-sign-in fa-fw'></i> Login</a></li>";
                                    }              
                            ?>
                    </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
            </div>
            <!-- /.navbar-top-links -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="dropdown">
                          <a href="product.php">Product</a>
                        </li>
                        <li class="dropdown">
                          <a href="forum.php">Forum</a>
                        </li>
                        <li class="dropdown">
                          <a href="questionnaire.php">Questionnaire</a>
                        </li> 
                        <li class="dropdown">
                          <a href="aboutus.html">About Us</a>
                        </li> 
                        <li class="dropdown">
                          <a href="contact.php">Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"><?php echo $user_name2;?></i>
                            <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php                          
                                    if($user_name2!=''){
                                        if($user_name2=='admin'&& $user_email=='admin@imaginal.com'){
                                        echo "<li><a href='showMessg.php'><i class='fa fa-cog fa-fw'></i> Messages</a></li>
                                        <li><a href='questionnaireTable.php'><i class='fa fa-cog fa-fw'></i> Questionnaire Table</a></li>";
                                        }
                                    echo "<li><a href='profile.php'><i class='fa fa-cog fa-fw'></i> Profile</a></li>
                                        <li class='divider'></li>
                                        <li><a href='logout.php'><i class='fa fa-sign-out fa-fw'></i> Logout</a></li>";
                                    } else {
                                        echo "<li><a href='login.php'><i class='fa fa-sign-in fa-fw'></i> Login</a></li>";
                                    }              
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Page Content -->
        <section>
            <div id="page-wrapper2 page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                            $servername = "localhost";
                            $username = "yuen";
                            $password = "cZDJ3D3UuorRRirs";
                            $dbname = "imaginal";
                            $port = 8889;

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname, $port);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            } 
                            //echo "Connected successfully";
                            $sql = "SELECT * FROM contactmessg ORDER BY NumberOfMessg DESC";
                            $result = $conn->query($sql);
                                            
                            if ($result->num_rows > 0) {
                                                
                                while($row = $result->fetch_assoc()) {
                                    $NumberOfMessg = $row["NumberOfMessg"];
                                    $Name = $row["Name"];
                                    $Phone= $row['Phone'];
                                    $Email= $row['Email'];
                                    $messg= $row['messg'];
                                    $DateAndTime = $row["DateAndTime"];
                                    $Status= $row['Status'];

                                    if($Status=='unread'){
                                        $bg_color='color-buttonblue';
                                    }else{
                                        $bg_color='color-buttondark';
                                    }
                                    echo"
                        <div class='MsgPcAndMobile'>
                            <div class='contactMsg panel-default bg-dark'>
                                <div class=''>
                                    <button type='button' class='". $bg_color . " panel-heading btn' data-toggle='collapse' data-target='#demo" . $row["NumberOfMessg"] . "' ><div class='NumWidth forumNoOfpc'>#" . $row["NumberOfMessg"] . "</div><div class='forumNoOfpc'>" . $row["Name"] . "</div> <div class='forumDateOfpc'>" . $row["DateAndTime"] . "</div></button>
                                </div>
                                <div class=''>                        
                                    <div id='demo" . $row["NumberOfMessg"] . "' class='MsgOfContact collapse'>
                                    <table width='100%'>
                                        <tr>
                                            <td class='MsgTd MsgTh'><div>Phone:</div></td>
                                            <td class='MsgTd'><div>" . $row["Phone"] . "</div></td>
                                        </tr>

                                        <tr>
                                            <td class='MsgTd MsgTh'><div>Email:</div></td>
                                            <td class='MsgTd'><div>" . $row["Email"] . "</div></td>
                                        </tr>

                                        <tr>
                                            <td class='MsgTd MsgTh'><div>Messages:</div></td>
                                            <td class='MsgTd'><div>" . $row["messg"] . "</div></td>
                                        </tr>
                                        
                                    </table>";
                                    if($Status=='unread'){
                                        echo "<form action='readMsg.php' method='POST'>
                                        <input type='hidden' name='NumMsg' value='" . $row["NumberOfMessg"] . "'>
                                        <input type='hidden' name='have_read' value='read'>
                                        <button type='submit' vlaue='submit' class='btn btn-info'>Read the Messages</button>
                                        </form>";
                                    }
                                    echo"</div>
                                </div>
                            </div>
                        </div>";

                                    }
                                    } else {
                                                echo "0 results";
                                            }

                                            $conn->close();

                                        ?>

                    </div>
                    <!-- /.row -->
                </div>
            <!-- /.container-fluid -->
            </div>
        </section>
        
        <!-- /#page-wrapper -->


    </div>
    <!-- /#wrapper -->

    

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <script src="http://code.jquery.com/jquery-lastest.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>


