<?php
//data
$stats = mysql_query1("SELECT
	(SELECT COUNT(*) as total FROM " . LENTELES_PRIESAGA . "kas_prisijunges WHERE timestamp BETWEEN UNIX_TIMESTAMP(NOW() - INTERVAL 1 DAY) AND UNIX_TIMESTAMP()) as siandien,
	(SELECT COUNT(*) as total FROM " . LENTELES_PRIESAGA . "kas_prisijunges WHERE timestamp BETWEEN UNIX_TIMESTAMP(NOW() - INTERVAL 2 DAY) AND UNIX_TIMESTAMP(NOW() - INTERVAL 1 DAY)) as vakar,
	(SELECT COUNT(*) as total FROM " . LENTELES_PRIESAGA . "kas_prisijunges WHERE timestamp BETWEEN UNIX_TIMESTAMP(NOW() - INTERVAL 3 DAY) AND UNIX_TIMESTAMP(NOW() - INTERVAL 2 DAY)) as uzvakar
	LIMIT 1");

$sqli = mysql_query1( "SELECT count(id) as svec,
(SELECT count(id) FROM " . LENTELES_PRIESAGA . "kas_prisijunges WHERE `timestamp`>'" . $timeout . "' AND user!='Svečias') as users, 
(SELECT count(id) FROM " . LENTELES_PRIESAGA . "users) as useriai, 
(SELECT `nick` FROM " . LENTELES_PRIESAGA . "users order by id DESC LIMIT 1 ) as useris,
(SELECT `id` FROM " . LENTELES_PRIESAGA . "users order by id DESC  LIMIT 1 ) as userid,
(SELECT `levelis` FROM " . LENTELES_PRIESAGA . "users order by id DESC  LIMIT 1 ) as lvl
FROM " . LENTELES_PRIESAGA . "kas_prisijunges WHERE `timestamp`>'" . $timeout . "' AND user='Svečias'" );

$sql = $sqli[0];

$progresas = procentai( ( !empty( $stats['uzvakar'] ) ? $stats['uzvakar'] : 1 ), ( !empty( $stats['vakar'] ) ? $stats['vakar'] : 1 ) );
//tree
$data2 = [];
$res   = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "page` WHERE `lang`=" . escape( lang() ) . " ORDER BY `place` ASC" );
foreach($res as $row) {
	if (teises($row['teises'], $_SESSION[SLAPTAS]['level'])) {
		$data2[$row['parent']][] = $row;
	}
}
?>

