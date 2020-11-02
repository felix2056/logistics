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
	.trackerror{
		text-align: center;
		margin-bottom: 15px;
	}
	.trackerror .label {
		font-size: 20px;
	}
</style>
<!-- =-=-=-=-=-=-= PAGE BREADCRUMB =-=-=-=-=-=-= -->
<section class="breadcrumbs-area parallex">
    <div class="container">
        <div class="row">
            <div class="page-title">
                <div class="col-sm-12 col-md-6 page-heading text-left">
                    <h3>track your order</h3>
                    <h2>Order Tracking</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= PAGE BREADCRUMB END =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Tracking History =-=-=-=-=-=-= -->
<section id="order-tracking" class="section-padding-80">
    <div class="container">
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12">
                <!-- Search Filter -->
                <div class="tracking-search">
                    <div class="input-group" id="adv-search">
                      <form>
                        <input type="text" class="form-control" name="id" placeholder="Track Your Shipment" style="width: 90%;"/>
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-primary">
                                	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
                <!-- Search Filter End -->
                <!-- Tracking History -->
                <div class="block-content">
                	<?=$xx;?>
                	<? if($table) { ?>
                    <div class="table-responsive">
                        <table class="table table-clean-paddings margin-bottom-0">
                            <thead>
                                <tr>
                                	<th>Tracking ID</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?=$design;?>
                            </tbody>
                        </table>
                    </div>
                <? } ?>
                </div>
                <!-- Tracking History End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- end container -->
</section>
<!-- =-=-=-=-=-=-= Tracking History End =-=-=-=-=-=-= -->

<? include __DIR__."/footer.php"; ?>
