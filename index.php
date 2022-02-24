<?php include 'config/header.php';
?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('assets/uploads/barber_slider.jpg');">
                <div class="container-fluid">
                    <div class="row">
						<div id="full-width" class="owl-carousel owl-theme">
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center"><br><br><br>
										<h2><strong>ระบบจองคิวตัดผม</strong></h2><br><br><br>
										
										<a href="booking" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">จองคิว</a><br><br><br>
									</div>
								</div>
							</div>
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center"><br><br><br>
                                    <h2><strong>ระบบจองคิวตัดผม</strong></h2><br><br><br>
										<a href="booking" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">จองคิว</a><br><br><br>
									</div>
								</div>
							</div>
							<div class="text-center item">
								<div class="col-md-8 col-md-offset-2 col-sm-12">
									<div class="big-tagline text-center"><br><br><br>
                                    <h2><strong>ระบบจองคิวตัดผม</strong></h2><br><br><br>
										<a href="booking" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">จองคิว</a><br><br><br>
									</div>
								</div>
							</div>
						</div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

            <section class="section nopad cac text-center">
                <a href="#"><h3>ยินดีให้บริการทุกๆท่านที่เดินทางมาตัดผมกับทางร้านนะครับ</h3></a>
            </section>

            <div class="section wb">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="message-box">
                                
    </div><!-- end wrapper -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="assets/js/all.js"></script>
	<script src="assets/js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
    </script>

</body>
</html>