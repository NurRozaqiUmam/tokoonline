<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>SAZAN Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/karma/css/main.css">
</head>

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?php echo base_url() ?>assets/karma/img/login.jpg" alt="">
                    <div class="hover">
                        <h4>Welcome!</h4>
                        <p>Selamat datang di marketplace yang sangat anggun menawan dan futuristik</p>
                        <p>Be our Customer!</p>
                        <a class="primary-btn" href="<?php echo base_url('registrasi'); ?>">Create an Account</a>
                        <br>
                        <br>
                        <p>Be our Partner!</p>
                        <a class="primary-btn" href="<?php echo base_url('registrasi/registtenant'); ?>">Become a Seller</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <form class="row login_form" action="<?php echo base_url('auth/login')?>" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>') ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" value="" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password Anda" name="password">
                            
                            <div class="creat_account">
                                <input type="checkbox" onclick="loginlihatpassword()"> Show Password</input>

                                <script>
                                    function loginlihatpassword() {
                                        var pass = document.getElementById("exampleInputPassword");
                                        if(pass.type=="password"){
                                        pass.type="text";
                                        }
                                        else {
                                        pass.type="password";
                                        }
                                    }
                                </script>
                                <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>') ?>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Log In</button>
                        </div>
                        <div class="col-md-6 form-group">
                            <a href="<?php echo base_url('auth/login_tenant')?>">Tenant Login Here</a>
                        </div>
                        <div class="col-md-6 form-group">
                            <a href="<?php echo base_url('auth/login_admin')?>">Admin Login Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
<!-- End footer Area -->

    <script src="<?php echo base_url() ?>assets/karma/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/jquery.sticky.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/nouislider.min.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/countdown.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/gmaps.min.js"></script>
	<script src="<?php echo base_url() ?>assets/karma/js/main.js"></script>
</body>

</html>