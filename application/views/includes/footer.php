
	<div id="bottom">
		<div class="bottom_inner">
			<div class="bottom_ininner">
				<div class="one_fourth">
					<aside class="widget widget_text">
						<div class="textwidget">
							<h1>Lawuite</h1>
							<p style="padding-bottom:35px;">By visiting Lawuite, you have taken the first step to understand laws, to unwrap the complexities of the law and to make the law more accessible.</p>
							<aside class="widget widget_custom_contact_info_entries">
								<div class="contact_widget_info">
									<span class="contact_widget_name">India</span>
									<!-- <span class="contact_widget_address">51, North Ave</span>
									<span class="contact_widget_city">New York</span>
									<span class="contact_widget_state">NY</span>
									<span class="contact_widget_zip">10001</span> -->
								</div>
								<span class="contact_widget_phone">+91 11223344555</span>
								<span class="contact_widget_email">
									<a href="mailto:">Prabal Goel:</br> prabalgoel@gmail.com
									</a></br></br>
									<a href="mailto:">Austin Thomas:</br> austinthomas@gmail.com
									</a>
								</span>
							</aside>
						</div>
					</aside>
				</div>
				<div class="one_fourth">
					<aside class="widget widget_recent_entries">
						<h3 class="widgettitle">
							<span class="widgeticon"></span>Recent Posts
						</h3>
						<ul>
							<li>
								<a href="#" title="Our Team Members">Home</a>
							</li>
							<li>
								<a href="#" title="How We Can Help You">About Us</a>
							</li>
							<li>
								<a href="#" title="Standard Post With an Image">Stamp Duty Assistant</a>
							</li>
							<li>
								<a href="#" title="Standard Post Without Image">Case Law Repository </a>
							</li>
							<li>
								<a href="#" title="Video post format">Insolvency Quiz</a>
							</li>
							<li>
								<a href="#" title="Gallery Post Format">Terms of use </a>
							</li>
							<li>
								<a href="#" title="Quote post format">Privacy Policy </a>
							</li>
							
						</ul>
					</aside>
				</div>
				<div class="cl_resp"></div>
				<div class="one_fourth">
					<aside class="widget widget_nav_menu">
						<h3 class="widgettitle">
							<span class="widgeticon"></span>Created by
						</h3>
						<div class="menu-attorneys-container">
							<ul class="menu">
								<li class="menu-item">
									<a href="#">Prabal Goel</a>
								</li>
								<li class="menu-item">
									<a href="#">Austin Thomas</a>
								</li>
								
							</ul>
						</div>
					</aside>
				</div>
				<div class="one_fourth">
					<aside class="widget widget_custom_contact_form_entries">
						<h3 class="widgettitle">Contact Form</h3>
						<div class="cmsms-form-builder">
							<div class="box success_box widgetinfo">
								<span>Thank You!<br />
									Your message has been sent successfully.</span>
							</div>
							<script>
								jQuery(document).ready(function() {
									jQuery('#form_contact_form_widget_001').validationEngine('init');

									jQuery('#form_contact_form_widget_001 a#contact_form_widget_001_wformsend').click(function() {
										var form_builder_url = jQuery('#contact_form_widget_001_wurl').val();

										jQuery('#form_contact_form_widget_001 .loading').animate({
											opacity: 1
										}, 250);

										if (jQuery('#form_contact_form_widget_001').validationEngine('validate')) {
											jQuery.post(form_builder_url, {
												field_003: jQuery('#field_003').val(),
												field_004: jQuery('#field_004').val(),
												formname: 'contact_form_widget_001',
												formtype: 'widget'
											}, function() {
												jQuery('#form_contact_form_widget_001 .loading').animate({
													opacity: 0
												}, 250);
												document.getElementById('form_contact_form_widget_001').reset();
												jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').hide();
												jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').fadeIn('fast');
												jQuery('html, body').animate({
													scrollTop: (jQuery('#form_contact_form_widget_001').offset().top - 100)
												}, 'slow');
												jQuery('#form_contact_form_widget_001').parent().find('.widgetinfo').delay(5000).fadeOut(1000);
											});

											return false;
										} else {
											jQuery('#form_contact_form_widget_001 .loading').animate({
												opacity: 0
											}, 250);

											return false;
										}
									});
								});
							</script>
							<form action="#" method="post" id="form_contact_form_widget_001">
								<div class="form_info cmsms_input">
									<label for="field_003">Enter Email Address<span class="color_3"> *</span></label>
									<input type="text" class="border" name="wemail" id="field_003" size="22" tabindex="12" class="validate[required,custom[email]]" />
								</div>
								<div class="form_info cmsms_textarea">
									<label for="field_004">Enter Your Question<span class="color_3"> *</span></label>
									<textarea name="wmessage" class="border" id="field_004" cols="28" rows="6" tabindex="13" class="validate[required,minSize[3]]"></textarea>
								</div>
								<div class="loading"></div>
								<div><input type="hidden" name="contact_form_widget_001_wurl" id="contact_form_widget_001_wurl" value="php/sendmail.php" /></div><!-- Here you need to set the path to the sendmail file -->
								<div><a href="#" id="contact_form_widget_001_wformsend" class="button_small" tabindex="14"><span>Submit</span></a></div>
							</form>
						</div>
					</aside>
				</div>
				<div class="cl"></div>
			</div>
		</div>
	</div>
	
	<a href="javascript:void(0);" id="slide_top" class="icon-video"></a>
</div>

<footer id="footer" role="contentinfo">
				<div class="footer_outer_wrap">
					<div class="footer_outer">
						<div class="footer_inner">
							<ul class="social_icons">
								<li>
									<a target="_blank" href="#" title="#">
										<img src="<?= base_url() ?>assets/img/facebook.png" alt="#" />
									</a>
								</li>
								<li>
									<a target="_blank" href="#" title="#">
										<img src="<?= base_url() ?>assets/img/twitter.png" alt="#" />
									</a>
								</li>
							
								<li>
									<a target="_blank" href="#" title="#">
										<img src="<?= base_url() ?>assets/img/linkedin.png" alt="#" />
									</a>
								</li>
								
							</ul>
							<span class="copyright">&copy; <?= date("Y") ?> Lawuite</span>
							<br />Created by <a href="#">Prabal Goel & Austin Thomas</a>
						</div>
					</div>
				</div>
			</footer>