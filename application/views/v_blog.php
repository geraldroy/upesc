			<!-- === BEGIN CONTENT === -->
            <div id="content" class="bottom-border-shadow">
                <div class="container background-white bottom-border">
                    <div class="row margin-vert-30">
						<br><br>
                        <!-- Main Column -->
                        <div class="col-md-9">
							<?php foreach($posts as $post) { ?>
                            <!-- Blog Post -->
                            <div class="blog-post padding-bottom-20">
                                <!-- Blog Item Header -->
                                <div class="blog-item-header">
                                    <!-- Title -->
                                    <h2>
										<a href="<?=  base_url()?>blog/post/<?=$post['post_id']?>"><?=$post['post_title'];?></a>
                                    </h2>
                                    <div class="clearfix"></div>
                                    <!-- End Title -->
                                    <!-- Date -->
                                    <div class="blog-post-date">
                                        <a href="#">22nd Apr, 2014</a>
                                    </div>
                                    <!-- End Date -->
                                </div>
                                <!-- End Blog Item Header -->
                                <!-- Blog Item Details -->
                                <div class="blog-post-details">
                                    <!-- Author Name -->
                                    <div class="blog-post-details-item blog-post-details-item-left">
                                        <i class="fa fa-user color-gray-light"></i>
                                        <a href="#">Admin</a>
                                    </div>
                                    <!-- End Author Name -->
                                    <!-- Tags -->
                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                        <i class="fa fa-tag color-gray-light"></i>
                                        <a href="#">jQuery</a>,
                                        <a href="#">HTML5</a>,
                                        <a href="#">CSS</a>
                                    </div>
                                    <!-- End Tags -->
                                    <!-- # of Comments -->
                                    <div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                        <a href="">
                                            <i class="fa fa-comments color-gray-light"></i>
                                            2 Comments
                                        </a>
                                    </div>
                                    <!-- End # of Comments -->
                                </div>
                                <!-- End Blog Item Details -->
                                <!-- Blog Item Body -->
                                <div class="blog">
                                    <div class="clearfix"></div>
                                    <div class="blog-post-body row margin-top-15">
                                        <div class="col-md-5">
                                            <img class="margin-bottom-20" src="assets/img/blog/image1.jpg" alt="thumb1">
                                        </div>
                                        <div class="col-md-7">
												<p><?=  substr(strip_tags($post['post']), 0, 200).'...';?></p>
                                            <!-- Read More -->
											<a href="<?=  base_url()?>blog/post/<?=$post['post_id']?>" class="btn btn-primary">
                                                Read More</a>
                                                <i class="icon-chevron-right readmore-icon"></i>
                                            </a>
                                            <!-- End Read More -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Blog Item Body -->
                            </div>
                            <!-- End Blog Item -->
							<?php } ?>
                            <!-- Pagination -->
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="disabled">
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                            <!-- End Pagination -->
                        </div>
                        <!-- End Main Column -->
                        <!-- Side Column -->
                        <div class="col-md-3">
                            <!-- Blog Tags -->
                            <div class="blog-tags">
                                <h3>Tags</h3>
                                <ul class="blog-tags">
                                    <li>
                                        <a href="#" class="blog-tag">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">jQuery</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">PHP</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">Ruby</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">CoffeeScript</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">Grunt</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">Bootstrap</a>
                                    </li>
                                    <li>
                                        <a href="#" class="blog-tag">HTML5</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Blog Tags -->
                            <!-- Recent Posts -->
                            <div class="recent-posts">
                                <h3>Recent Posts</h3>
                                <ul class="posts-list margin-top-10">
                                    <li>
                                        <div class="recent-post">
                                            <a href="">
                                                <img class="pull-left" src="assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
                                            </a>
                                            <a href="#" class="posts-list-title">Sidebar post example</a>
                                            <br>
                                            <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <div class="recent-post">
                                            <a href="">
                                                <img class="pull-left" src="assets/img/blog/thumbs/thumb2.jpg" alt="thumb2">
                                            </a>
                                            <a href="#" class="posts-list-title">Sidebar post example</a>
                                            <br>
                                            <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <div class="recent-post">
                                            <a href="">
                                                <img class="pull-left" src="assets/img/blog/thumbs/thumb3.jpg" alt="thumb3">
                                            </a>
                                            <a href="#" class="posts-list-title">Sidebar post example</a>
                                            <br>
                                            <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <div class="recent-post">
                                            <a href="">
                                                <img class="pull-left" src="assets/img/blog/thumbs/thumb4.jpg" alt="thumb4">
                                            </a>
                                            <a href="#" class="posts-list-title">Sidebar post example</a>
                                            <br>
                                            <span class="recent-post-date">
                                                July 30, 2013
                                            </span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Recent Posts -->
                        </div>
                        <!-- End Side Column -->
                    </div>
                </div>
            </div>
            
            <!-- === END CONTENT === -->