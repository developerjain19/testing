<?php include 'includes/header-link.php' ?>
<div id="main" class="csstransition cmsms_inview cmsms_responsive">
	<div class="container">
		<?php include 'includes/header.php' ?>

		<div id="middle">

			<div class="content_wrap r_sidebar">

				<div role="main" id="content">
					<div class="entry">
						<div class="blog opened-article">
							<article class="post type-post format-standard">
								<div class="post_content">
									<div class="cmsms_blog_media">
										<figure>

											<span class="image_container_img">
												<span class="p_img_container" id="img1">
													<img src="<?= base_url() ?>/uploads/blog/<?= $details[0]['image'] ?>" title="<?= base_url() ?>/uploads/blog/<?= $details[0]['title'] ?>" alt="<?= base_url() ?>/uploads/blog/<?= $details[0]['title'] ?>" class="fullwidth" style="opacity: 1; max-height: 350px;object-fit: cover;">
													<span class="image_rollover"></span>
												</span>
											</span>

										</figure>
									</div>
									<div class="cmsms_info">
										<span class="cmsms_post_format_img cmsms_post_animation cmsms_animated"></span>
										<abbr title="March 20, 2014" class="published">
											
											<span class="cmsms_month_day"><?= date_format(date_create( $details[0]['create_date']), 'd M') ?></span>
											<span class="cmsms_year"><?= date_format(date_create( $details[0]['create_date']), 'Y') ?></span>
										</abbr>

									</div>
									<div class="entry-header">
										<!-- <img src="<?= base_url() ?>assets/img/images/team_person_5.jpg" title="<?= base_url() ?>/uploads/blog/<?= $details[0]['title'] ?>" alt="<?= base_url() ?>/uploads/blog/<?= $details[0]['title'] ?>" class="fullwidth" style="opacity: 1;"> -->
										<h1 class="entry-title"><?= $details[0]['title'] ?></h1>
										<div class="meta_wrap">
											<span class="user_name">by <a rel="author" title="Posts by cmsmasters" href="#"><?= $details[0]['author'] ?></a></span>
										</div>
										<p><?= $details[0]['description'] ?></p>
									</div>
									<div class="cmsms_cc"></div>
								</div>
							</article>
						</div>
					</div>
				</div>
				<!-- _________________________ Finish Content _________________________ -->


				<div class="cl"></div>
			</div>
		</div>


		<?php include 'includes/footer.php' ?>


	</div>
	<!-- _________________________ Finish Main _________________________ -->


	<script src='js/jquery.easing.min.js'></script>
	<script src='js/jackbox.js'></script>
	<script src='js/jackbox-lib.js'></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src='js/jquery.gMap.min.js'></script>
	<script src='js/jquery.isotope.min.js'></script>
	<script src='js/jquery.isotope.run.js'></script>
	<script src='js/jquery.jPlayer.min.js'></script>
	<script src='js/jquery.jPlayer.playlist.min.js'></script>
	<script src='js/respond.min.js'></script>
	<script src='js/jquery.script.js'></script>
	<script src='js/jquery.tweet.min.js'></script>
	<script src='js/jquery.inview.js'></script>
	<script src="js/jquery.validationEngine-lang.js"></script>
	<script src="js/jquery.validationEngine.js"></script>
	</body>

	<!-- Mirrored from lawbusiness-html.cmsmasters.net/open-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2022 06:29:14 GMT -->

	</html>