                </div>
                <!-- footer start-->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 footer-copyright text-center">
                                <p class="mb-0">Copyright 2020 © Cuba theme by pixelstrap  </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="../assets/js/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js-->
        <script src="../assets/js/bootstrap/popper.min.js"></script>
        <script src="../assets/js/bootstrap/bootstrap.js"></script>
        <!-- feather icon js-->
        <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- Sidebar jquery-->
        <script src="../assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <script src="../assets/js/sidebar-menu.js"></script>
        <script src="../assets/js/tooltip-init.js"></script>
        <script src=<?= base_url("assets/js/notify/bootstrap-notify.min.js") ?>></script>
        <script src=<?= base_url("assets/js/sweet-alert/sweetalert.min.js") ?>></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="../assets/js/script.js"></script>
        <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
        <!-- login js-->
        <!-- Plugin used-->
        <?php isset($_js) ? $this->load->view($_js) : ''; ?>

        <script type="text/javascript">
            function logout() {
                swal({
                    title: "Log out dari Aplikasi?",
                    // text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: {
                        cancel: "Tidak",
                        Ya: true
                    },
                    dangerMode: true,
                })
                .then((value) => {
                    if (value) {
                        // swal("Poof! Your imaginary file has been deleted!", {
                        //     icon: "success",
                        // });
                        location.href = '<?= base_url($this->role_user."/dashboard/logout") ?>';
                    }
                    // else {
                    //     swal("Your imaginary file is safe!");
                    // }
                })
            }
        </script>
    </body>
</html>