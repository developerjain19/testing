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
                            <div class="col-md-10">
                                <div class=" d-flex align-items-center justify-content-between">
                                    <div class="page-title">
                                        <h4 class="mb-0 font-size-18"><?= $title; ?></h4>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class=" d-flex align-items-center justify-content-between">
                                    <a href="<?= base_url('admin_Dashboard/add_stamp_duty') ?>" class="btn btn-light">Add <?= $title ?></a>
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
                                                    <th>Id</th>
                                                    <th>State </th>
                                                    <th>Contract</th>
                                                    <th>Sub Contract</th>
                                                    <th>Amount</th>
                                                    <th>Article Number</th>
                                                    <th>Registration Fees</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php
                                                $i = 1;
                                                if (!empty($stamp_duty)) {
                                                    foreach ($stamp_duty as $cons) {
                                                        $state = getRowById('tbl_state', 'state_id', $cons['state_id']);
                                                        $contract = getRowById('contract', 'contract_id', $cons['con_id']);
                                                        $subcon = getRowById('sub_contract', 'sub_contract_id', $cons['subcon_id']);

                                                ?>

                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?= $state[0]['state_name'] ?></td>

                                                            <td><?= $contract[0]['cat_name'] ?></td>
                                                            <td><?= $subcon[0]['subcat_name'] ?></td>

                                                            <td><?= $cons['amount'] ?></td>
                                                            <td><?= $cons['article_number'] ?></td>
                                                            <td><?= $cons['fees'] ?></td>
                                                            <td>
                                                                <a href="<?php echo base_url() ?>admin_Dashboard/stamp_duty_edit/<?= encryptId($cons['stamp_id']); ?>" class="btn btn-success edit"><i class="fas fa-pencil-alt"></i>
                                                                </a>


                                                                <!-- <a href="<?php echo base_url() . 'admin_Dashboard/stamp_duty_del?BdID=' . $cons['uid']; ?>" class="btn btn-primary delete"><i class="fas fa-trash-alt"></i></a> -->
                                                            </td>

                                                        </tr>

                                                <?php
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
                </div>
            </div>

        </div>


        <?php include 'template/footer_link.php'; ?>


</body>

</html>