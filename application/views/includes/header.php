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
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">-->

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
   <link href="<?= base_url()?>assets/css/custom_css.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
          /*Css for form control style and btn*/
      .form-control {
    display: block;
    width: 100%;
    border: 0px;
    padding: 15px 0.75rem;
    border-radius: 12px!important;
    box-shadow: 0 .002rem 1rem rgba(0,0,0,.10)!important;
}
.form-select{
  display: block;
    width: 100%;
    border: 0px;
    padding: 15px 0.75rem;
    border-radius: 12px!important;
    box-shadow: 0 .002rem 1rem rgba(0,0,0,.10)!important;   
}
::-webkit-input-placeholder {
font-size:15px;
font-weight:500;
color:#dfe2e5!important;
} 
.btn-custum {
    border-radius: 12px!important;
}

.btn-success {
    background: #1AA235!important;
    border-color: #1AA235!important;
    box-shadow: 0 .002rem 1rem rgba(0,0,0,.10)!important;
}
    .border_control{
    border-top:0!important;
    border-right:0!important;
    border-left:0!important;
    border-bottom: 1px solid #a79f9f!important;
    box-shadow:0 0 0 0 white!important;
    border-radius:0!important;
}
.yellow{
    color:#e9e90f;
}
.win_span{
    color:green;
}
.red_span{
    color:red;
}
.color_box{
    position: absolute;
    display: flex;
    margin-left:32px;
}
 .violet_box{
     width: 10px;
    height: 10px;
    border-radius: 3px;
    background:violet;
    margin-left:10%;
 } 
/*end of form control css*/

.white_color .btn{
    color:white!important;
}

.red_btn{
        color: white!important;
    border-radius: 4px;
}
.green_btn{
        color: white;
        border-radius: 4px;
}
.violet_btn{
        color: white;
       border-radius: 4px;
}
@media only screen and (min-width: 992px){
    .fixed-footer {
    background: #1AA235;
    position: fixed;
    width: 30%!important;
    z-index: 99999;
    bottom: 0px;
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
     padding: 5px 0px;
  }
}


/*@media (min-width: 1200px){*/
/*    .fixed-footer {*/
/*    width: 28%!important;*/
/*    }*/
/*}*/
/*@media (min-width: 1400px){*/
/*.fixed-footer {*/
/*    width: 29%!important;*/
/*}*/
/*}*/
@media only screen and (min-width: 992px){
.center-section {
    width: 440px;
}
.fixed-footer {
   width: 440px!important;
}
.font_size3{
    font-size:14px;
}

}
.gradient1{
    background: linear-gradient(#e66465, #9198e5)!important;
}
.gradient2{
    background: linear-gradient(#e66465, #12BE34)!important;
}
/*modal css*/
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
   .won-text{
       font-size:45px;
       font-weight:800;
   }
   .fontw-550{
       font-weight:550;
   }
/*modal css*/
  </style>
</head>

<body>
<main id="main">
    <section class="main-section no-padding">
        <div class="container custum-container">
            <div class="row">
                <div class="col-lg-4 col-md-3"></div>
                 <div class="col-lg-4 col-md-6 center-section">
                      <!-- ======= Header ======= -->
                      <header id="header" class="header fixed-top shadow-sm">
                        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                    
                          <a href="" class="logo text-white align-items-center">
                            <h4>Color</h4>
                             Prediction Game
                          </a>
                    
                          <!-- .navbar -->
                       </div>
                      </header>
                      <!-- End Header -->