<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Skeleton 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php header_info(); ?>
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/skel-noscript.css" />
<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style.css" />
<link rel="stylesheet" href="stiliai/<?php echo input(strip_tags($conf['Stilius'])); ?>/css/style-desktop.css" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.jpg" alt="" />
			<a href="<?php echo adresas(); ?>">.
			<span>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a></span>
		</div>
		<div id="menu">
	<!-- Nav -->

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

		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
		<?php

if ( isset( $strError ) && !empty( $strError ) ) {

	klaida( "Klaida", $strError );

}



include ( "priedai/centro_blokai.php" );

include ( $page . ".php" );

?>
		</div>

		<div id="copyright">
			<span>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a></span>
			<span>Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</span>
		</div>
	</div>
</div>
</body>
</html>
