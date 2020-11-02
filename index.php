<?php include __DIR__."/header.php"; ?>
<title><?=$title;?></title>

    <!-- =-=-=-=-=-=-= HOME Banner =-=-=-=-=-=-= -->
<div class="hero-3 full-section " id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>Track Your Shipment</h2>
          <p class="lead"><?=$slider1;?></p>
          <div class="form">
            <form action="track.php">
            	<textarea name="id" class="form-control" placeholder="Enter Your Tracking ID(s), one per line." style="height: 150px;" required></textarea>
                <button>Track</button>
            </form>
            <span class="declaration"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--======= HOME Banner END =========-->

    <!-- =-=-=-=-=-=-= Call To Action =-=-=-=-=-=-= -->
    <div class="parallex-small ">
        <div class="container">
            <div class="row custom-padding-20 ">
                <div class="col-md-8 col-sm-8">
                    <div class="parallex-text">
                        <h4>24/7, 365 days Worldwide Logistic Service</h4>
                    </div>
                    <!-- end subsection-text -->
                </div>
                <!-- end col-md-8 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- =-=-=-=-=-=-= Call To Action End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Services =-=-=-=-=-=-= -->
     <section class="custom-padding services white">
        <div class="container">
         <!-- title-section -->
            <div class="main-heading text-center">
                <h2>our services</h2>
                <p><?=$slider1_title;?></p>
                <div class="ozy-content-divider " style="border-top-style:solid;border-top-width:2px;border-top-color:#34ccff;width:40px;max-width:40px;margin:20px auto;"></div>
            </div>
            <!-- End title-section -->
            <!-- Row -->
            <div class="row services-row">
                <div id="services-2">
                    <!-- Service Item List -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <!-- services grid -->
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-box-of-packing-for-delivery"></i></div>
                            <h4 class="content-color">packaging and storage</h4>
                            <p><?=$service1;?></p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-ocean-transportation"></i></div>
                            <h4>cargo</h4>
                            <p><?=$service2;?></p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-delivery-truck"></i></div>
                            <h4>worldwide transport </h4>
                            <p><?=$service3;?></p>
                        </div>
                    </div>

                    <div class="clearfix  hidden-sm"></div>
                    <!-- Service Item List -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <!-- services grid -->

                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-view-symbol-on-delivery-opened-box"></i></div>
                            <h4>ware housing</h4>
                            <p><?=$service4;?></p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-sea-ship-with-containers"></i></div>
                            <h4>Sea Freight</h4>
                            <p><?=$service5;?></p>
                        </div>
                    </div>
                    <!-- services grid -->
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="services-grid">
                            <div class="icons"> <i class="flaticon-24-hours-symbol"></i></div>
                            <h4>Door To Door Devivery </h4>
                            <p><?=$service6;?></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Service Item List End -->
                </div>
            </div>
            
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Our Services-end =-=-=-=-=-=-= -->
<? include __DIR__."/footer.php"; ?>