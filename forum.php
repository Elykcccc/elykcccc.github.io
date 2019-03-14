<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Questionnaire</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- self css-->
    <link href="css/test1.css" rel="stylesheet">

    <link href="css/test2.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />

    <link rel="stylesheet" type="text/css" href="css/parallax.css" />
    <!--link rel="stylesheet" type="text/css" href="css/arcss.css" /-->

    <link rel="stylesheet" type="text/css" href="css/media-queries.css" /-->
    <!--link rel="stylesheet" type="text/css" href="css/thestyle.css" /-->

    <!--link rel="stylesheet" type="text/css" href="css/normalize.css" /-->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/arrowcomponent.css" /-->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <div id="footer">
                <header id="header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

                    <div id="site-logo">
                        <a href="index.php">
                            <span>Imaginal</span>
                        </a>
                    </div>

                    <div id="site-description" class="site-description">
                        <span>AR Video</span>
                    </div>
            
                    <div id="menu-icon" class="mobile-button">Menu</div>
                        
                        <div id="mobile-menu" class="clearfix sidemenu sidemenu-off">

                        <a id="menu-icon-close" href="#slide-nav"></a>

                        

                        <div id="main-nav-wrap">

                            <nav itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement" id="navbar-spy">
                                <ul id="main-nav" class="main-nav menu-name-home-menu">
                                    <li id="menu-item-2887" data-menuanchor="firstPage"><a href="index.php#homePage">Home</a></li>
                                    <li id="menu-item-2888" data-menuanchor="secondPage"><a href="index.php#firstPage">AR Kit</a></li>
                                    <li id="menu-item-2888" data-menuanchor="secondPage"><a href="index.php#secondPage">Features</a></li>
                                    <li id="menu-item-2889" data-menuanchor="thirdPage"><a href="index.php#thirdPage">Forum</a></li>
                                    <li id="menu-item-2890" data-menuanchor="fourthPage"><a href="index.php#fourthPage">Questionire</a></li>
                                    <li id="menu-item-2891" data-menuanchor="firstPage"><a href="index.php#fifthPage">Contact us</a></li>
                                    <li id="menu-item-2895" class=""><a href="#">Login &nbsp / &nbsp Register

                                        <?php 
                                            session_start();
                                            $user_name2 = $_SESSION['user_name'];
                                            $user_email = $_SESSION['user_email'];
                                            $user_password = $_SESSION['userPassword'];
                                            $user_phone = $_SESSION['user_phone'];
                                            $user_birth = $_SESSION['user_birth'];
                                            echo $user_name2;
                                        ?>
                                                                                            </a>

                                        <ul class="sub-menu">

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

                            </nav>
                        </div>

                        <!--div class="memberSys">
                            <span><a href="">Login</a> &nbsp / &nbsp <a href="">Register</a></span>
                        </div-->
                    </div>

                </header>
            </div>
        



        <!-- Page Content -->
        <section>
            <div id="page-wrapper2 page-wrapper">
                <div class="container-fluid">
                    <div class="row" style="color: #000;">
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
                            $sql = "SELECT NumberOfComment, NameOfMember, DateAndTime, Comment, imgMember FROM forum LEFT JOIN member ON forum.NameOfMember=member.UserName ORDER BY NumberOfComment";
                            $result = $conn->query($sql);
                                            
                            if ($result->num_rows > 0) {
                                                
                                while($row = $result->fetch_assoc()) {
                                    $NumberOfComment = $row["NumberOfComment"];
                                    $NameOfMember = $row["NameOfMember"];
                                    $DateAndTime = $row["DateAndTime"];
                                    $Comment= $row['Comment'];
                                    $imgMember = $row['imgMember'];
                                    echo"
                        <div class='col-lg-12 forumOfpc'>
                            <div class='panel panel-default'>
                                <div class='panel-body'>
                                    <table>
                                        <tr>
                                            <td class='tdOfpc'>" . $row["NameOfMember"] . "</td>
                                            <td class='tdOfpc tdwidth'>
                                                <div class='forumNoOfpc'>#" . $row["NumberOfComment"] . "</div>
                                                <div class='forumDateOfpc'>" . $row["DateAndTime"] . "</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='tdOfpc tdImgOfpc'>
                                                <img src='../images/".$row['imgMember'].".png' class='imgForumOfpc'>
                                            </td>
                                            <td class='tdOfpc tdOfComment'>
                                                <div>" . $row["Comment"] . "</div>
                                            </td>
                                        </tr>
                                    </table>";
                                    if($user_name2=='admin' && $user_email=='admin@imaginal.com' && $row["Comment"]!='####Comment have been covered.####'){
                                        echo"<form action='DeleteComment.php' method='POST'>
                                        <input type='hidden' name='NumComment' value='".$NumberOfComment."'>
                                            <button type='submit' value='Delete' class='forumDateOfpc'>Delete the comment</button>
                                        </form>";
                                    }
                                echo"</div>
                            </div>
                        </div>

                        <div class='col-lg-12 forumOfMobile'>
                            <div class='panel panel-default'>
                                <div class='panel-body'>
                                    <table>
                                        <tr>
                                            <td>
                                                <img src='../images/".$row['imgMember'].".png' class='imgForumOfMobile'>
                                            </td>
                                            <td class='tdlistOfMobile'>
                                                <div class='NameInMobile'>" . $row["NameOfMember"] . "</div>
                                                <div class='forumNoOfMobile' '>#" . $row["NumberOfComment"] . "</div>
                                                <div class='forumDateOfMobile'>" . $row["DateAndTime"] . "</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan='2' class='tdOfComment'>
                                                <div>" . $row["Comment"] . "</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>";
                                    }
                                    } else {
                                                echo "0 results";
                                            }

                                            $conn->close();

                                        ?>
                                
                                            <?php
                                            if($user_name2!=''){
                                    echo"

                        <div class='col-lg-12'>
                            <div class='panel panel-default'>
                                <div class='panel-body'>
                                    <table>
                                        <tr><form action='addComment.php' method='POST'>
                                                <textarea class='form-control' id='comment' rows='5' maxlength='1000' name='comment'></textarea>
                                                <button type='submit' class='btn btn-success'>Submit</button>
                                            </form>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>";
                                            }
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


