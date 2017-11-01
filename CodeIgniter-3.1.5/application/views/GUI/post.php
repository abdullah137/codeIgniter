<?php include "includes/header.php"; ?>

					<?php
					$admin_id = $record->admin_id;
					$category = $record->category;
					$query = $this->db->query("SELECT * FROM admin INNER JOIN news WHERE admin.id = news.admin_id AND news.category = '$category'");
					$row = $query->row();
					foreach ($query->result_array() as $row) {
						$image = $row['image'];
						$id = $row['id'];
						$category = $row['category'];
						$title = $row['title'];
						$date = $row['date'];
						$name = $row['name'];
					}
					?>
	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
     					<li><a href="#">Home</a></li>
     					<li><?php echo $record->category;  ?></a></li>
     				</ol>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Page title end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					
					<div class="single-post">
						
						<div class="post-title-area">
							<a class="post-cat" href="#"><?php echo $record->category;  ?></a>
							<h2 class="post-title">
								<?php echo $record->title;  ?>
				 			</h2>
				 			<div class="post-meta">
								<span class="post-author">
									By <a href="#"><?php echo $name; ?></a>
								</span>
								<span class="post-date"><i class="fa fa-clock-o"></i> March 14, 2017</span>
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="post-media post-featured-image">
								<?php
								if($record->file_type == 'image') {
									echo '<img class="img-responsive" style="height: 259px;" src="'.base_url('admin_resources/uploads/pictures/'.$record->image.'').'" alt="" />';
								}else {
									echo '<div class="flowplayer" data-swf="base_url(user_resources/flowplayer.swf)" data-ratio="0.4167">
										<video controls autoplay>
											<source type="video/mp4" src="'.base_url('admin_resources/uploads/video/'.$record->image.'').'">
										</video>
									</div>';
								}
								?>
							</div>
							<div class="entry-content">
							<?php echo $record->description; ?>
					</div><!-- Entery content end -->

							<div class="share-items clearfix">
   							<ul class="post-social-icons unstyled">
   								<li class="facebook">
   									<a href="#">
   									<i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
   								</li>
   								<li class="twitter">
   									<a href="#">
   									<i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
   								</li>
   								<li class="gplus">
   									<a href="#">
   									<i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>
   								</li>
   								<li class="pinterest">
   									<a href="#">
   									<i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>
   								</li>
   							</ul>
   						</div><!-- Share items end -->

						</div><!-- post-content end -->
					</div><!-- Single post end -->
					
					<?php
					$admin_id = $record->admin_id;
					$query = $this->db->query("SELECT * FROM admin WHERE id = '$admin_id'");

					foreach ($query->result_array() as $row)
					{
						$name = $row['name'];
						$email = $row['email'];
					}
					?>
					<div class="author-box">
						<div class="author-img pull-left">
							<img src="images/news/author.png" alt="">
						</div>
						<div class="author-info">
							<h3><?php echo $name; ?></h3>
							<p class="author-url"><a href="#"><?php echo $email; ?></a></p>
							<p>Selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate. Listicle meditation paleo, drinking vinegar sint direct trade.</p>
							<div class="authors-social">
                        <span>Follow Me: </span>
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
						</div>
					</div> <!-- Author box end -->

					<div class="related-posts block">
						<h3 class="block-title"><span>Related Posts</span></h3>

						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							<?php
							$admin_id = $record->admin_id;
							$category = $record->category;
							$query = $this->db->query("SELECT * FROM admin INNER JOIN news WHERE admin.id = news.admin_id AND news.file_type = 'image' AND news.category = '$category' LIMIT 3");
							$row = $query->row();
							foreach ($query->result_array() as $row):
							$image = $row['image'];
							$id = $row['id'];
								$category = $row['category'];
								$title = $row['title'];
								$date = $row['date'];
								$name = $row['name'];
							?>
							<div class="item">
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" style="height: 147px;" alt="" />
									</div>
									<?php echo anchor("user_index/category/{$row['category']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
											<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#"><?=$name;?></a></span>
							 				<span class="post-date"><?=$date?></span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Item 1 end -->

						<?php endforeach; ?>

						</div><!-- Carousel end -->

					</div><!-- Related posts end -->

					<!-- Post comment start -->
					<div id="comments" class="comments-area block">
						<h3 class="block-title"><span>03 Comments</span></h3>

						<ul class="comments-list">
							<li>
								<div class="comment">
									<img class="comment-avatar pull-left" alt="" src="images/news/user1.png">
									<div class="comment-body">
										<div class="meta-data">
											<span class="comment-author">Michelle Aimber</span>
											<span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
										</div>
										<div class="comment-content">
										<p>High Life tempor retro Truffaut. Tofu mixtape twee, assumenda quinoa flexitarian aesthetic artisan vinyl pug. Chambray et Carles Thundercats cardigan actually, magna bicycle rights.</p></div>
										<div class="text-left">
											<a class="comment-reply" href="#">Reply</a>
										</div>	
									</div>
								</div><!-- Comments end -->

									<div class="comment last">
										<img class="comment-avatar pull-left" alt="" src="images/news/user1.png">
										<div class="comment-body">
											<div class="meta-data">
												<span class="comment-author">Michelle Aimber</span>
												<span class="comment-date pull-right">January 17, 2017 at 1:38 pm</span>
											</div>
											<div class="comment-content">
											<p>VHS Wes Anderson Banksy food truck vero. Farm-to-table selfies labore, leggings cupidatat sunt taxidermy umami fanny pack typewriter hoodie art party voluptate cardigan banjo.</p></div>
											<div class="text-left">
												<a class="comment-reply" href="#">Reply</a>
											</div>	
										</div>
									</div><!-- Comments end -->
							</li><!-- Comments-list li end -->
						</ul><!-- Comments-list ul end -->
					</div><!-- Post comment end -->

					<div class="comments-form">
						<h3 class="title-normal">Leave a comment</h3>

						<form role="form">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea>
									</div>
								</div><!-- Col end -->

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
									</div>
								</div><!-- Col end -->

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" placeholder="Your Website" type="text" required>
									</div>
								</div>
							</div><!-- Form row end -->
							<div class="clearfix">
								<button class="comments-btn btn btn-primary" type="submit">Post Comment</button> 
							</div>
						</form><!-- Form end -->
					</div><!-- Comments form end -->

				</div><!-- Content Col end -->

				<?php include "includes/side.php"; ?>

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

<?php include "includes/footer.php"; ?>
