<!DOCTYPE HTML>
<!--
	Synchronous by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>

<?php header_info(); ?>

<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/skel-noscript.css" />

<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style.css" />

<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style-desktop.css" />

</head>
	<body class="homepage">
		<div id="wrapper">
			
			<!-- Header -->
			<div id="header">
				<div class="container"> 
					
					<!-- Logo -->
					<div id="logo">
						<h1><a href="<?php echo adresas(); ?>"></h1>
						<span>Design by TEMPLATED</span>
					</div>
					
					<!-- Nav -->

                <nav id="nav">

<ul>

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

</nav>


				</div>
			</div>
			<!-- /Header -->
			
			<div id="page">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="sidebar1">
								<header>
									<h2></h2>
								</header>
								<?php include ( "priedai/desines_blokai.php" ); ?>
							</section>
						</div>
						<div class="6u skel-cell-important">
							<section id="content" >
							<?php

								if ( isset( $strError ) && !empty( $strError ) ) {

									klaida( "Klaida", $strError );

								}



								include ( "priedai/centro_blokai.php" );

								include ( $page . ".php" );

								?>
							</section>
						</div>
						<div class="3u">
							<section id="sidebard2">
								<header>
									<h2>Sidebar 2</h2>
								</header>
								<?php include ( "priedai/kaires_blokai.php" ); ?>
								<a href="#" class="button">Full Article</a>
							</section>
						</div>
					</div>

				</div>	
			</div>

			<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="box1">
								<header>
									<h2>Nulla facilisi</h2>
								</header>
								<ul class="style3">
									<li class="first">
										<p class="date"><a href="#">10.03.2012</a></p>
										<p><a href="#">Vestibulum sem magna, elementum ut, vestibulum facilisis. Nulla facilisi. Cum sociis natoque penatibus.</a></p>
									</li>
									<li>
										<p class="date"><a href="#">10.03.2012</a></p>
										<p><a href="#">Pellentesque erat erat, tincidunt in, eleifend, malesuada bibendum. Suspendisse sit amet  in eros bibendum condimentum. </a> </p>
									</li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section id="box2">
								<header>
									<h2>Donec dictum metus</h2>
								</header>
								<div> <a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a> </div>
								<p>Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl.</p>
							</section>
						</div>
						<div class="3u">
							<section id="box3">
								<header>
									<h2>Gravida ipsum</h2>
								</header>
								<ul class="style1">
									<li class="first"><a href="#">Pellentesque quis elit non lectus eleifend purus condimentum.</a></li>
									<li><a href="#">Lorem ipsum dolort, consectetuer adipiscing dictum metus sapien.</a></li>
									<li><a href="#">Phasellus nec dictum metus in sapien pellentesque congue.</a></li>
									<li><a href="#">Cras vitae metus aliquam risus dictum metus in sapien pharetra.</a></li>
									<li><a href="#">Duis non dictum metus in sapien ante in metus commodo euismod lobortis.</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>
			
		</div>
	</body>
</html>