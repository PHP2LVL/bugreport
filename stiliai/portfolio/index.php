<!DOCTYPE html>
<html lang="en">
  <head>
    <?php header_info(); ?>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/skel-noscript.css" />

<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style.css" />

<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style-desktop.css" />
  </head>

<body>
    <section class="first">
        <div id="openmenu" onclick="toggleMenu()"><i class="meniukas fas fa-bars"></i></div>
        <!-- <div class="menu"> -->

            <ul id="navh">
            <div class="buttonclose" onclick="toggleMenu()"><i class="fas fa-window-close"></i></div>
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
        </div>
        <div class="textbox">
        <h1 class="maintext">Stylish portfolio</h1>
        <h2 class="secondtext"><i>A free Bootstrap Theme by Start Bootstrap</i></h2>
        <button class="button">Find Out More</button>
        </div>
      </div>  
    </section>

    <section class="second">
      <div class="container-fluid flex">  
        <div class="textbox2">
          <h1 class="maintext2">Stylish portfolio is the perfect theme for your next project!</h1>
          <h2 class="secondtext2">This theme features is flexible, UX friendly sidebar menu and stock photos from your friends at <font color="#1d809f">Unsplash!</font></h2>
          <button class="button2">What We Offer</button>
        </div>
      </div>
    </section>

    <section class="third">
      <div class="container">
        <div class="textbox3">
        <h2 class="secondtext3">SERVICES</h2>
        <h1 class="maintext3">What We Offer</h1>
          <div class="row">
          <?php $sqlr = mysql_query1("SELECT * FROM `p5_straipsniai` WHERE`rodoma` = 'TAIP' ORDER BY DATE DESC LIMIT 4;"); 
               foreach ($sqlr as $row) { ?>
              <div class="col-md-3">
                <div class="iconframe">
                <i class="iconos <?php echo $row['icona']?>"></i>
                </div>
                <div class="maintext4"><?php echo $row['pav']?></div>
                <div class="secondtext4"><?php echo $row['t_text']?></div>
              </div>
               <?php } ?> 
              <!-- <div class="col-md-3">
              <div class="iconframe">
                <i class="fas fa-pencil-alt"></i>
              </div>
                <p class="maintext4"><?php echo $row['pav']?></p>
                <p class="secondtext4">Freshly design for Boostrap 4.</p>
              </div>
              <div class="col-md-3">
                <div class="iconframe">
                  <i class="far fa-thumbs-up"></i>
                </div>
                  <p class="maintext4">Favorited</p>
                  <p class="secondtext4">Million of users <i class="far fa-heart"></i> Boostrap!</p>
              
              </div>
              <div class="col-md-3">
                <div class="iconframe">
                  <i class="fas fa-question"></i>
                </div>
                  <p class="maintext4">Question</p>
                  <p class="secondtext4">I have you a question..</p>
              </div> -->
            </div>
        </div>
      </div>
    </section>

        <section class="fourth">
      <div class="container-fluid flex">
        <div class="textbox4">
        <h1 class="maintext5">Welcome to <i>your</i> </h1>
        <h1 class="maintext5">next Website!</h1>
        <button class="button">Download now</button>
        </div>
      </div>  
    </section>

<section class="fifth">
	<div class="container">
        <div class="textbox5">
			<h2 class="secondtext5">PORTFOLIO</h2>
			<h1 class="maintext5">Recent Projects</h1>
          	<div class="row">
				<?php $sqlf = mysql_query1("SELECT * FROM `p5_galerija`");  ?>
				<?php foreach ($sqlf as $foto) {  ?>
					<?php $fotoname = $foto['file']; ?>
						<div class="col-md-6 bg1" style="background-image: url(images/galerija/<?php echo $fotoname ?>)";>
							<div class="photobox">
								<h2 class="maintext6"><?php echo $foto['pavadinimas']?></h2>
								<p class="secondtext6"><?php echo $foto['apie']?></p>
							</div>
						</div> 
				<?php } ?>
            </div>
        </div>
	</div>
</section>


    <section class="seventh">
      <div class="container-fluid flex">  
        <div class="textbox7">
          <h1 class="maintext7">The buttons bellow are impossible to resist...</h1>
          <button class="button7-1">Click me!</button>
          <button class="button7-2">Look at Me!</button>
        </div>
      </div>
    </section>

  <section class="maps">
  <div id="googleMap"></div>
  </section>

<section class="footer">
      <div class="container flex">
        <div class="textboxfooter">
          <div class="row">
              <div class="col-md-4">
                <div class="iconframefooter">
                <i class="fab fa-facebook-f"></i>
                </div>
              </div> 
              <div class="col-md-4">
              <div class="iconframefooter">
                <i class="fab fa-twitter"></i>
              </div>
              </div>
              <div class="col-md-4">
                <div class="iconframefooter">
                  <i class="fas fa-cat"></i>
                </div>      
              </div>
              <p class="copyright">Copyright © Tomas project 2018</p>
        </div>
      </div>
    </section>


</body>

<script src="script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo5MRIGoG0tz8GXK_IKTiW6DLUEXdaL-c&callback=myMap"></script>


</html>