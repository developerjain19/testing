<!doctype html>
<html lang="en">


<?php $this->load->view('admin/template/header_link'); ?>

<body data-topbar="colored">
    <div id="layout-wrapper">
        <?php $this->load->view('admin/template/header'); ?>
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid ">
                    <div class="page-title-box">
                        <div class="row ">
                            <div class="col-md-9">
                                <div class=" d-flex align-items-center justify-content-between">
                                    <div class="page-title">
                                        <h4 class="mb-0 font-size-18"><?= $title; ?></h4>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="page-content-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-12">
                                                    <div class="">
                                                        <div class="form-group">
                                                            <label class="">Contract</label>
                                                            <select class="form-control" name="cat_id">
                                                                <option>Select contract</option>
                                                                <?php
                                                                foreach ($contract as $cat) {
                                                                ?>
                                                                    <option value="<?= $cat['contract_id'] ?>"><?= $cat['cat_name'] ?></option>
                                                                <?php
                                                                }
                                                                ?>

                                                            </select>

                                                        </div>

                                                        <div class="form-group">
                                                            <label class="">Sub Contract Name</label>
                                                            <input class="form-control" required="" type="text" name="subcat_name" required>
                                                        </div>

                                                        <br>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0;width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S No</th>
                                                    <th>Contract Name</th>
                                                    <th>Sub Contract Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if ($sub_contract != '') {
                                                    foreach ($sub_contract as $row) {
                                                        $cat = getRowById('contract', 'contract_id', $row['cat_id']);
                                                ?>

                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo ((empty($cat[0]['cat_name'])) ? 'deleted' : $cat[0]['cat_name']); ?></td>
                                                            <td><?php echo $row['subcat_name']; ?></td>
                                                            <td>


                                                                <div class="modal fade bs-example-modal-center<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Update Sub-Contract</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST" action="<?php echo base_url() . 'admin_Dashboard/editsubcontract' ?>">

                                                                                    <input type="hidden" value="<?= $row['sub_contract_id'] ?>" name="sub_contract_id">


                                                                                    <div class="col-md-12 col-lg-12 col-xl-12">
                                                                                        <div class="">
                                                                                            <div class="form-group">
                                                                                                <label class="">Contract</label>
                                                                                                <select class="form-control" name="cat_id">
                                                                                                    <option>Select contract</option>
                                                                                                    <?php
                                                                                                    foreach ($contract as $cat) {
                                                                                                    ?>
                                                                                                        <option value="<?= $cat['contract_id'] ?>" <?= (($cat['contract_id'] == $row['cat_id']) ? 'Selected' : '') ?>><?= $cat['cat_name'] ?></option>
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>

                                                                                                </select>

                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="">Sub Contract Name</label>
                                                                                                <input class="form-control" required="" type="text" name="subcat_name" value="<?php echo $row['subcat_name']; ?>">
                                                                                            </div>

                                                                                            <br>
                                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center<?= $i ?>" class="btn btn-info">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </button>


                                                            </td>
                                                            <td>

                                                                <a href="<?php echo base_url() . 'admin_Dashboard/deletesubcontract/' . $row['sub_contract_id']; ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></a>
                                                            </td>


                                                        </tr>

                                                <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>
                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </section>

                </div>
                <!-- container-scroller -->
                <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>