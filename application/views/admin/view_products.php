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
                                    <a href="<?= base_url('admin_Dashboard/add_products') ?>" class="btn btn-light">Add <?= $title ?></a>
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

                                                    <th>Category/Subcategory Name</th>
                                                    <th>Product Name</th>
                                                    <th>Quantity/ Quantity type</th>
                                                    <th>Product Price</th>
                                                    <th>Product Image</th>
                                                    <th>Disable</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if ($products  != '') {
                                                    foreach ($products as $fetchrow) {

                                                        $cat = getRowById('category', 'category_id', $fetchrow['category_id']);
                                                        $subcat = getRowById('sub_category', 'sub_category_id', $fetchrow['subcategory_id']);

                                                ?>

                                                        <tr>
                                                            <td><?php echo $i; ?></td>

                                                            <td>
                                                                <?= $cat[0]['cat_name']; ?>/<?= $subcat[0]['subcat_name'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo wordwrap($fetchrow['pro_name'], 10, '<br>'); ?></td>
                                                            <td>
                                                                <?= $fetchrow['quantity']; ?>/<?= $fetchrow['quantity_type'] ?>
                                                            </td>
                                                            <td><?= $fetchrow['price']; ?></td>
                                                            <td>
                                                                <img src="<?php echo base_url();  ?>uploads/products/<?= $fetchrow['img']; ?>" style="width: 50px;height: 50px;" />
                                                            </td>
                                                            <td> <a href="<?php echo base_url() . 'admin_Dashboard/disable/' . $fetchrow['product_id'] . '/products/' . (($fetchrow['status'] == '1') ? '0' : '1'); ?>" class="btn btn-light"><?php if ($fetchrow['status'] == '0') { ?><i class="fas fa-eye"></i><?php } else { ?> <i class="fas fa-eye-slash"></i><?php } ?></a></td>
                                                            <td>
                                                                <a href="<?php echo base_url() . 'admin_Dashboard/edit_products/' . $fetchrow['product_id']; ?>" class="btn btn-success edit"><i class="fas fa-pencil-alt"></i></a>

                                                                <a href="<?php echo base_url() . 'admin_Dashboard/deleteproducts/' . $fetchrow['product_id']; ?>" class="btn btn-primary delete"><i class="fas fa-trash-alt"></i></a>
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
                        </section>
                    </div>
                    <?php $this->load->view('admin/template/footer_link'); ?>
                    <script>
                        $('.salehm').change(function() {

                            var pid = $(this).data('id');
                            var sale = $('#sale' + pid).val();
                            // console.log(df);
                            $.ajax({
                                method: "POST",
                                url: "<?= base_url('admin_Dashboard/productOnSale') ?>",
                                data: {
                                    sale: sale,
                                    pid: pid
                                },
                                success: function(response) {
                                    $('#featuredmsg').html('');
                                    $('#salemsg').html('Product is on Sale Now');
                                }
                            });
                        });
                        $('.featuredhm').change(function() {

                            var pid = $(this).data('id');
                            var featured = $('#featured' + pid).val();
                            $.ajax({
                                method: "POST",
                                url: "<?= base_url('admin_Dashboard/featuredProduct') ?>",
                                data: {
                                    featured: featured,
                                    pid: pid
                                },
                                success: function(response) {
                                    $('#salemsg').html('');
                                    $('#featuredmsg').html('Product is featured Now');
                                }
                            });
                        });
                    </script>
</body>

</html>