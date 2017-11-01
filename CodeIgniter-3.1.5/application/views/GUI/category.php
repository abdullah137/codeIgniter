<?php include "includes/header.php"; ?>

	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
     					<li><a href="#">Home</a></li>
     					<li><a href="#"><?php echo $record->category; ?></a></li>
     				</ol>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Page title end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<div class="block category-listing category-style2">
						<h3 class="block-title"><span><?php echo $record->category; ?></span></h3>

						<div class="row">
							<?php
							$admin_id = $record->admin_id;
							$query = $this->db->query("SELECT * FROM admin, news WHERE admin.id = '$admin_id' AND news.category = '$record->category' ORDER BY date DESC LIMIT 1");
							$row = $query->row();
							foreach ($query->result_array() as $row):
							$image = $row['image'];
							$id = $row['id'];
								$name = $row['name'];
							?>
							<div class="col-md-12 col-sm-12">
								<div class="post-block-style top-larget-post clearfix">
									<div class="post-thumb">
										<?php
										if($row['file_type'] == 'image') {
											echo '<img class="img-responsive" src="'.base_url('admin_resources/uploads/pictures/'.$image.'').'" alt="" />';
										}else {
											echo '<div class="flowplayer" data-swf="base_url(user_resources/flowplayer.swf)" data-ratio="0.4167">
										<video controls autoplay>
											<source type="video/mp4" src="uploads/'.$image.'">
										</video>
									</div>';
										}
										?>
									</div>
									<?php echo anchor("user_index/category/{$row['category']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
									<div class="post-content">
							 			<h2 class="post-title title-large">
											<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#"><?php echo $name; ?></a></span>
							 				<span class="post-date"><?=$row['date']?></span>
							 				<span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
											<a href="#" class="comments-link"><span>03</span></a></span>
							 			</div>
							 			<p><?php echo substr($row['description'], 0, 300); ?> ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Col end -->
							<?php endforeach; ?>
						</div><!-- Top Big post end -->

						<?php
						$admin_id = $record->admin_id;


						$query_f = $this->db->query("SELECT * FROM admin, news WHERE admin.id = '$admin_id' AND news.category = '$record->category'");
						$num_row = $query_f->num_rows();

						$query = $this->db->query("SELECT * FROM admin, news WHERE admin.id = '$admin_id' AND news.category = '$record->category' LIMIT 1, $num_row");
						$row = $query->row();

						foreach ($query->result_array() as $row):
						$image = $row['image'];
						$id = $row['id'];
						$name = $row['name'];
						?>
						<div class="post-block-style post-list clearfix">
							<div class="row">
								<div class="col-md-5 col-sm-6">
									<div class="post-thumb thumb-float-style">
										<a href="#">
											<?php
											if($row['file_type'] == 'image') {
												echo '<img class="img-responsive" style="height: 259px;" src="'.base_url('admin_resources/uploads/pictures/'.$image.'').'" alt="" />';
											}else {
												echo '<div class="flowplayer" data-swf="base_url(user_resources/flowplayer.swf)" data-ratio="0.4167">
										<video controls autoplay>
											<source type="video/mp4" src="'.base_url('admin_resources/uploads/video/'.$image.'').'">
										</video>
									</div>';
											}
											?>
										</a>
										<?php echo anchor("user_index/category/{$row['category']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
									</div>
								</div><!-- Img thumb col end -->

								<div class="col-md-7 col-sm-6">
									<div class="post-content">
							 			<h2 class="post-title title-large">
											<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#"><?=$row['name']; ?></a></span>
							 				<span class="post-date"><?=$row['date']; ?></span>
							 				<span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
											<a href="#" class="comments-link"><span>03</span></a></span>
							 			</div>
							 			<p><?php echo substr($row['description'], 0, 300); ?> ...</p>
						 			</div><!-- Post content end -->
								</div><!-- Post col end -->
							</div><!-- 2nd row end -->
						</div><!-- 2nd Post list end -->

						<?php endforeach; ?>

					</div><!-- Block Technology end -->

				</div><!-- Content Col end -->

				<?php include "includes/side.php"; ?>

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->


	<footer id="footer" class="footer">
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12 footer-widget">
						<h3 class="widget-title">Trending Now</h3>
						<div class="list-post-block">
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="images/news/lifestyle/health2.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Can't shed those Gym? The problem might...</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Mar 13, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="images/news/lifestyle/health3.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Deleting fears from the brain means you…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Jan 11, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 2 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-responsive" src="images/news/lifestyle/health4.jpg" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Smart packs parking sensor tech...</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Feb 19, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 3 end -->
							</ul><!-- List post end -->
						</div><!-- List post block end -->
						
					</div><!-- Col end -->

					<div class="col-md-3 col-sm-12 footer-widget widget-categories">
						<h3 class="widget-title">Hot Categories</h3>
						<ul>
							<li>
								<a href="#"><span class="catTitle">Robotics</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Games</span><span class="catCounter"> (6)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Gadgets</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Travel</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Health</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Architecture</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Food</span><span class="catCounter"> (5)</span></a>
							</li>
						</ul>
						
					</div><!-- Col end -->

					<div class="col-md-3 col-sm-12 footer-widget twitter-widget">
						<h3 class="widget-title">Latest Tweets</h3>
						<ul>
							<li>
								<div class="tweet-text">
								<span>About 13 days ago</span>
								Please, Wait for the next version of our templates to update #Joomla 3.7 
								<a href="#">https://t.co/LlEv8HgokN</a>
								</div>
							</li>
							<li>
								<div class="tweet-text">
								<span>About 15 days ago</span>
								#WordPress 4.8 is here!
								<a href="#">https://t.co/uDjRH4Gya9</a>
								</div>
							</li>
							<li>
								<div class="tweet-text">
								<span>About 1 month ago</span>
								Please, Wait for the next version of our templates to update #Joomla 3.7 
								<a href="#">https://t.co/LlEv8HgokN</a>
								</div>
							</li>
						</ul>
					</div><!-- Col end -->

					<div class="col-md-3 col-sm-12 footer-widget">
						<h3 class="widget-title">Post Gallery</h3>
						<div class="gallery-widget">
							<a href="#"><img class="img-responsive" src="images/news/lifestyle/health1.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/lifestyle/food3.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/lifestyle/travel4.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/lifestyle/architecture1.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/tech/gadget1.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/tech/gadget2.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/tech/game2.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/tech/robot5.jpg" alt="" /></a>
							<a href="#"><img class="img-responsive" src="images/news/lifestyle/travel5.jpg" alt="" /></a>
						</div>
					</div><!-- Col end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer main end -->

		<div class="footer-info text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-info-content">
							<div class="footer-logo">
								<img class="img-responsive" src="images/logos/footer-logo.png" alt="" />
							</div>
							<p>News247 Worldwide is a popular online newsportal and going source for technical and digital content for its influential audience around the globe. You can reach us via email or phone.</p>
							<p class="footer-info-phone"><i class="fa fa-phone"></i> +(785) 238-4131</p>
							<p class="footer-info-email"><i class="fa fa-envelope-o"></i> editor@news247.com</p>
							<ul class="unstyled footer-social">
								<li>
									<a title="Rss" href="#">
										<span class="social-icon"><i class="fa fa-rss"></i></span>
									</a>
									<a title="Facebook" href="#">
										<span class="social-icon"><i class="fa fa-facebook"></i></span>
									</a>
									<a title="Twitter" href="#">
										<span class="social-icon"><i class="fa fa-twitter"></i></span>
									</a>
									<a title="Google+" href="#">
										<span class="social-icon"><i class="fa fa-google-plus"></i></span>
									</a>
									<a title="Linkdin" href="#">
										<span class="social-icon"><i class="fa fa-linkedin"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-skype"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-dribbble"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-pinterest"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-instagram"></i></span>
									</a>
								</li>
							</ul>
						</div><!-- Footer info content end -->
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer info end -->

	</footer><!-- Footer end -->

	<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © 2017 News247 All Rights Reserved. Designed By Tripples</span>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="#">Site Terms</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Cookies Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Row end -->

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
		</div><!-- Copyright end -->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>


	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>

<!-- Mirrored from themewinter.com/html/news247/category-style3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 00:07:03 GMT -->
</html>