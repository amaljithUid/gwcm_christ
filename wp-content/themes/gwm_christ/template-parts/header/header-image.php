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
								<h3>Global Worship Ministries in</h3>
								<h2>Christ</h2>
								<div class="bible-quotes1">
									<h5>
										But of him are ye in Christ Jesus, who of God is made unto us wisdom,
										and righteousness, and sanctification, and redemption
										<b>1 Corinthians 1:30</b>
									</h5>
									
								</div>
							</div>
						</div><!-- /.item -->
						<!-- Second slide -->
						<div class="item" style="background-image: url(<?php echo get_field('Home_carousel_img2'); ?>);">
							<div class="carousel-caption">
								<h3>Global Worship Ministries in</h3>
								<h2>Christ</h2>
								<div class="bible-quotes1">
									<h5>
										But of him are ye in Christ Jesus, who of God is made unto us wisdom,
										and righteousness, and sanctification, and redemption
										<b>1 Corinthians 1:30</b>
									</h5>
									
								</div>
							</div>
						</div><!-- /.item -->
							<!-- Third slide -->
						<div class="item" style="background-image: url(<?php echo get_field('Home_carousel_img3'); ?>);">
								<div class="carousel-caption">
								<h3>Global Worship Ministries in</h3>
								<h2>Christ</h2>
								<div class="bible-quotes1">
									<h5>
										But of him are ye in Christ Jesus, who of God is made unto us wisdom,
										and righteousness, and sanctification, and redemption
										<b>1 Corinthians 1:30</b>
									</h5>
									
								</div>
							</div>
						</div><!-- /.item -->
				</div>

				<div class="">
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</a>
							
			</div>
						
		</div>
	</div>
</div>

			
<!-- .custom-header -->
