<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">


<!-- <div class="container">
  <div class="nav">
    <ul>
      
      <li>STYLE 3
        <ul class="drop-menu menu-3">
          <li>ONE</li>
          <li>TWO</li>
          <li>THREE</li>
          <li>FOUR</li>
          <li>FIVE</li>
          <li>SIX</li>
        </ul>
      </li>
      
    </ul>
  </div>
</div> -->
	
	<div class="fixed-header">
		<div class="logo-box clearfix">
			<a href="#" class="logo-anchor">
				<img src="<?php echo get_field('Logo_img'); ?>" />
				<h2>
					<b>Global</b>
					<span>Worship Ministries in christ</span>
				</h2>
			</a>
		</div>
			<div class="gwmc-menu-container">
				<?php wp_nav_menu( array( 'theme_location' => '', 'container_class' => '' ) ); ?>
				<ul class="smedia-menu">
					<li>
						<a href="#" class="smedia-share"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
						<ul class="smedia-menu-item">
							<li>
								<a href="" class="smedia-share"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
							</li>
							<li>
								<a href="" class="smedia-share"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
							</li>
							<li>
								<a href="" class="smedia-share"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
							</li>
							<li>
								<a href="" class="smedia-share"><i class="fa fa-youtube" aria-hidden="true"></i><span>Youtube</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		
	</div>

	<div class="container-fluid carousel-container">
		<div class="row">	
			
			<div id="carousel-example-generic" class="carousel slide">
				
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<!-- First slide -->
						<div class="item active" style="background-image: url(<?php echo get_field('Home_carousel_img1'); ?>);">
							<div class="carousel-caption">
								<h3 data-animation="animated bounceInLeft">
								This is the caption for slide 1
								</h3>
								<h3 data-animation="animated bounceInRight">
								This is the caption for slide 1.
								</h3>
								<button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>
							</div>
						</div><!-- /.item -->
						<!-- Second slide -->
						<div class="item" style="background-image: url(<?php echo get_field('Home_carousel_img2'); ?>);">
							<div class="carousel-caption">
								<h3 class="icon-container" data-animation="animated bounceInDown">
								<span class="glyphicon glyphicon-heart"></span>
								</h3>
								<h3 data-animation="animated bounceInUp">
								This is the caption for slide 2
								</h3>
								<button class="btn btn-primary btn-lg" data-animation="animated zoomInRight">Button</button>
							</div>
						</div><!-- /.item -->
							<!-- Third slide -->
						<div class="item" style="background-image: url(<?php echo get_field('Home_carousel_img3'); ?>);">
								<div class="carousel-caption">
									<h3 class="icon-container" data-animation="animated zoomInLeft">
									<span class="glyphicon glyphicon-glass"></span>
									</h3>
									<h3 data-animation="animated flipInX">
									This is the caption for slide 3
									</h3>
									<button class="btn btn-primary btn-lg" data-animation="animated lightSpeedIn">Button</button>
								</div>
						</div><!-- /.item -->
				</div>
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							
			</div>
						
		</div>
	</div>
</div>

			
<!-- .custom-header -->
