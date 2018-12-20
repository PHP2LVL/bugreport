<?php
// include 'functions/functions.bugreport.php';



if(isset($url['item'])){
    if(is_numeric($url['item']) && (int)$url['item'] > 0) {
        $bugId = (int)$url['item'];
    ?>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Jusu klaidos informacija
                            </h2>
                        </div>
                        <div class="body clearfix">
                            <?php
                                $reportedBug = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "bugs` WHERE `id`=$bugId LIMIT 1" );

                                echo '<strong>Klaidos aprašymas:</strong> ' . $reportedBug['description'] . '<br>';
                                $issueId = $reportedBug['report_id'];
                                $testas = getReportedIssueInfo($issueId);
                                $info = json_decode($testas, true);

                                $mil = $info['created'];
                                $seconds = $mil / 1000;
                                echo '<strong>Užregistruota -</strong> ' . date("Y-m-d H:i:s", $seconds) . '<br>';
                                
                                $mil2 = $info['updated'];
                                $seconds2 = $mil2 / 1000;
                                if($info['updated'] !== $info['created']){
                                    echo '<strong>Atnaujinta -</strong> ' . date("Y-m-d H:i:s", $seconds2) . '<br>';
                                } else {
                                    
                                }
                                
                                if($info['resolved'] != null){                                    
                                    echo '<strong>Statusas:</strong> ';?><span class="label bg-green"><?php echo 'Sutvarkyta';?></span><?php
                                } else if($info['updated'] > $info['created']){
                                    echo '<strong>Statusas:</strong> ';?><span class="label bg-orange"><?php echo 'Tvarkoma';?></span><?php
                                } else if ($info['created'] == $info['updated']){
                                    echo '<strong>Statusas:</strong> ';?><span class="label bg-red"><?php echo 'Užregistruota';?></span><?php
                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
        notifyMsg(
            [
                'type'		=> 'error',
                'message' 	=> $lang['system']['no_items']
            ]
        );
    }
} else { ?>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Visi reportinti bugai
                        </h2>
                    </div>
                    <div class="body clearfix">
                        <?php 
                            $allReports = mysql_query1( "SELECT * FROM `" . LENTELES_PRIESAGA . "bugs`" );                                
                            foreach ($allReports as $key) {
                                $issueId = $key['report_id'];
                                $summary = getReportedIssueInfo($issueId);
                                $issueSummary = json_decode($summary, true);
                                $bugId = $key['id']; ?>
                                <a href="<?php echo url('?id,' . $url['id'] . ';a,' . $url['a'] . ';item,' . $bugId); ?>"><div class="card"><?php echo $issueSummary['summary'];?></div></a><?php                            
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php
}