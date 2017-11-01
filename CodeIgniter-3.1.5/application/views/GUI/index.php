<?php include "includes/header.php"; ?>

	<div class="gap-40"></div>

	<section class="featured-post-area no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-xs-12 pad-r">
					<div id="featured-slider" class="owl-carousel owl-theme featured-slider">
						<?php
						$query = $this->db->query("SELECT * FROM news WHERE file_type = 'image' ORDER BY RAND()");
						$row = $query->row();
						foreach ($query->result_array() as $row):
							$image = $row['image'];
							$id = $row['id'];
							?>
						<div class="item" style="background-image:url(<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>);
							width: 100%; height: 100%;">
							<div class="featured-post">
						 		<div class="post-content">
									<?php echo anchor("user_index/post/$id", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
						 			<h2 class="post-title title-extra-large">
										<?php echo anchor("user_index/post/$id", "{$row['title']}", array('title' => 'News title')); ?>
						 			</h2>
						 			<span class="post-date">March 16, 2017</span>
						 		</div>
						 	</div><!--/ Featured post end -->

						</div><!-- Item 1 end -->
					<?php endforeach; ?>

					</div><!-- Featured owl carousel end-->
				</div><!-- Col 7 end -->

				<div class="col-md-5 col-xs-12 pad-l">
					<div class="row">
						<div class="col-sm-12">
							<?php
							$query = $this->db->query("SELECT * FROM news WHERE file_type = 'image' ORDER BY id DESC limit 1");
							$row = $query->row();
							foreach ($query->result_array() as $row):
							$image = $row['image'];
//							?>


							<div class="post-overaly-style contentTop hot-post-top clearfix">
								<div class="post-thumb">
									<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" /></a>
								<div class="post-content">
									<?php echo anchor("user_index/post/{$row['id']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
						 			<h2 class="post-title title-large">
										<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
						 			</h2>
						 			<span class="post-date">February 19, 2017</span>
					 			</div><!-- Post content end  -->
				</div><!-- Post Overaly end -->
						</div><!-- Col end -->
						<?php endforeach; ?>

							<?php
							$query = $this->db->query("SELECT * FROM news WHERE file_type = 'image' AND category = 'Testimony' ORDER BY id DESC limit 1");
							$row = $query->row();
							foreach ($query->result_array() as $row):
							$image = $row['image'];
//							?>

						<div class="col-sm-6 pad-r-small">
							<div class="post-overaly-style contentTop hot-post-bottom clearfix">
								<div class="post-thumb">
									<img class="img-responsive" style="width: 100%;" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" />
								</div>
								<div class="post-content">
									<?php echo anchor("user_index/post/{$row['id']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
									<h2 class="post-title title-medium">
										<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
						</div><!-- Col end -->
					<?php endforeach; ?>

							<?php
							$query = $this->db->query("SELECT * FROM news WHERE file_type = 'image' AND category = 'Religion' ORDER BY id DESC limit 1");
							$row = $query->row();
							foreach ($query->result_array() as $row):
								$image = $row['image'];
//							?>

								<div class="col-sm-6 pad-l-small">
							<div class="post-overaly-style contentTop hot-post-bottom clearfix">
								<div class="post-thumb">
									<a href="#"><img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" /></a>
								</div>
								<div class="post-content">
									<?php echo anchor("user_index/post/{$row['id']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
									<h2 class="post-title title-medium">
										<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
									</h2>
								</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
						</div><!-- Col end -->
							<?php endforeach; ?>
					</div>
				</div><!-- Col 5 end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Trending post end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<div class="latest-news block color-red">
						<h3 class="block-title"><span>Latest News</span></h3>

						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							<div class="item">
								<ul class="list-post">
									<?php
									$query = $this->db->query("SELECT * FROM news WHERE file_type = 'image' ORDER BY id DESC limit 2");
									$row = $query->row();
									foreach ($query->result_array() as $row):
									$image = $row['image'];
										$id = $row['id'];
									?>
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" style="height: 147px;"  alt="" />
											</div>
											<?php echo anchor("user_index/category/{$row['category']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
													<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date"><?=$row['date']?></span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>

									<?PHP endforeach; ?>
								</ul><!-- List post 1 end -->

							</div><!-- Item 1 end -->

							<div class="item">

								<ul class="list-post">
									<?php
									$query = $this->db->query("SELECT * FROM news WHERE file_type = 'video' ORDER BY RAND() DESC limit 2");
									$row = $query->row();
									foreach ($query->result_array() as $row):
										$image = $row['image'];
										$id = $row['id'];
									?>
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
													<div class="flowplayer" data-swf="<?php echo base_url("user_resources/flowplayer.swf");?>" data-ratio="0.4167">
														<video controls autoplay>
															<source src="<?php echo base_url().'admin_resources/uploads/video/'.$image ?>">
														</video>
													</div>

											</div>
											<a class="post-cat" href="#"><?=$row['category']?></a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="#"><?=$row['title']?></a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Mar 12, 2017</span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

									<div class="gap-30"></div>
									<?php endforeach; ?>
								</ul><!-- List post 2 end -->

							</div><!-- Item 2 end -->

							<div class="item">

								<ul class="list-post">

									<?php
									$query = $this->db->query("SELECT * FROM news WHERE file_type = 'image' ORDER BY id DESC limit 2, 2");
									$row = $query->row();
									foreach ($query->result_array() as $row):
										$image = $row['image'];
										?>
										<li class="clearfix">
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
														<span class="post-author"><a href="#">John Doe</a></span>
														<span class="post-date"><?=$row['date']?></span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post Block style end -->
										</li><!-- Li end -->

									<div class="gap-30"></div>

									<?php endforeach; ?>
								</ul><!-- List post 3 end -->

							</div><!-- Item 3 end -->

						</div><!-- Latest News owl carousel end-->
					</div><!--- Latest news end -->

					<div class="gap-50"></div>

					<!--- Featured Tab startet -->
					<div class="featured-tab color-blue">
						<h3 class="block-title"><span>Technology</span></h3>

						<div class="tab-content">
					      <div class="tab-pane active animated fadeInRight" id="tab_a">
					      	<div class="row">
								<?php
								$query = $this->db->query("SELECT * FROM news WHERE category = 'Technology' AND file_type = 'image' ORDER BY id DESC limit 1");
								$num_row = $query->num_rows();
								if($num_row > 0 ){
								$row = $query->row();
								foreach ($query->result_array() as $row):
								$image = $row['image'];
									$id = $row['id'];
								?>
						      	<div class="col-md-6 col-sm-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
													<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" />
											</div>
											<div class="post-content">
									 			<h2 class="post-title">
													<?php echo anchor("user_index/post/$id", "{$row['title']}", array('title' => 'News title')); ?>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date"><?=$row['date']?></span>
									 			</div>
									 			<p><?php echo  substr($row['description'],0, 250); ?> ...</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->
								<?php
								endforeach;
								}else {
									echo "There is nothing in the Category Please. Insert some";
								}
								?>
						      	<div class="col-md-6 col-sm-6">
						      		<div class="list-post-block">
											<ul class="list-post">
												<?php
												$query = $this->db->query("SELECT * FROM news WHERE category = 'Technology' AND file_type = 'image' ORDER BY id DESC LIMIT 1, 4");
												$num_row = $query->num_rows();
												if($num_row > 0 ){
												$row = $query->row();
												foreach ($query->result_array() as $row):
												$image = $row['image'];
												?>
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">

																<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" />
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
																<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date"><?php echo $row['date']; ?></span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->
												<?php endforeach; } ?>
											</ul><!-- List post end -->
										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 1 end -->
					      </div><!-- Tab pane 1 end -->

						</div><!-- tab content -->
					</div><!-- Technology Tab end -->

					<div class="gap-40"></div>

					<!--- Featured Tab startet -->
					<div class="featured-tab color-orange">
						<h3 class="block-title"><span>Lifestyle</span></h3>

						<div class="tab-content">
							<div class="tab-pane active animated fadeInRight" id="tab_a">
								<div class="row">
									<?php
									$query = $this->db->query("SELECT * FROM news WHERE category = 'Lifestyle' AND file_type = 'image' ORDER BY id DESC limit 1");
									$num_row = $query->num_rows();
									if($num_row > 0 ){
										$row = $query->row();
										foreach ($query->result_array() as $row):
											$image = $row['image'];
											$id = $row['id'];
											?>
											<div class="col-md-6 col-sm-6">
												<div class="post-block-style clearfix">
													<div class="post-thumb">
														<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" />
													</div>
													<div class="post-content">
														<h2 class="post-title">
															<?php echo anchor("user_index/post/$id", "{$row['title']}", array('title' => 'News title')); ?>
														</h2>
														<div class="post-meta">
															<span class="post-author"><a href="#">John Doe</a></span>
															<span class="post-date"><?=$row['date']?></span>
														</div>
														<p><?php echo  substr($row['description'],0, 200); ?> ...</p>
													</div><!-- Post content end -->
												</div><!-- Post Block style end -->
											</div><!-- Col end -->
											<?php
										endforeach;
									}else {
										echo "There is nothing in the Category Please. Insert some";
									}
									?>
									<div class="col-md-6 col-sm-6">
										<div class="list-post-block">
											<ul class="list-post">
												<?php
												$query_f = $this->db->query("SELECT * FROM news WHERE category = 'Lifestyle' ");
												$num_row = $query_f->num_rows();

												$query = $this->db->query("SELECT * FROM news WHERE category = 'Lifestyle' ORDER BY id DESC LIMIT 1, 3");
												$num_row = $query->num_rows();
												if($num_row > 0 ){
													$row = $query->row();
													foreach ($query->result_array() as $row):
														$image = $row['image'];
														?>
														<li class="clearfix">
															<div class="post-block-style post-float clearfix">
																<div class="post-thumb">
																	<?php
																	if($row['file_type'] == 'image') {
																		echo '<img class="img-responsive" src="'.base_url('admin_resources/uploads/pictures/'.$image.'').'" alt="" />';
																	}else {
																		echo '<div class="flowplayer" data-swf="base_url(user_resources/flowplayer.swf)" data-ratio="0.4167">
										<video controls autoplay>
											<source type="video/mp4" src="'.base_url('admin_resources/uploads/video/'.$image.'').'">
										</video>
									</div>';
																	}
																	?>
																</div><!-- Post thumb end -->

																<div class="post-content">
																	<h2 class="post-title title-small">
																		<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
																	</h2>
																	<div class="post-meta">
																		<span class="post-date"><?php echo $row['date']; ?></span>
																	</div>
																</div><!-- Post content end -->
															</div><!-- Post block style end -->
														</li><!-- Li 1 end -->
													<?php endforeach; } ?>
											</ul><!-- List post end -->
										</div><!-- List post block end -->
									</div><!-- List post Col end -->
								</div><!-- Tab pane Row 1 end -->
							</div><!-- Tab pane 1 end -->

						</div><!-- tab content -->
					</div><!-- Technology Tab end -->


				</div><!-- Content Col end -->

				<?php include "includes/index_side.php"; ?>

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<div class="block color-dark-blue">
						<h3 class="block-title"><span>Religion</span></h3>
						<?php
						$query = $this->db->query("SELECT * FROM news WHERE category = 'Religion' AND file_type = 'image' ORDER BY id DESC limit 1");
						$num_row = $query->num_rows();
						if($num_row > 0 ){
						$row = $query->row();
						foreach ($query->result_array() as $row):
							$image = $row['image'];
							$id = $row['id'];
						?>
						<div class="post-overaly-style clearfix">
							<div class="post-thumb">
								<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" />
							</div>
							
							<div class="post-content">
					 			<h2 class="post-title">
									<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
					 			</h2>
					 			<div class="post-meta">
					 				<span class="post-date"><?=$row['date']?></span>
					 			</div>
				 			</div><!-- Post content end -->
						</div><!-- Post Overaly Article end -->
						<?php
						endforeach;
						}
						?>
						<div class="list-post-block">
							<ul class="list-post">
								<?php
								$query_f = $this->db->query("SELECT * FROM news WHERE category = 'Religion' ");
								$num_row = $query_f->num_rows();

								$query = $this->db->query("SELECT * FROM news WHERE category = 'Religion' ORDER BY id DESC LIMIT 1,3");
								$num_row = $query->num_rows();
								if($num_row > 0 ){
									$row = $query->row();
									foreach ($query->result_array() as $row):
										$image = $row['image'];
										?>
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<?php
											if($row['file_type'] == 'image') {
												echo '<img class="img-responsive" src="'.base_url('admin_resources/uploads/pictures/'.$image.'').'" alt="" />';
											}else {
												echo '<div class="flowplayer" data-swf="base_url(user_resources/flowplayer.swf)" data-ratio="0.4167">
										<video controls autoplay>
											<source type="video/mp4" src="'.base_url('admin_resources/uploads/video/'.$image.'').'">
										</video>
									</div>';
											}
											?>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
												<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date"><?php echo $row['date']; ?></span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->
										<?php endforeach; } ?>
							</ul><!-- List post end -->
						</div><!-- List post block end -->
					</div><!-- Block end -->
				</div><!-- Travel Col end -->

				<div class="col-md-6">
					<div class="block color-violet">
						<h3 class="block-title"><span>Religion</span></h3>
						<?php
						$query = $this->db->query("SELECT * FROM news WHERE category = 'Testimony' AND file_type = 'image' ORDER BY id DESC limit 1");
						$num_row = $query->num_rows();
						if($num_row > 0 ){
							$row = $query->row();
							foreach ($query->result_array() as $row):
								$image = $row['image'];
								$id = $row['id'];
								?>
								<div class="post-overaly-style clearfix">
									<div class="post-thumb">
										<img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" />
									</div>

									<div class="post-content">
										<h2 class="post-title">
											<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
										</h2>
										<div class="post-meta">
											<span class="post-date"><?=$row['date']?></span>
										</div>
									</div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->
								<?php
							endforeach;
						}
						?>

						<div class="list-post-block">
							<ul class="list-post">
								<?php
								$query_f = $this->db->query("SELECT * FROM news WHERE category = 'Testimony' ");
								$num_row = $query_f->num_rows();

								$query = $this->db->query("SELECT * FROM news WHERE category = 'Testimony' ORDER BY id DESC LIMIT 1,3");
								$num_row = $query->num_rows();
								if($num_row > 0 ){
									$row = $query->row();
									foreach ($query->result_array() as $row):
										$image = $row['image'];
										?>
										<li class="clearfix">
											<div class="post-block-style post-float clearfix">
												<div class="post-thumb">
													<?php
													if($row['file_type'] == 'image') {
														echo '<img class="img-responsive" src="'.base_url('admin_resources/uploads/pictures/'.$image.'').'" alt="" />';
													}else {
														echo '<div class="flowplayer" data-swf="base_url(user_resources/flowplayer.swf)" data-ratio="0.4167">
										<video controls autoplay>
											<source type="video/mp4" src="'.base_url('admin_resources/uploads/video/'.$image.'').'">
										</video>
									</div>';
													}
													?>
												</div><!-- Post thumb end -->

												<div class="post-content">
													<h2 class="post-title title-small">
														<?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
													</h2>
													<div class="post-meta">
														<span class="post-date"><?php echo $row['date']; ?></span>
													</div>
												</div><!-- Post content end -->
											</div><!-- Post block style end -->
										</li><!-- Li 1 end -->
									<?php endforeach; } ?>
							</ul><!-- List post end -->
						</div><!-- List post block end -->
					</div><!-- Block end -->
				</div><!-- Health Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- 2nd block end -->

<?PHP include "includes/footer.php"; ?>