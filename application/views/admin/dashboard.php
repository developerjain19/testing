<!doctype html>
<html lang="en">


<?php $this->load->view('admin/template/header_link'); ?>


<body data-topbar="colored">
  <div id="layout-wrapper">
    <?php $this->load->view('admin/template/header'); ?>

    <div class="main-content">

      <div class="page-content">
        <div class="container-fluid">

          <!-- start page title -->
          <div class="row">
            <div class="col-12">
              <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="page-title">
                  <h4 class="mb-0 font-size-18">Dashboard</h4>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Welcome to <b>LAW SUITE</b> Dashboard</li>
                  </ol>
                </div>


              </div>
            </div>
          </div>
          <!-- end page title -->

          <!-- Start page content-wrapper -->
          <div class="page-content-wrapper">
            <div class="row">
              <div class="col-xl-6 col-md-6">
                <div class="card bg-primary mini-stat position-relative">
                  <div class="card-body">
                    <div class="mini-stat-desc">

                      <div class="text-white">
                        <h5 class="text-uppercase font-size-16 text-white-50">Project Layout</h5>

                        <h3 class="mb-3 text-white">

                        </h3>

                      </div>
                      <div class="mini-stat-icon">
                        <i class="mdi mdi-cube-outline display-2"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Col -->

              <div class="col-xl-6 col-md-6">
                <div class="card bg-primary mini-stat position-relative">
                  <div class="card-body">
                    <div class="mini-stat-desc">

                      <div class="text-white">
                        <h5 class="text-uppercase font-size-16 text-white-50">Life Style Gallery</h5>

                        <h3 class="mb-3 text-white">

                        </h3>

                      </div>
                      <div class="mini-stat-icon">
                        <i class="mdi mdi-buffer display-2"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Col -->

            </div>


            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <?php foreach ($contactdetails as $row) {
                    ?>

                      <form action="<?php echo base_url() . 'admin_Dashboard/editcontactdetils' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

                          <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="form-group">
                              <label class="">First Contact</label>
                              <input class="form-control" type="text" name="f_contact" value="<?= $row['f_contact'] ?>">
                            </div>

                            <div class="form-group">
                              <label class="">Second Contact</label>
                              <input class="form-control" type="text" name="s_contact" value="<?= $row['s_contact'] ?>">
                            </div>
                            <div class="form-group">
                              <label class="">First Email</label>
                              <input class="form-control" type="text" name="f_email" value="<?= $row['f_email'] ?>">
                            </div>
                            <div class="form-group">
                              <label class="">Second Email</label>
                              <input class="form-control" type="text" name="s_email" value="<?= $row['s_email'] ?>">
                            </div>
                            <div class="form-group">
                              <label class="">Address</label>
                              <input class="form-control" type="text" name="address" value="<?= $row['address'] ?>">
                            </div>
                            <div class="form-group">
                              <label class="">Facebook link</label>
                              <input class="form-control" type="text" name="facebook" value="<?= $row['facebook'] ?>">
                            </div>
                            <div class="form-group">
                              <label class="">Instagram link</label>
                              <input class="form-control" type="text" name="instagram" value="<?= $row['instagram'] ?>">
                            </div>
                            <div class="form-group">
                              <label class="">Youtube link</label>
                              <input class="form-control" type="text" name="youtube" value="<?= $row['youtube'] ?>">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>

                  </div>
                  </form>
                <?php
                    }
                ?>
                </div>
              </div>
            </div>

          </div>


        </div>
        <!-- Container-fluid -->
      </div>
      <!-- End Page-content -->



    </div>
  </div>

  </div>
  <?php $this->load->view('admin/template/footer_link'); ?>
</body>

</html>