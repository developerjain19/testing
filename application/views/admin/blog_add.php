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
                                    <a href="<?= base_url('admin_Dashboard/blog') ?>" class="btn btn-light"> Blog List</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content-wrapper">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form action="<?php echo base_url('admin_Dashboard/blog_add') ?>" method="post" enctype="multipart/form-data">
                                            <div class="row">

                                                <div class="col-md-12 col-lg-12 col-xl-12">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label class="">Title</label>
                                                            <input class="form-control" required="" type="text" name="title" required>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <label class="">Image</label>
                                                            <div class="pos-relative">
                                                                <input class="form-control pd-r-80" required="" type="file" name="image">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="">Author Name</label>
                                                            <input class="form-control" type="text" name="author" required>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="">Designation</label>
                                                            <div class="pos-relative">
                                                                <input class="form-control pd-r-80" type="text" name="designation" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="">Description</label>
                                                            <div class="pos-relative">
                                                                <textarea class="form-control" name="description" id="editor1"></textarea>
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