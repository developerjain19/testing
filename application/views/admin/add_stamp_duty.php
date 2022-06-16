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
                                    <a href="<?= base_url('admin_Dashboard/view_Stamp_Duty') ?>" class="btn btn-light"> Stamp Duty List</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content-wrapper">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="row">


                                                <div class="col-md-12">
                                                    <label class="form-label">State</label>
                                                    <select class="form-control" name="state_id">
                                                        <option value="">Select State</option>
                                                        <?php
                                                        if ($state_list) {
                                                            foreach ($state_list as $state) {
                                                        ?>
                                                                <option value="<?= $state['state_id'] ?>"><?= $state['state_name'] ?></option>
                                                        <?php

                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-12">
                                                    <label class="form-label">Contact</label>
                                                    <select class="form-control" name="con_id" id="contact">
                                                        <option value="">Select Contact </option>
                                                        <?php
                                                        if ($contract) {
                                                            foreach ($contract as $con) {
                                                        ?>
                                                                <option value="<?= $con['contract_id'] ?>"><?= $con['cat_name'] ?></option>
                                                        <?php

                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">Sub Contract</label>
                                                    <select name="subcon_id" class="form-control" id="sub_contract">
                                                        <option value="">Select Sub-contract</option>
                                                    </select>
                                                </div>


                                                <div class="col-md-12">
                                                    <label class="form-label">Amount</label>
                                                    <input type="text" class="form-control" name="amount" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">Article Number</label>
                                                    <input type="text" class="form-control" name="article_number" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="form-label">Fees</label>
                                                    <input type="text" class="form-control" name="fees" />
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <div class="col-md-12">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->
                            </div>


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="<?= base_url('admin_Dashboard/importdata') ?>"  enctype="multipart/form-data">
                                            <div class="row">


                                                <div class="col-md-12">
                                                    <label class="form-label"> Import Stamp Duty File</label>
                                                    <input type="file" class="form-control" name="pname" placeholder="">
                                                </div>

                                            </div>

                                            <div class="mb-0">
                                                <div class="col-md-12">
                                                    <br>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                        Submit
                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Form -->
                                    </div>
                                    <!-- End Cardbody -->
                                </div>
                                <!-- End Card -->
                            </div>

                        </div>

                    </div>
                </div>



            </div>

        </div>


        <?php include 'template/footer_link.php'; ?>


</body>

</html>

<script>
    $(document).on('change', '#contact', function() {

        var contact = $(this).val();
        // console.log(state);
        $.ajax({
            method: "POST",
            url: "<?= base_url('Admin_Dashboard/get_subcontract') ?>",
            data: {
                contact: contact
            },
            success: function(response) {
                // console.log(response);
                $('#sub_contract').html(response);
            }
        });
    });
</script>