<div class="container-fluid">

    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from store-html.buildwithangga.id/dashboard-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 02:33:35 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="<?php echo base_url() ?>assets/aset/style/main.css" rel="stylesheet" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/aset/css/all.css">
    </head>

    <body>
        <div class="page-dashboard">
            <div class="d-flex" id="wrapper" data-aos="fade-right">
                <!-- Sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-center"><br>
                        <i style="color:#f9b234;" class="fas fa-user-alt fa-3x"></i><br><br>
                        <div class="sidebar-brand-text mx-3"><h2><?php echo $this->session->userdata('username') ?></h2></div>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="<?php echo base_url('dashboard/myaccount') ?>" class="list-group-item list-group-item-action active">My Account</a>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="<?php echo base_url('transaksi') ?>" class="list-group-item list-group-item-action active">My Order</a>
                    </div>
                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto d-none d-lg-flex">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="indextoko.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if ($this->session->userdata('username')) { ?>
                                            <i style="color:#f9b234;" class="fas fa-user-alt fa-2x"></i>
                                            &ensp;Customer
                                        <?php } ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"><?php echo $this->session->userdata('username') ?></a>
                                    <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('categories') ?>">Lanjukan Belanja</a>
                                    <div class="dropdown-divider"></div>    
                                        <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="section-content section-dashboard-home" data-aos="fade-up">
                        <div class="container-fluid">
                            <div class="dashboard-heading">
                                <h2 class="dashboard-title">My Account</h2>
                                <p class="dashboard-subtitle">
                                    Order Tracking
                                </p>
                            </div>
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Upload Bukti Bayar</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo base_url().'transaksi/update';?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="text" name="nama_penerima" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" name="bukti" class="form-control" id="exampleInputFile">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo base_url() ?>assets/aset/vendor/jquery/jquery.slim.min.js"></script>
        <script src="<?php echo base_url() ?>assets/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/aset/../unpkg.com/aos%402.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    <!-- Mirrored from store-html.buildwithangga.id/dashboard-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 02:33:35 GMT -->

    </html>

</div>