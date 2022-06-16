<?php include 'includes/header-link.php' ?>

<div id="main" class="csstransition cmsms_inview cmsms_responsive">

    <div class="container">
        <?php include 'includes/header.php' ?>

				
				<div id="middle">

			
					<div class="headline" style="background-color:#fbfbfb;">
						<div class="headline_inner">
							<div class="fl">
								<h1>Our Blog</h1>
							</div>
						
							<div class="cmsms_breadcrumbs">
								<a href="<?= base_url() ?>" class="cms_home">Home</a>
								<span class="breadcrumbs_sep"><span></span></span>
								<span>Our Blog</span>
								
							</div>
						</div>
					</div>
				

					<div class="content_wrap r_sidebar">

						<div id="content" role="main">
							<div class="entry">
								<div class="entry-content">
									<div class="cmsms_cc"></div>
								</div>
							</div>
							<div class="timeline_wrap">
								<!-- <h4 class="cmsms_timeline_title">2014</h4> -->
								<div class="cmsms_timeline">

								<?php
								if(!empty($blog)){
									foreach($blog as $row){
										// print_r($row);
								?>
									<article class="format-"><span class="cmsms_post_format_img cmsms_post_animation"></span>
										<div class="cmsms_timeline_inner_wrap">
											<div class="cmsms_timeline_inner">
												<figure class="alignleft">
													<img width="150" height="150" src="<?= base_url(); ?>uploads/blog/<?= $row['image']; ?>" alt="<?= $row['title']; ?>" class="attachment-thumbnail" alt="Standard Post With an Image" title="Standard Post With an Image" style="width:80px; height:80px;" />
												</figure>
												<h4 class="entry-title">
													<a href="<?php echo base_url() . 'blogdetails/' . $row['id'] . "/" . url_title($row['url_title']); ?>"><?= $row['title']; ?></a>
												</h4>
												<abbr class="published"><span class="user_name">by</span> <?= $row['author']; ?></abbr>
												
												<div class="timeline_content"><?= substr($row['description'],0, 250); ?>....
											<a href="<?= base_url(); ?>uploads/blog/<?= $row['image']; ?>" alt="<?= $row['title']; ?>">Read More</a>
											</div>
												<div class="cl"></div>
											</div>
										</div>
									</article>

										<?php
									}
								}
										?>

								</div>
								
							</div>
						</div>
						<div class="cl"></div>
					</div>
				</div>


			
				<?php include 'includes/footer.php' ?>

</div>
<?php include 'includes/footer-link.php' ?>
