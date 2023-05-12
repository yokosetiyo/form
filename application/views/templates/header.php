<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
        <title>Cuba - Premium Admin Template</title>
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/vendors/sweetalert2.css") ?>>
        <?php isset($_css) ? $this->load->view($_css) : ''; ?>
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    </head>
    <body>
        <!-- tap on top starts-->
        <div class="tap-top">
            <i data-feather="chevrons-up"></i>
        </div>
        <!-- tap on tap ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper compact-wrapper" id="pageWrapper">
            <!-- Page Header Start-->
            <div class="page-header">
                <div class="header-wrapper row m-0">
                    <div class="header-logo-wrapper">
                        <div class="logo-wrapper">
                            <a href="#">
                                <img class="img-fluid" src="../assets/images/logo/logo.png" alt="">
                            </a>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="sliders"></i>
                        </div>
                    </div>
                    <div class="nav-right col-12 pull-right right-header p-0">
                        <ul class="nav-menus">
                            <li class="maximize">
                                <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                                    <i data-feather="maximize"></i>
                                </a>
                                </li>
                            <li class="profile-nav onhover-dropdown p-0 mr-0">
                                <div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt="">
                                    <div class="media-body">
                                        <span><?= $this->session->userdata('nama_user') ?></span>
                                        <p class="mb-0 font-roboto">
                                            <?= ucfirst($this->session->userdata('role_user')) ?> <i class="middle fa fa-angle-down"></i>
                                        </p>
                                    </div>
                                </div>
                                <ul class="profile-dropdown onhover-show-div">
                                <!-- <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li> -->
                                <!-- <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li> -->
                                <!-- <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li> -->
                                <!-- <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li> -->
                                    <li>
                                        <btn onclick="logout()">
                                            <i data-feather="log-out"> </i><span>Log out</span>
                                        </btn>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Page Header Ends -->