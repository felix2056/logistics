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

<div class="page-content fixed centered">
    <div class="container" style="margin-top: -176.5px; margin-left: -570px;">
        <div class="row matchHeight">
            <div class="col-md-4 custom-bkg bkg-dark-blue dark transparent01" style="height: 283px;">
                <div class="custom-heading">
                    <h3>our services</h3>
                </div><!-- .custom-heading end -->

                <ul class="fa-ul">
                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        <a href="#">Overland transportation</a>
                    </li>

                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        <a href="#">Ocean freight</a>
                    </li>

                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        <a href="#">Air freight</a>
                    </li>

                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        <a href="#">Consulting services</a>
                    </li>

                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        <a href="#">Contract logistics</a>
                    </li>

                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        <a href="#">End-to-end solutions</a>
                    </li>
                </ul><!-- .fa-ul end -->
            </div><!-- .col-md-4.custom-bkg.bkg-dark-blue.transparent end -->

            <div class="col-md-4 custom-bkg bkg-dark-blue dark transparent02" style="height: 283px;">
                <div class="custom-heading">
                    <h3>our locations</h3>
                </div><!-- .custom-heading end -->

                <p>
                    Trucking Co. covers over 150 locations all over the
                    globe plus numerous logistic partner companies from
                    different areas of supply chain.
                </p>

                <a class="read-more" href="locations.html">
                    <span>
                        View all locations
                        <i class="fa fa-map-marker"></i>
                    </span>
                </a>
            </div><!-- .col-md-4.custom-bkg.bkg-dark-blue.transparent end -->

            <div class="col-md-4 custom-bkg bkg-dark-blue dark transparent03" style="height: 283px;">
                <div class="custom-heading">
                    <h3>track your load</h3>
                </div><!-- .custom-heading end -->

                <p>
                    Already have a shipping number, please insert it bellow.
                </p>

                <form class="tracking">
                    <input class="package-id" type="text" placeholder="#PACKAGE ID">
                    <input type="submit" class="submit" value="">
                </form>
            </div><!-- .col-md-4.custom-bkg.bkg-dark-blue.transparent end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>