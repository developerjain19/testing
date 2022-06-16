<?php include 'includes/header-link.php' ?>


<div id="main" class="csstransition cmsms_inview cmsms_responsive">

    <div class="container">
        <?php include 'includes/header.php' ?>


        <div id="middle">

            <div class="content_wrap r_sidebar">
                <div role="main" id="content">
                    <div class="entry">
                        <div class="blog opened-article comment-respond">
                            <h1> Quiz Result !</h1>


                            <?php
                            $score = 0;
                            $i = 1;

                            foreach ($quiz as $quizrow) {
                                $querow = getSingleRowById('tbl_quiz', array('qid' => $quizrow['que']));
                            ?>
                                <div class="mb10">
                                    <p class="bold">
                                        <?= $i ?>.<?= strip_tags($querow['qus']) ?>
                                    </p>

                                    <?php if ($querow['ans'] != $quizrow['ans']) { ?>

                                        <p>
                                            Your answer - <?= strip_tags($quizrow['ans']) ?><span>&nbsp; <img src="<?= base_url() ?>/assets/pics/wrong.webp" height="20px"></span>
                                        </p>
                                        <p><span style="background-color: #ADFFB4">Correct answer - <?= strip_tags($querow['ans']) ?></span></p>
                                    <?php } else {
                                    ?>
                                        <p> Your answer - <?= strip_tags($quizrow['ans']) ?><span>&nbsp; <img src="<?= base_url() ?>/assets/pics/right.jpg" height="20px"></span></p>

                                    <?php
                                        $score++;
                                    }
                                    ?>
                                    <?php

                                    if ($querow['explination'] != '') {
                                    ?>

                                        <p> Explanation - <?= strip_tags($querow['explination']) ?></p> <br>

                                <?php
                                    }

                                    $i++;


                                    echo ' </div>';
                                } ?>
                                </div>
                                <br><br>

                                <div class="mb10">    <h2>Your Score: <?= $score ?>/10</h2>


                               
                                </div>
                                <a href="<?= base_url() ?>insolvency_quiz" class="button_medium">Play Again!</a>
                                </br> </br> </br>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php' ?>

    </div>
    <?php include 'includes/footer-link.php' ?>