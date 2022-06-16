<?php include 'includes/header-link.php' ?>


<div id="main" class="csstransition cmsms_inview cmsms_responsive">

    <div class="container">
        <?php include 'includes/header.php' ?>


        <div id="middle">

            <div class="content_wrap r_sidebar">
                <div role="main" id="content">
                    <div class="entry">
                        <div class="blog opened-article">
                            <h3>Insolvency Quiz</h3>

                            <div class="divider"></div>

                            <div id="respond" class="comment-respond">

                                <form action="<?= base_url() ?>resultdisplay" method="post" id="commentform" class="comment-form">


                                    <?php

                                    $i = 0;
                                    if (!empty($quiz)) {
                                        foreach ($quiz as $row) {
                                            
                                            $i = $i + 1;
                                    ?>
                                            <?php $ans_array = array($row['opt1'], $row['opt2'], $row['opt3'], $row['ans']);
                                            shuffle($ans_array); ?>

                                            <div class="mb10">

                                            <p class="comment-form-author">
                                                <label for="author">Qus <?= $i ?> : <?= strip_tags($row['qus']) ?>
                                                </label>

                                            </p>
                                            <p class="comment-form-author">
                                            <input type="hidden" name="question[]" value="<?= $row['qid'] ?>" required> 
                                            <input type="radio" name="answer<?= $row['qid'] ?>" value="<?= $ans_array[0] ?>" required> <?= $ans_array[0] ?></p>
                                            <p class="comment-form-author">
                                            <input type="radio" name="answer<?= $row['qid'] ?>" value="<?= $ans_array[1] ?>"> <?= $ans_array[1] ?></p>
                                            <p class="comment-form-author">
                                            <input type="radio" name="answer<?= $row['qid'] ?>" value="<?= $ans_array[2] ?>"> <?= $ans_array[2] ?></p>
                                            <p class="comment-form-author">
                                            <input type="radio" name="answer<?= $row['qid'] ?>" value="<?= $ans_array[3] ?>"> <?= $ans_array[3] ?></p>
                                            </div>

                                    <?php
                                        }
                                    }
                                    ?>



                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit" />

                                    </p>

                                </form>
                            </div><!-- #respond -->
                        </div>
                    </div>
                </div>

                <div class="cl"></div>
            </div>
        </div>


        <?php include 'includes/footer.php' ?>

    </div>
    <?php include 'includes/footer-link.php' ?>