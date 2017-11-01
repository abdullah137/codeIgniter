<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="sidebar sidebar-right">
        <div class="widget">
            <h3 class="block-title"><span>Follow Us</span></h3>

            <ul class="social-icon">
                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div><!-- Widget Social end -->

        <div class="widget color-default">
            <h3 class="block-title"><span>Recent News</span></h3>
            <?php
            $query = $this->db->query("SELECT * FROM news WHERE file_type = 'image' ORDER BY date DESC LIMIT 1");
            $row = $query->row();
            foreach ($query->result_array() as $row):
                $image = $row['image'];
                $id = $row['id'];
                $category = $row['category'];
                $title = $row['title'];
                $date = $row['date'];
                ?>
                <div class="post-overaly-style clearfix">
                    <div class="post-thumb">
                            <img class="img-responsive" src="<?php echo base_url("admin_resources/uploads/pictures/$image"); ?>" alt="" />
                    </div>

                    <div class="post-content">
                        <?php echo anchor("user_index/category/{$row['category']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
                        <h2 class="post-title title-small">
                            <?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
                        </h2>
                        <div class="post-meta">
                            <span class="post-date"><?php echo $date; ?></span>
                        </div>
                    </div><!-- Post content end -->
                </div><!-- Post Overaly Article end -->
            <?php endforeach; ?>

            <div class="list-post-block">
                <ul class="list-post">
                    <?php
                    $query = $this->db->query("SELECT * FROM news ORDER BY date DESC LIMIT 1, 3");
                    $row = $query->row();
                    foreach ($query->result_array() as $row):
                        $image = $row['image'];
                        $id = $row['id'];
                        $category = $row['category'];
                        $title = $row['title'];
                        $date = $row['date'];
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
                                    <?php echo anchor("user_index/category/{$row['category']}", "{$row['category']}", array('title' => 'News Category', 'class'=>'post-cat')); ?>
                                </div><!-- Post thumb end -->

                                <div class="post-content">
                                    <h2 class="post-title title-small">
                                        <?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date"><?php echo $date; ?></span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post block style end -->
                        </li><!-- Li 1 end -->
                    <?php endforeach; ?>
                </ul><!-- List post end -->
            </div><!-- List post block end -->

        </div><!-- Popular news widget end -->

        <div class="widget m-bottom-0">
            <h3 class="block-title"><span>Newsletter</span></h3>
            <div class="ts-newsletter">
                <div class="newsletter-introtext">
                    <h4>Get Updates</h4>
                    <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                </div>

                <div class="newsletter-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                            <button class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div><!-- Newsletter end -->
        </div><!-- Newsletter widget end -->

    </div><!-- Sidebar right end -->
</div><!-- Sidebar Col end -->