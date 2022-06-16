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
                                        <h4 class="mb-0 font-size-18"><?= $title; ?></h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class=d-flex align-items-center justify-content-between">
                                    <a href="<?= base_url('admin_Dashboard/blog_add') ?>" class="btn btn-light"> Blog Add </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content-wrapper">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <?php if ($msg = $this->session->flashdata('msg')) :
                                            $msg_class = $this->session->flashdata('msg_class') ?>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="alert  <?= $msg_class; ?>"><?= $msg; ?></div>
                                                </div>
                                            </div>
                                        <?php
                                            $this->session->unset_userdata('msg');
                                        endif; ?>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="
                                    border-collapse: collapse;
                                    border-spacing: 0;
                                    width: 100%;
                                    ">
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Author</th>
                                                    <th>Author Designation </th>
                                                    <th>Description</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($blog as $row) {
                                                ?>

                                                    <tr>
                                                        <td><?php echo $i; ?></td>

                                                        <td><?= $row['title']; ?></td>
                                                        <td>
                                                            <img src="<?= base_url(); ?>uploads/blog/<?= $row['image']; ?>" style="width: 50px;height: 50px;" />
                                                        </td>

                                                        <td><?= $row['author']; ?></td>

                                                        <td><?= $row['designation']; ?></td>
                                                        <td><?= substr($row['description'], 0, 80); ?></td>
                                                        <td> <a href="<?php echo base_url() . 'admin_Dashboard/editblog/' . $row['id']; ?>" class="btn btn-success edit"><i class="fas fa-pencil-alt"></i></a> </td>
                                                        <td><a href="<?php echo base_url() . 'admin_Dashboard/deleteblog/' . $row['id']; ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>

                                                <?php
                                                    $i++;
                                                }
                                                ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Author</th>
                                                    <th>Author Designation </th>
                                                    <th>Description</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </section>
                    <!--END PAGE CONTENT -->
                </div>

                <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>