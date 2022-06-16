<?php include 'includes/header-link.php' ?>

<div id="main" class="csstransition cmsms_inview cmsms_responsive">

    <div class="container">
        <?php include 'includes/header.php' ?>
        <div id="middle">

            <div id="top">
                <div class="wrap_lay_slider">
                    <script>
                        var lsjQuery = jQuery;
                    </script>
                    <script>
                        lsjQuery(document).ready(function() {
                            if (typeof lsjQuery.fn.layerSlider == "undefined") {
                                lsShowNotice('layerslider_1', 'jquery');
                            } else {
                                lsjQuery("#layerslider_1").layerSlider({
                                    skin: 'lawbusiness',
                                    skinsPath: 'layerslider/css/skins/'
                                })
                            }
                        });
                    </script>
                    <div id="layerslider_1" class="ls-wp-container" style="width:1920px;height:550px;margin:0 auto;margin-bottom: 0px;">

                        <div class="ls-slide" data-ls=" transition2d: all;">
                            <img src="<?= base_url() ?>assets/img/blank.gif" data-src="<?= base_url() ?>assets/pics/slider_image_2.jpg" class="ls-bg" alt="Slide background" />
                            <p class="ls-l" style="top:198px;left:372px;font-family:Playfair Display;font-size:84px;color:#ffffff;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-40;durationin:300;delayin:600;offsetxout:0;offsetyout:40;">Thanks for visiting</p>
                            <p class="ls-l" style="top:311px;left:381px;font-family:Playfair Display;font-size:30px;color:#ffffff;white-space: nowrap;background-color:#000000;padding: 10px 20px;" data-ls="offsetxin:40;durationin:400;delayin:1000;offsetxout:-40;">LawSuite</p>
                            <p class="ls-l" style="top:381px;left:376px;font-family:verdana;font-size:17px;line-height:24px;color:#ffffff;white-space: nowrap;" data-ls="durationin:300;delayin:1200; ">By visiting LawSuite, you have taken the first step to</br> understand laws, to unwrap the complexities of the law</br> and to make the law more accessible. </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content_wrap fullwidth">
                <div id="middle_content" role="main">
                    <div class="entry">
                        <div class="cmsms_cc">
                            <div class=" first_column">
                                <div>
                                    <img class="alignleft max_width radius-5" alt="color-blocks-2" src="<?= base_url() ?>assets/pics/court-hammer.jpg" height="300" width="550" />
                                </div>
                            </div>
                            <div class="one_half">
                                <div>
                                    <h3><b>Do you simply want to understand law better?</br>
                                            Then <strong>LAWSUITE</strong> is for you.</b>
                                    </h3>
                                    <div>
                                        <ul class="flist">
                                            <li>Do you get bogged down by the COMPLEX LANGUAGE of legal statutes?</li>

                                            <li>Don’t understand how a law is APPLIED in real life?</li>


                                            <li>Want to understand how a turn of phrase can make a MASSIVE difference in a contract?</li>


                                            <li>Do you want to learn how and why complex transactions are STRUCTURED the way they are?</li>


                                            <li>Are you a LAW STUDENT who wants to make sense of the practice of law?</li>

                                            <li>Are you a START-UP FOUNDER confused by complex legal jargon?</li>
                                            <li>Are you a LAWYER wishing to EFFORTLESSLY draft contracts?</li>
                                        </ul>


                                    </div>
                                    <p>
                                        &nbsp;
                                    </p>
                                </div>
                            </div>
                            <div class="one_first first_column">
                                <div class="divider"></div>
                            </div>
                            <div class="one_first first_column">
                                <div>
                                    <h3 class="margin-b">What do we have for you?</h3>
                                </div>
                            </div>
                            <div class="one_fourth first_column">
                                <div class="cmsms_our_team_wrap">
                                    <div class="cmsms_header_wrap">
                                        <header class="entry-header">
                                            <h5 class="person_title">Stamp duty and registration fee calculator</h5>
                                        </header>
                                        <div class="entry-content">
                                            <p class="justify">Get confused by stamp laws? Don’t know how to calculate registration fees? Use our calculator and get rid of the headache.</p>
                                        </div>
                                        <div class="cmsms_profile_button">
                                            <a href="#" class="button">
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="one_fourth">
                                <div class="cmsms_our_team_wrap">
                                    <div class="cmsms_header_wrap">
                                        <header class="entry-header">
                                            <h5 class="person_title">Insolvency </br>Quiz</h5>
                                        </header>
                                        <div class="entry-content">
                                            <p class="justify">Want to prepare and clear the IBBI Limited Insolvency Examination? Looking practice materials? Try our quiz. Practice makes perfect!</p>
                                        </div>
                                        <div class="cmsms_profile_button">
                                            <a href="#" class="button">
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="one_fourth">
                                <div class="cmsms_our_team_wrap">
                                    <div class="cmsms_header_wrap">
                                        <header class="entry-header">
                                            <h5 class="person_title">Video </br>Series</h5>
                                        </header>
                                        <div class="entry-content">
                                            <p class="justify"> Go through LawSuite’s video series here where we make the how and why behind these transactions simple.</p>
                                        </div>
                                        <div class="cmsms_profile_button">
                                            <a href="#" class="button">
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="one_fourth">
                                <div class="cmsms_our_team_wrap">
                                    <div class="cmsms_header_wrap">
                                        <header class="entry-header">
                                            <h5 class="person_title">Case law</br> repository</h5>
                                        </header>
                                        <div class="entry-content">
                                            <p class="justify">Researching on an issue but unable to get any leads? Use our case law repository- may your search end here. </p>
                                        </div>
                                        <div class="cmsms_profile_button">
                                            <a href="#" class="button">
                                                <span>Read More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div role="main" id="content">
                            <div class="entry">
                                <div class="cmsms_cc">
                                    <div data-type="" data-folder="column" class="first_column">
                                        <div data-type="" data-folder="text">
                                            <img src="assets/pics/banner.png" alt="color-blocks-2" class="size-full alignleft max_width" />
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="one_first first_column">
                            <div>
                                <h3>Our Team</h3>
                            </div>
                        </div>
                        <div class="one_fourth first_column width-50">
                            <div class="cmsms_our_team_wrap">
                                <div class="wrap_person">
                                    <figure>
                                        <a href="#" data-group="img_2358" title="Home Page 1" class="preloader">
                                            <img width="470" height="376" src="<?= base_url() ?>assets/pics/team_person_3.jpg" class="fullwidth" alt="blonde_girl_teamlead_original" />
                                        </a>
                                    </figure>
                                    <div class="cmsms_team_rollover">
                                        <footer class="entry-meta">
                                            <a href="#" title="Twitter" target="_blank">
                                                <img src="<?= base_url() ?>assets/img/twitter_footer.png" alt="Twitter" />
                                            </a>
                                            <a href="#" title="Facebook" target="_blank">
                                                <img src="<?= base_url() ?>assets/img/facebook_header.png" alt="Facebook" />
                                            </a>
                                            <a href="#" title="Vimeo" target="_blank">
                                                <img src="<?= base_url() ?>assets/img/vimeo_header.png" alt="Vimeo" />
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                                <div class="cmsms_header_wrap">
                                    <header class="entry-header">
                                        <h5 class="person_title">Prabal Goel</h5>
                                    </header>
                                    <div class="entry-content">
                                        <p class="justify">Prabal is a lawyer and an insolvency professional with a dozen years of top tier experience in corporate laws. Passionate about research to simplify the law. Prabal is currently working as a General Counsel.</p>
                                    </div>
                                    <div class="cmsms_profile_button">
                                        <a href="open-service.html" class="button">
                                            <span>Profile</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="one_fourth width-50">
                            <div class="cmsms_our_team_wrap">
                                <div class="wrap_person">
                                    <figure>
                                        <a href="#" data-group="img_2358" title="Home Page 1" class="preloader">
                                            <img width="470" height="376" src="<?= base_url() ?>assets/pics/team_person_1.jpg" class="fullwidth" alt="photodune-6076506-happy-businessman-m-1" />
                                        </a>
                                    </figure>
                                    <div class="cmsms_team_rollover">
                                        <footer class="entry-meta">
                                            <a href="#" title="Twitter" target="_blank">
                                                <img src="<?= base_url() ?>assets/img/twitter_footer.png" alt="Twitter" />
                                            </a>
                                            <a href="#" title="Facebook" target="_blank">
                                                <img src="<?= base_url() ?>assets/img/facebook_header.png" alt="Facebook" />
                                            </a>
                                            <a href="#" title="Vimeo" target="_blank">
                                                <img src="<?= base_url() ?>assets/img/vimeo_header.png" alt="Vimeo" />
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                                <div class="cmsms_header_wrap">
                                    <header class="entry-header">
                                        <h5 class="person_title">Austin Thomas</h5>

                                    </header>
                                    <div class="entry-content">
                                        <p class="justify">Austin is a final year law student keen on learning the law and sharing what he learns with the world. Passionate about research to simplify the law. Prabal is currently working as a General Counsel.</p>
                                    </div>
                                    <div class="cmsms_profile_button">
                                        <a href="open-service.html" class="button">
                                            <span>Profile</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="one_first first_column">
                            <div>
                                <h3>FAQ</h3>
                            </div>
                            <div data-folder="tab" data-type="tour">
                                <div class="tour_content">
                                    <ul class="tour">
                                        <li>
                                            <a href="#">
                                                <span>1. What is stamp duty?</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>2. What is registration fees?</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>3. Why should one pay stamp duty?</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>4. When is stamp duty payable?</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>5. What happens if one does not pay stamp duty?</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>6. Where are stamp papers printed?</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tour_box_content">
                                        <div class="tour_box">
                                            <div class="tour_box_inner">
                                                <h4>What is stamp duty?
                                                </h4>
                                                <p>A “stamp” is any mark, seal, adhesive or impressed stamp, or endorsement of any agency or person authorised by the State Governments.  Stamp duty is paid by affixing stamps on which duty is leviable under the stamp laws. </p>
                                            </div>
                                        </div>
                                        <div class="tour_box">
                                            <div class="tour_box_inner">
                                                <h4>What is registration fees?
                                                </h4>
                                                <p>Registration fees is the amount payable on presentation of a document for registration.</p>
                                            </div>
                                        </div>
                                        <div class="tour_box">
                                            <div class="tour_box_inner">
                                                <h4>Why should one pay stamp duty?
                                                </h4>
                                                <p>Paying stamp duty makes it admissible before a court of law.</p>
                                            </div>
                                        </div>
                                        <div class="tour_box">
                                            <div class="tour_box_inner">
                                                <h4>
                                                    When is stamp duty payable?
                                                </h4>
                                                <p>Stamp duty is payable up to the next working date after execution of the document. However, in Delhi, stamp duty is payable up to the time of execution of the document.</p>
                                            </div>
                                        </div>
                                        <div class="tour_box">
                                            <div class="tour_box_inner">
                                                <h4>
                                                    What happens if one does not pay stamp duty?
                                                </h4>
                                                <p>A document on which stamp duty is leviable, and on which stamp duty is not paid, cannot be admitted in evidence for any purpose by any court or other authority having the power to receive evidence, and such document shall not be acted upon, registered or authenticated by any such person or by any public officer.</p>
                                            </div>
                                        </div>
                                        <div class="tour_box">
                                            <div class="tour_box_inner">
                                                <h4>
                                                    Where are stamp papers printed?
                                                </h4>
                                                <p>There are two Security printing presses of Security Printing & Minting Corporation of India Ltd., namely the India Security Press (ISP) at Nashik and Security Printing Press (SPP) at Hyderabad. These presses print the 100% requirement of non-judicial stamp papers, passports and other travel documents, cheques, bonds, warrants, postal stamps and postal stationery and other security products</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="cl"></div>
        </div>
    </div>



    <?php include 'includes/footer.php' ?>

</div>
<?php include 'includes/footer-link.php' ?>