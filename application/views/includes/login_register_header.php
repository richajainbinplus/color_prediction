<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Color prediction</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="" rel="icon">-->
  <!--<link href="" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <!--  Main CSS File -->
  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/css/custum_style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
/*login css*/
 .login-heading {
    color: #1AA235;
    font-weight: 600;
    font-sizE:28px;
}
.btn-success{
     background: #1AA235!important;
     border-color: #1AA235!important;
       box-shadow: 0 .002rem 1rem rgba(0,0,0,.10)!important;
}
.btn-custum{
    border-radius:12px!important;
}
.login-section p{
    font-size: 16px;
}
.form-control {
   display: block;
    width: 100%;
    border: 0px;
    padding: 15px 0.75rem;
    border-radius: 12px!important;
    box-shadow: 0 .002rem 1rem rgba(0,0,0,.10)!important;
}
.forgot_password_modal .form-control{
    padding:10px;
}
.login-heading-sectoin{
    margin-bottom:50px;
}
.blue-text{
    color:#1ABADC;
}
.blue-border-line{
    border-bottom:1px solid #1ABADC;
}
.link-sm{
    font-size:13px;
}
.password_hide{
   float: right;
    text-align: right;
    margin-left: auto;
    margin-right: 17px;
    right: 13px;
    margin-top: -36px 
}
.login-section {
    padding: 20% 0px;
    background: url(<?= base_url()?>assets/img/login.jpeg);
    background-size:cover;
}
.forgot_password_modal{
    
}
.custum-close{
    color: #DA1D1D!important;
    background: none;
    padding: 5px 8px!important;
    border: 0px;
    box-shadow: none!important;
}
.bottom-border-0{
    border-bottom:0px!important;
}
.modal-login-heading{
    color: #1AA235;
    font-weight: 600;
    font-sizE: 20px;
}
.font-10{
    font-size:10px;
}
.font-11{
    font-size:11px;
}
.font-12{
    font-size:12px;
}
.text-red{
    color:#DA1D1D;
}
label{
    font-size:14px;
    margin-bottom:10px;
}
/*login css*/
@media screen and (max-width: 600px) {
  .login-section {
        padding: 20% 10px;
    }
}
</style>
<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<script>
    const togglePassword1 = document.querySelector('#togglePassword1');
  const password1 = document.querySelector('#id_password1');
 
  togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
// for Sponsor Id

    const togglePassword2 = document.querySelector('#togglePassword2');
  const password2 = document.querySelector('#id_password2');
 
  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
<body>
<main id="main">
    <section class="main-section no-padding">
        <div class="container custum-container">
            <div class="row">
                <div class="col-lg-4 col-md-3"></div>
                 <div class="col-lg-4 col-md-6 center-section">
                      <!-- ======= Header ======= -->
                      <!--<header id="header" class="header fixed-top shadow-sm">-->
                      <!--  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">-->
                    
                      <!--    <a href="" class="logo text-white align-items-center">-->
                      <!--      <h4>Color</h4>-->
                      <!--       Prediction Game-->
                      <!--    </a>-->
                    
                          <!-- .navbar -->
                      <!-- </div>-->
                      <!--</header>-->
                      <!-- End Header -->