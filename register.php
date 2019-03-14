<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Imaginal</title>

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Animate.css -->
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
    <!--link rel="stylesheet" type="text/css" href="css/default.css" /-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/parallax.css" />
    <!--link rel="stylesheet" type="text/css" href="css/arcss.css" /-->

    <link rel="stylesheet" type="text/css" href="css/media-queries.css" /-->
    <!--link rel="stylesheet" type="text/css" href="css/thestyle.css" /-->

    <!--link rel="stylesheet" type="text/css" href="css/normalize.css" /-->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/arrowcomponent.css" /-->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900" rel="stylesheet">

    <style>
    
    #sectionRegister {
        background-image: url(images/logimg.jpg);
        margin: 0 auto;
        padding-top: 250px;
    }

    </style>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
    <script type="text/javascript" src="vendors/scrolloverflow.js"></script>

    <script type="text/javascript" src="vendors/jquery.easings.min.js"></script>
    <script type="text/javascript" src="vendors/fullpage.parallax.limited.min.js?v=3"></script>
    <script type="text/javascript" src="vendors/jquery.fullpage.extensions.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            initialize(false);

            function initialize(hasScrollBar){
            $('#fullpage').fullpage({

                anchors: ['homePage', 'firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'firstSlide', 'secondSlide'],
                verticalCentered: false,
                menu: '#main-nav',
                css3: true,
                navigation: false,
                navigationPosition: 'right',
                navigationTooltips: ['Index', 'Product', 'Forum', 'Questionaire', 'About Us', 'Contact Us'],
                parallaxKey: 'YWx2YXJvdHJpZ28uY29tXzlNZGNHRnlZV3hzWVhnPTFyRQ==',
                parallaxOptions: {
                    type: 'reveal',
                    percentage: 62,
                    property: 'translate'
                },
                scrollingSpeed: 1000,
                dragAndMove: true,
                dragAndMoveKey: 'YWx2YXJvdHJpZ28uY29tX0EyMlpISmhaMEZ1WkUxdmRtVT0wWUc=',
                //scrollBar: true
            });
        }

        $('#turnOn').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
            $.fn.fullpage.parallax.init();
        });

        $('#turnOff').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
            $.fn.fullpage.parallax.destroy();
        });

        // Applying the different options when changing the select boxes
        $("select").change(function (){
            var fullPageOption = $(this).data('option');
            var value = $(this).val();

            if(fullPageOption === 'offset'){
                $.fn.fullpage.parallax.setOption('offset', value);
            }

            else if(fullPageOption === 'type'){
                $.fn.fullpage.parallax.setOption('type', value);
            }

            else if(fullPageOption === 'autoScrolling'){
                $.fn.fullpage.setAutoScrolling(value === 'true');
            }

            // scrollBar
            // Because there's no method `setScrollBar` we have to destryo and initialice fullPage.js again
            // but this time we'll initialice it again with the scrollBar:true option
            else{
                $.fn.fullpage.destroy('all');
                initialize(value === 'true');
            }
        });

    });
    </script>

    <script type="text/javascript">

    function themifyMobileMenuTrigger(e) {
        if( document.body.clientWidth <= tf_mobile_menu_trigger_point ) {
            document.body.classList.add( 'mobile_menu_active' );
        } else {
            document.body.classList.remove( 'mobile_menu_active' );
        }
    }
    themifyMobileMenuTrigger();
    document.addEventListener( 'DOMContentLoaded', function () {
        jQuery( window ).on('tfsmartresize.tf_mobile_menu', themifyMobileMenuTrigger );
    }, false );

    </script>

    <script type="text/javascript" defer>
        var tf_mobile_menu_trigger_point = 1200;
    </script>

</head>
        <body class="home page-template-default page page-id-2883 page-parent themify-fw-3-3-7 fullpane-1-9-8 skin-default webkit not-ie full_width sidebar-none no-touch query-section full-section-scrolling menubar-bottom builder-parallax-scrolling-active data-target="#navbar-spy" data-spy="scroll"">

            <!--div id="headerwrap">
                ABCCCC
            </div-->
            

            <div id="fullpage">

                <div class="section" id="sectionRegister">
                
                    <div id="page-wrapper2 page-wrapper">
            <div class="container-fluid">
                <div class="row">
                <!-- vet logo -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <!-- name -->
                            </div>
                            <div class="panel-body">
                              <div class="form-login">
                                <h4>Register</h4>
                                <form action="checkregister.php" method="POST">
                                <input type="text" name="userName" class="form-control input-sm chat-input" placeholder="Username">
                                <input type="password" name="userPassword" class="form-control input-sm chat-input" placeholder="Password">
                                <input type="password" name="userConfirmPassword" class="form-control input-sm chat-input" placeholder="Confirm password">
                                <input type="text" maxlength="8" name="userPhone" class="form-control input-sm chat-input" placeholder="PhoneNo">
                                <input type="email" name="userEmail" class="form-control input-sm chat-input" placeholder="Email">
                                <div class="radio-inline">
                                <label><input type="radio" name="optradio" value="Male"> Male</label></div><div>
                                <label><input type="radio" name="optradio" value="Female"> Female</label>
                                </div>
                                <br>
                                <label>Date of Birth: </label><input type="date" class="form-control" name="Birth">
                                <hr>
                                <div class="wrapper">
                                <button type="submit" class="btn btn-success btn-md">Submit</button>
                                </div>
                               
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
                    
                </div>

            </div>
            

            <div id="footer">
                <header id="header" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

                    <div id="site-logo">
                        <a href="indexnew.html">
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
                                    <li id="menu-item-2891" data-menuanchor="firstPage"><a href="index.php#fifthPage">Contact Us</a></li>
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



        </body>
</html>