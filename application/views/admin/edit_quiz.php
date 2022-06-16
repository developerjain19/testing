<!doctype html>
<html lang="en">


<?php $this->load->view('admin/template/header_link'); ?>


<body data-topbar="colored">
    <div id="layout-wrapper">
        <?php $this->load->view('admin/template/header'); ?>

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col-md-10">
                                <div class=d-flex align-items-center justify-content-between">
                                    <div class="page-title">
                                        <h12 class="mb-0 font-size-18"><?= $title; ?></h12>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class=d-flex align-items-center justify-content-between">
                                    <a href="<?= base_url('admin_Dashboard/quiz') ?>" class="btn btn-light"> Quiz List</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content-wrapper">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row">

                                                <div class="col-md-12 col-lg-12 col-xl-12">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label class="">Question</label>
                                                            <div class="pos-relative">
                                                                <textarea class="form-control" name="qus" id="editor1"><?= $quiz[0]['qus'] ?></textarea>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <label class="">Answer</label>
                                                            <input class="form-control" type="text" name="ans" value="<?= $quiz[0]['ans'] ?>">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="">Option 1</label>
                                                            <input class="form-control" type="text" name="opt1" value="<?= $quiz[0]['opt1'] ?>">
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <label class="">Option 2</label>
                                                            <input class="form-control" type="text" name="opt2" value="<?= $quiz[0]['opt2'] ?>">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="">Option 3</label>
                                                            <input class="form-control" type="text" name="opt3" value="<?= $quiz[0]['opt3'] ?>">
                                                        </div>

                                                        <div class="col-sm-12">
                                                            <label class="">Explination</label>
                                                            <div class="pos-relative">
                                                                <textarea class="form-control" name="explination"><?= $quiz[0]['explination'] ?></textarea>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <br>
                                                    <button class="btn btn-primary">Submit</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>

                    </div>
                    <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>

<script>
    CKEDITOR.replace('Resolution', {
        height: 200
    });
</script>