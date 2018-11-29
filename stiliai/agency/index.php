<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Made One</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" >
        <link rel="stylesheet"  href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">




        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/slick/slick.css"> 
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/slick/slick-theme.css">
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/animate.css">
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/iconfont.css">
        <!-- <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/font-awesome.min.css"> -->
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/bootstrap.css">
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/magnific-popup.css">
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/style.css">
        <!--<link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet"  href="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/responsive.css" />

        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <!-- <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: 1234 5678 90</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: your@email.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/logo.png" class="logo" alt="">
                            <!--<img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                        <?php

                                $limit = 6; //Kiek nuorodų rodome

                                $menuSql  = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "page` WHERE `parent` = 0 AND `show` = 'Y' AND `lang` = " . escape(lang()) . " ORDER BY `place` ASC LIMIT " . $limit );

                                ?>

                                <?php foreach ($menuSql as $menuRow) { ?>

                                <?php if (teises( $menuRow['teises'], $_SESSION[SLAPTAS]['level'])){ ?>

                                    <li>

                                        <a href="<?php echo url('?id,' . (int)$menuRow['id']); ?>">

                                            <?php echo input($menuRow['pavadinimas']); ?>

                                        </a>

                                    </li>

                                <?php } ?>

                                <?php } ?>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>
           

            <!--Home Sections-->
            <?php if ($page ==  'puslapiai/' . $conf['pirminis']) { ?>
                <section id="home" class="home bg-black fix">
                    <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="main_home text-center">
                                    <div class="col-md-12">
                                        <div class="hello_slid">
                                            <?php $sqls = mysql_query1("SELECT * FROM `p5_straipsniai` WHERE`rodoma` = 'TAIP' ORDER BY DATE DESC LIMIT 4;"); 
                                                foreach ($sqls as $row) { ?>
                                                <div class="slid_item">
                                                    <div class="home_text ">
                                                        <h2 class="text-white"><?php echo $row['pav']?></h2>
                                                        <h1 class="text-white"><?php echo $row['t_text']?></h1>
                                                        <h3 class="text-white"><?php echo $row['autorius']?></h3>
                                                    </div>
                                                    <div class="home_btns m-top-40">                              
                                                        <a href="<?php echo url( "?id," . $conf['puslapiai']['straipsnis.php']['id'] . ";m," . $row['id'] . ";" . seo_url( $row['pav'], $row['id'] ) ); ?>" class="btn btn-default m-top-20">Take a Tour</a>
                                                    </div>
                                                </div><!-- End off slid item -->
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div><!--End off row-->
                        </div><!--End off container -->
                    </div>
                </section> <!--End off Home Sections-->
        


                <!--Featured Section-->
                <section id="features" class="features">
                    <div class="container">
                        <div class="row">
                            <div class="main_features fix roomy-70">
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-thumbs-o-up"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h3>Best Quality Design</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                                in sit amet mattis volutpat rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-tablet"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h3>Responsive Design</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                                in sit amet mattis volutpat rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-sliders"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h3>Easy to Customize</h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque eleifend
                                                in sit amet mattis volutpat rhoncus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off row -->
                    </div><!-- End off container -->
                </section><!-- End off Featured Section-->


                <!--Business Section-->
                <section id="business" class="business bg-grey roomy-70">
                    <div class="container">
                        <div class="row">
                            <div class="main_business">
                                <div class="col-md-6">
                                    <div class="business_slid">
                                        <div class="slid_shap bg-grey"></div>
                                        <div class="business_items text-center">
                                            <div class="business_item">
                                                <div class="business_img">
                                                    <img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/about-img1.jpg" alt="" />
                                                </div>
                                            </div>

                                            <div class="business_item">
                                                <div class="business_img">
                                                    <img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/about-img1.jpg" alt="" />
                                                </div>
                                            </div>

                                            <div class="business_item">
                                                <div class="business_img">
                                                    <img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/about-img1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="business_item sm-m-top-50">
                                        <h2 class="text-uppercase"><strong>Made</strong> is Template For Business</h2>
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-right"></i> Clean & Modern Design</li>
                                            <li><i class="fa  fa-arrow-circle-right"></i> Fully Responsive</li>
                                            <li><i class="fa  fa-arrow-circle-right"></i> Google Fonts</li>
                                        </ul>
                                        <p class="m-top-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque eleifend in mi 
                                            sit amet mattis suspendisse ac ligula volutpat nisl rhoncus sagittis cras suscipit 
                                            lacus quis erat malesuada lobortis eiam dui magna volutpat commodo eget pretium vitae
                                            elit etiam luctus risus urna in malesuada ante convallis.</p>

                                        <div class="business_btn">
                                            <a href="" class="btn btn-default m-top-20">Read More</a>
                                            <a href="" class="btn btn-primary m-top-20">Buy Now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End off Business section -->


                <!--product section-->
                <section id="product" class="product">
                    <div class="container">
                        <div class="main_product roomy-80">
                            <div class="head_title text-center fix">
                                <h2 class="text-uppercase">What Client Say</h2>
                                <h5>Clean and Modern design is our best specialist</h5>
                            </div>

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <?php
                                        $sqlf = mysql_query1("SELECT * FROM `p5_galerija`");                                       
                                        $fotonameC = array_chunk( $sqlf, 4);
                                        $i = 0;
                                    ?>
                                    <?php foreach ($fotonameC as $foto) { ?>
                                        <?php $i++; ?>
                                        <div class="item <?php echo ($i == 1 ? 'active' : ''); ?>">
                                            <div class="container">                                                                            
                                                <div class="row">    
                                                    <?php foreach ($foto as $showfoto) { ?>
                                                        <?php $fotoname = $showfoto['file']; ?>
                                                        <div class="col-sm-3">
                                                            <div class="port_item xs-m-top-30">
                                                                <div class="port_img">
                                                                    <img src="images/galerija/<?php echo $fotoname; ?>" alt="" height="230" width="230" />
                                                                    <div class="port_overlay text-center">
                                                                        <a href="images/galerija/<?php echo $fotoname; ?>" class="popup-img">+</a>
                                                                    </div>
                                                                </div>
                                                                <div class="port_caption m-top-20">
                                                                    <h5>Your Work Title</h5>
                                                                    <h6>- Graphic Design</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>  
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div><!-- End off row -->
                    </div><!-- End off container -->
                </section><!-- End off Product section -->



                <!--Test section-->
                <section id="test" class="test bg-grey roomy-60 fix">
                    <div class="container">
                        <div class="row">                        
                            <div class="main_test fix">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="head_title text-center fix">
                                        <h2 class="text-uppercase">Paskutiniai straipsniai</h2>
                                        <h5></h5>
                                    </div>
                                </div>
                                    <?php $sqls = mysql_query1("SELECT * FROM `p5_straipsniai` WHERE`rodoma` = 'TAIP' ORDER BY DATE DESC LIMIT 2;");
                                     ?> <?php $sqlfot = mysql_query1("SELECT * FROM `p5_users`"); 
                                        foreach ($sqls as $row) {
                                            foreach ($sqlfot as $fotkyte) { ?>
                                            <div class="col-md-6">
                                                <a href="<?php echo url( "?id," . $conf['puslapiai']['straipsnis.php']['id'] . ";m," . $row['id'] . ";" . seo_url( $row['pav'], $row['id'] ) ); ?>">
                                                <div class="test_item fix">
                                                    <div class="item_img">
                                                        <img class="img-circle"  src="images/galerija/<?php echo $fotkyte['foto']; ?>" alt="" />
    
                                                        <i class="<?php echo $row['icona']?>"></i>
                                                    </div>

                                                    <div class="item_text">
                                                        <h5><?php echo $row['pav']?></h5>
                                                        <?php $date = date("Y-m-d", $row['date']); ?>
                                                        <h6><?php echo $date?></h6>

                                                        <p><?php echo $row['t_text']?></p>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                </section><!-- End off test section -->
            <?php } else { ?>
                <section id="features" class="features">
                    <div class="container">
                        <?php
                            if ( isset( $strError ) && !empty( $strError ) ) {
                                klaida( "Klaida", $strError );
                            }
                            include ( "priedai/centro_blokai.php" );
                            include $page . '.php';
                        ?>
                    </div>
                </section>             
            <?php } ?>


            <!--Brand Section-->
            <section id="brand" class="brand fix roomy-80">
                <div class="container">
                    <div class="row">
                        <div class="main_brand text-center">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <i class="fas fa-couch"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <i class="fas fa-car-crash"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <i class="fas fa-bible"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <i class="fas fa-bong"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                <i class="fab fa-aws"></i>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                <i class="fas fa-american-sign-language-interpreting"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Brand section -->


            <!--Call to  action section-->
            <section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-8">
                                <div class="action_item text-center">
                                    <h2 class="text-white text-uppercase">Your Promotion Text Will Be Here</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action_btn text-left sm-text-center">
                                    <a href="" class="btn btn-default">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

      

            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">About Us</h5>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet consec tetur adipiscing elit 
                                        nulla aliquet pretium nisi in cursus 
                                        maecenas nec eleifen.</p>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                123 suscipit ipsum nam auctor
                                                mauris dui, ac sollicitudin mauris,
                                                Bandung</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>+1 2345 6789</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>youremail@mail.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/ltst-img-1.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <a href="">21<sup>th</sup> July 2016</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/ltst-img-2.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <a href="">21<sup>th</sup> July 2016</a>
                                        </div>
                                    </div>
                                    <div class="widget_latst_item m-top-30">
                                        <div class="item_icon"><img src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/images/ltst-img-3.jpg" alt="" /></div>
                                        <div class="widget_latst_item_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            <a href="">21<sup>th</sup> July 2016</a>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_service sm-m-top-50">
                                    <h5 class="text-white">Latest News</h5>
                                    <ul class="m-top-20">
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> User Interface Design</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> E- Commerce</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Themes</a></li>
                                        <li class="m-top-20"><a href=""><i class="fa fa-angle-right"></i> Support Forums</a></li>
                                    </ul>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-3">
                                <div class="widget_item widget_newsletter sm-m-top-50">
                                    <h5 class="text-white">Newsletter</h5>
                                    <form class="form-inline m-top-30">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter you Email">
                                            <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                        </div>

                                    </form>
                                    <div class="widget_brand m-top-40">
                                        <a href="" class="text-uppercase">Your Logo</a>
                                        <p>Lorem ipsum dolor sit amet consec tetur 
                                            adipiscing elit nulla aliquet pretium nisi in</p>
                                    </div>
                                    <ul class="list-inline m-top-20">
                                        <li>-  <a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a>  - </li>
                                    </ul>

                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with 
                            <i class="fa fa-heart"></i>
                            by 
                            <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> 
                            2016. All Rights Reserved
                        </p>
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/vendor/bootstrap.min.js"></script>

        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/slick/slick.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/css/slick/slick.min.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/jquery.collapse.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/bootsnav.js"></script>



        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/plugins.js"></script>
        <script src="<?php echo adresas(); ?>stiliai/<?php echo input($conf['Stilius']); ?>/assets/js/main.js"></script>

    </body>
</html>
