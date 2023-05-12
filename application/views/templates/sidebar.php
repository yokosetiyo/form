            <!-- Page Body Start-->
            <div class="page-body-wrapper sidebar-icon">
                <!-- Page Sidebar Start-->
                <div class="sidebar-wrapper">
                    <div class="logo-wrapper">
                        <a href="#">
                            <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="">
                            <img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="">
                        </a>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="#">
                            <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links custom-scrollbar">
                                <li class="back-btn">
                                    <a href="#">
                                        <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
                                    </a>
                                    <div class="mobile-back text-right">
                                        <span>Back</span>
                                        <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6>Menu</h6>
                                        <!-- <h6 class="lan-1">Menu</h6> -->
                                        <!-- <p class="lan-2">Dashboards,widgets & layout.</p> -->
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="<?= base_url($this->session->userdata('role_user').'/dashboard') ?>">
                                        <i data-feather="home"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <?= $this->load->view('templates/sidebar_'.$this->session->userdata('role_user'),array(),true) ?>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
                <!-- Page Sidebar Ends-->
                <div class="page-body">