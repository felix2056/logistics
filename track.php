<title>Track Order | <?=$title;?></title>
<?php include __DIR__."/header.php"; 

$today = strtotime(date('Y-m-d'));
if (isset($_GET["id"])) {
    $trackIDs    = explode("\n", $_GET["id"]);
    //debug($trackIDs);
    foreach ($trackIDs as $track) {
        $id      = trim($track);
        $info    = $db->get("track_IDs", "*", ["TrackingID" => $id]);
        if (empty($info)) {
        	$xx .= sprintf(
                '<div class="trackerror"><span class="label label-danger  label-transparent">Invalid Tracking ID: %s</span></div>',
                $id
            );
        } 
        else {
        	$table = TRUE;
        	$design .= sprintf("<tr>
        				<td></td>
        				<td><b>Tracking FOR ID:</td>
        				<td>%s</b></td>
        				<td></td>
        			</tr>",$id);
        	for ($i = 1; $i < 16; $i++) {
                if (strtotime($info["time" . $i]) < $today) {
                    if(empty($info["time" . $i]) || is_null($info["time" . $i])) break;
                    $alert   = $info["text" . $i];
                    $design  .= sprintf("<tr>
                    						<td>%s</td>
                    						<td>%s</td>
                    						<td>%s</td>
                    						<td>%s</td>
                    					</tr>",
                    					$id,
                    					date("M d, Y", strtotime($info["time" . $i])),
                    					date("h:i A", strtotime($info["time" . $i])),
                    					$alert
                    				);
                }
            }
        }
        $design .= "<tr>
        				<td></td>
        				<td></td>
        				<td></td>
        				<td></td>
        			</tr>";
   	}
}
?>
<style>
.trackerror {
    text-align: center;
    margin-bottom: 15px;
}

.trackerror .label {
    font-size: 20px;
}
</style>

<!-- .page-title start -->
<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-top: 116px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$title;?></h1>

                <div class="breadcrumb-container">
                    <ul class="breadcrumb clearfix">
                        <li>You are here:</li>

                        <li>
                            <a href="/">Home</a>
                        </li>

                        <li>
                            <a href="/track.php">Track</a>
                        </li>
                    </ul><!-- .breadcrumb end -->
                </div><!-- .breadcrumb-container end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-title-style01.page-title-negative-top end -->

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="custom-heading02">
                    <h2>Our Locations</h2>
                    <p>
                        We have locations on every part of the globe
                    </p>
                </div><!-- .custom-heading end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->

        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="custom-heading">
                    <h3>ASIA pacific</h3>
                </div><!-- .custom-heading02 end -->

                <ul class="locations-li">
                    <li>
                        <h3>A</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Afganistan
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Australia
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>C</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Cambodia
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                China
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>N</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Nepal
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                New Zeland
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>P</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Papa New Guinea
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Philippines
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>S</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Singapore
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Sri Lanka
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>
                </ul><!-- .locations-li end -->
            </div><!-- .col-md-3 end -->

            <div class="col-md-3 col-sm-3">
                <div class="custom-heading">
                    <h3>EUROPE</h3>
                </div><!-- .custom-heading02 end -->

                <ul class="locations-li">
                    <li>
                        <h3>A</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Austria
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>B</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Belgium
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Bulgaria
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>C</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Cyprus
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Czech Republic
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>F</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Finland
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                France
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>I</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Ireland
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Italy
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>N</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Netherlands
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Norway
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>
                </ul><!-- .locations-li end -->
            </div><!-- .col-md-3 end -->

            <div class="col-md-3 col-sm-3">
                <div class="custom-heading">
                    <h3>america</h3>
                </div><!-- .custom-heading02 end -->

                <ul class="locations-li">
                    <li>
                        <h3>A</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Argentina
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Aruba
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>B</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Bolivia
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Brazil
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>C</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Canada
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Chile
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Costa Rica
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>E</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Ecuador
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                El Salvador
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>P</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Panama
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Peru
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>U</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                United States
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Uruguay
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>V</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Venezuela
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>
                </ul><!-- .locations-li end -->
            </div><!-- .col-md-3 end -->

            <div class="col-md-3 col-sm-3">
                <div class="custom-heading">
                    <h3>middle east &amp; africa</h3>
                </div><!-- .custom-heading02 end -->

                <ul class="locations-li">
                    <li>
                        <h3>A</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Abu Dhabi
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Algeria
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>B</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Bahrain
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>K</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Kenia
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Kuwait
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>

                    <li>
                        <h3>M</h3>

                        <ul class="fa-ul">
                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Madagascar
                            </li>

                            <li>
                                <i class="fa fa-li fa-map-marker"></i>
                                Maroco
                            </li>
                        </ul><!-- .fa-ul end -->
                    </li>
                </ul><!-- .locations-li end -->
            </div><!-- .col-md-3 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<? include __DIR__."/footer.php"; ?>