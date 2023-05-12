
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href=<?= base_url("assets/images/favicon.png") ?> type="image/x-icon">
        <link rel="shortcut icon" href=<?= base_url("assets/images/favicon.png") ?> type="image/x-icon">
        <title>Cuba - Premium Admin Template</title>
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/fontawesome.css") ?>>
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/vendors/icofont.css") ?>>
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/vendors/themify.css") ?>>
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/vendors/flag-icon.css") ?>>
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/vendors/feather-icon.css") ?>>
        <!-- Plugins css start-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/vendors/sweetalert2.css") ?>>
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/vendors/bootstrap.css") ?>>
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/style.css") ?>>
        <link id="color" rel="stylesheet" href=<?= base_url("assets/css/color-1.css") ?> media="screen">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href=<?= base_url("assets/css/responsive.css") ?>>
    </head>
    <body>
        <!-- login page start-->
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">     
                    <div class="login-card">
                        <div>
                            <!-- <div>
                                <a class="logo" href="index.html">
                                    <img class="img-fluid for-light" src=<?= base_url("assets/images/logo/login.png") ?> alt="looginpage">
                                    <img class="img-fluid for-dark" src=<?= base_url("assets/images/logo/logo_dark.png") ?> alt="looginpage">
                                </a>
                            </div> -->
                            <div class="login-main"> 
                                <form class="theme-form" id="formlogin">
                                    <h4>Masuk ke aplikasi</h4>
                                    <p>Isikan username dan password Anda</p>
                                    <div class="form-group">
                                        <label class="col-form-label">Username</label>
                                        <input class="form-control" type="text" name="username" required="" placeholder="Isikan username Anda" id="username">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <input class="form-control" type="password" name="password" required="" placeholder="Isikan password Anda" id="password">
                                        <div class="show-hide"><span class="show">                         </span></div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <!-- <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Remember password</label>
                                        </div><a class="link" href="forget-password.html">Forgot password?</a> -->
                                        <button class="btn btn-primary btn-block" type="submit" id="btn_login">Masuk</button>
                                    </div>
                                    <!-- <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                                    <div class="social mt-4">
                                        <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                                    </div>
                                    <p class="mt-4 mb-0">Don't have account?<a class="ml-2" href="sign-up.html">Create Account</a></p> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest jquery-->
            <script src=<?= base_url("assets/js/jquery-3.5.1.min.js") ?>></script>
            <!-- Bootstrap js-->
            <script src=<?= base_url("assets/js/bootstrap/popper.min.js") ?>></script>
            <script src=<?= base_url("assets/js/bootstrap/bootstrap.js") ?>></script>
            <!-- feather icon js-->
            <script src=<?= base_url("assets/js/icons/feather-icon/feather.min.js") ?>></script>
            <script src=<?= base_url("assets/js/icons/feather-icon/feather-icon.js") ?>></script>
            <!-- Sidebar jquery-->
            <script src=<?= base_url("assets/js/config.js") ?>></script>
            <!-- Plugins JS start-->
            <script src=<?= base_url("assets/js/notify/bootstrap-notify.min.js") ?>></script>
            <script src=<?= base_url("assets/js/sweet-alert/sweetalert.min.js") ?>></script>
            <!-- Plugins JS Ends-->
            <!-- Theme js-->
            <script src=<?= base_url("assets/js/script.js") ?>></script>
            <!-- login js-->
            <!-- Plugin used-->
            <script>
                const FORM_URL = "http://setiyo.test/form/login/aksi";
                $(`#formlogin`).submit(function (event) {
                    var formData = {
                        username: $(`#username`).val(),
                        password: $(`#password`).val()
                    };

                    $.ajax({
                        type: 'POST',
                        url: FORM_URL,
                        data: formData,
                        dataType: 'JSON',
                        encode: true
                    }).done(function (data) {
                        if(data.status) {
                            $(`#btn_login`).prop('disabled',true);
                            $.notify(
                            {
                                title: data.message,
                                message: 'Akan dialihkan ke halaman dashboard...'
                            },
                            {
                                type: 'success',
                                allow_dismiss:false,
                                newest_on_top:false ,
                                mouse_over:false,
                                showProgressbar:false,
                                spacing:10,
                                timer:1000,
                                placement:{
                                    from:'top',
                                    align:'right'
                                },
                                offset:{
                                    x:30,
                                    y:30
                                },
                                delay:500 ,
                                z_index:10000,
                                animate:{
                                    enter:'animated bounce',
                                    exit:'animated bounce'
                                }
                            });
                            setTimeout(function () {
                                window.location.href = data.url;
                            },1500)
                        } else {
                            swal("Gagal!", data.message, "error");
                        }
                    });
                    event.preventDefault();
                });
            </script>
        </div>
    </body>
</html>