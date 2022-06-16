<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= base_url() ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/admin/images/logo.png" alt="Stamp Duty" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/admin/images/logo.png" alt="Stamp Duty" height="60" />
                    </span>
                </a>

                <a href="" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>assets/admin/images/logo.png" alt=" height=" 22" />
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>assets/admin/images/logo.png" alt="Stamp Duty" height="65" />
                    </span>
                </a>
            </div>
            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>

            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= base_url() ?>assets/admin/images/user.png" alt="Header Avatar" />
                </button>

                <div class="dropdown-menu dropdown-menu-end">

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-primary" href="<?= base_url('admin/logout') ?>"><i class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                        <span>Logout</span></a>
                </div>
            </div>


        </div>
    </div>
</header>


<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div class="user-details">
            <div class="d-flex">
                <div class="me-2">
                    <img src="assets/images/users/avatar-4.jpg" alt="Stamp Duty" class="avatar-md rounded-circle" />
                </div>
                <div class="user-info w-100">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Stamp Duty
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </div>

                    <p class="text-white-50 m-0">Administrator</p>
                </div>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li>
                    <a href="<?= base_url('admin'); ?>" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-tree"></i>
                        <span>Stamp Duty Contract</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li> <a href="<?= base_url('admin_Dashboard/view_contract'); ?>"><span>Main Contract</span></a></li>
                        <li>
                            <a href="<?= base_url('admin_Dashboard/view_subcontract'); ?>"><span>Sub Contract</span></a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?= base_url('admin_Dashboard/view_Stamp_Duty'); ?>" class="waves-effect">
                        <i class="mdi mdi-buffer"></i>
                        <span>Stamp Duty</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin_Dashboard/blog'); ?>"><i class="mdi mdi-page-layout-sidebar-left" aria-hidden="true"></i><span>Blog </span></a>
                </li>

                <li>
                    <a href="<?= base_url('admin_Dashboard/quiz'); ?>"><i class="mdi mdi-table-settings" aria-hidden="true"></i><span>Quiz </span></a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>