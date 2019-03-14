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

    <style type="text/css">

        .have_done{
            display: none;
        }

        #wrapper {
            margin: 0;
        }

    </style>

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
                                    <li id="menu-item-2887" data-menuanchor="firstPage"><a href="index.php">Home</a></li>
                                    <li id="menu-item-2888" data-menuanchor="secondPage"><a href="index.php#firstPage">AR Kit</a></li>
                                    <li id="menu-item-2888" data-menuanchor="secondPage"><a href="index.php#secondPage">Features</a></li>
                                    <li id="menu-item-2889" data-menuanchor="thirdPage"><a href="index.php#thirdPage">Forum</a></li>
                                    <li id="menu-item-2890" data-menuanchor="fourthPage"><a href="index.php#fourthPage">Questionire</a></li>
                                    <li id="menu-item-2891" data-menuanchor="fifthPage"><a href="index.php#fifthPage">Contact Us</a></li>
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

                </header>
            </div>



        <!-- Page Content -->
        <div id="page-wrapper2 page-wrapper" style="color: #000000;">
            <div class="container-fluid">
                <div class="row">
                <!-- vet logo -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <div>
                                <h1>Questionnaire</h1>
                              </div>
                            </div>
                            
                            <div class="<?php if($do_question == 1 or $user_name2==''){echo"have_done";}?> panel-body">
                              <form action="addQuestionnire.php" method="POST">
                                <div class="col-md-12 question">
                                    <div>
                                        <h3 class="questionH3">Q1. What is the satisfaction with my app?</h3>
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q1" value="1"> Very satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q1" value="2"> Satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q1" value="3"> general
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q1" value="4"> Not satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q1" value="5"> Very not satisfied
                                    </div>
                                </div>

                                <div class="col-md-12 question">
                                    <div>
                                        <h3 class="questionH3">Q2. What is the satisfaction with our interface design?</h3>
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q2" value="1"> Very satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q2" value="2"> Satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q2" value="3"> General
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q2" value="4"> Not satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q2" value="5"> Very not satisfied
                                    </div>
                                </div>

                                <div class="col-md-12 question">
                                    <div>
                                        <h3 class="questionH3">Q3. Do you satisfaction on the user-friendly of our app?</h3>
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q3" value="1"> Very satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q3" value="2"> Satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q3" value="3"> General
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q3" value="4"> Not satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q3" value="5"> Very not satisfied
                                    </div>
                                </div>
                                <div class="col-md-12 question">
                                    <div>
                                        <h3 class="questionH3">Q4. What is the Practicality on our app?</h3>
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q4" value="1"> Very satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q4" value="2"> Satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q4" value="3"> General
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q4" value="4"> Not satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q4" value="5"> Very not satisfied
                                    </div>
                                </div>

                                <div class="col-md-12 question">
                                    <div>
                                        <h3 class="questionH3">Q5. What is the satisfaction with  the 3D model chooses?</h3>
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q5" value="1"> Very satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q5" value="2"> Satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q5" value="3"> General
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q5" value="4"> Not satisfied
                                    </div>
                                    <div class="col-md-2 questionRadio">
                                        <input type="radio" name="q5" value="5"> Very not satisfied
                                    </div>
                                </div>

                                <div class="col-md-12 question">
                                    <div>
                                        <h3 class="questionH3">Q6.Something need to improve on our servce?</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="questionTextArea" rows="5" name="q6"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn_questionnaire">Submit</button>
                                </div>
                                
                              </form>
                            </div>
                            <div class="<?php if($do_question == 0 or $user_name2==''){echo"have_done";}?> panel-body">
                              <h1>You do not have questionnaire.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
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


