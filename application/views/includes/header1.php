<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Color prediction</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

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
  
    <!--datatable-->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</head>
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
option[selected] {
    background: #1AA235!important;
    color:white!important;
}
option:checked {
    background: #1AA235!important;
    color:white!important;
}

option:hover{
    background: #1AA235!important;
    color:white!important;
}
/*::-webkit-input-placeholder {*/
/*font-size:15px;*/
/*font-weight:500;*/
/*color:#dfe2e5!important;*/
/*} */
/*::placeholder {*/
/*  color:#dfe2e5!important;*/
/*}*/
/*  option:not(first-child) {*/
/*        color: #000;*/
/*    }*/
/*    option:not(:selected) { color: #000; }*/
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
    margin-left:29px;
    margin-top:-2%;
}
 .violet_box{
     width: 10px;
    height: 10px;
    border-radius: 3px;
    background:violet;
    margin-left:10%;
 } 
/*end of form control css*/
.dataTables_wrapper .dataTables_paginate .paginate_button.current{
 background:#1AA235!important; 
 color:white!important;
}
.white_color .btn{
    color:white!important;
}
.green_btn{
    color:white;
    font-size:12px;
}
/*Datatable css*/

   .dataTables_wrapper .dataTables_filter input {
display:none;
}
table.dataTable thead th{
    background:#1AA235;
    color:white;
}
.dataTables_wrapper .dataTables_length {
    text-align: center;
    float:none;
}
.dataTables_wrapper .dataTables_paginate {
    float: none;
    text-align: center;
    padding-top:25px;
    font-size: 10px;
}
label {
    font-size: 12px;
    display: inline-block;
    font-weight: 700;
    /*margin-top: 4%;*/
    /*margin-bottom:3%;*/
}
.top-page-name-section{
    background:url(<?php echo base_url()?>assets/images/slider/banner_1.png);
    text-align:center;
    background-size:cover;
    padding:50px 0px;
}
.font-14{
    font-size:14px;
}
.h-35{
    height:30px;
}
.top-page-name-section h4{
   font-size: 32px;
    font-weight: 600;
}
.top-page-name-section h5{
   font-size: 25px;
    font-weight: 600;
}
.logo h4 i{
    font-size:20px;
    font-weight:900;
}
table.dataTable thead th {
      border: 1px solid white;  
}
.dataTables_filter, .dataTables_info { 
     display: none; 
     
 }
.logo h4 {
    font-weight: 500;
    font-size: 18px;
    margin-bottom: 0px;
}
table .font_size4 {
    font-size: 12px;
}
table.dataTable thead th, table.dataTable tfoot th {
    font-weight: 600;
    font-size: 12px;
}
/*end of datatable*/
.card_head {
    padding: 10px 15px;
}
.font-14{
    font-size:14px;
}
table.dataTable thead th{
    padding:5px;
    text-align:center;
}
/*Mobile view*/
@media only screen and (max-width: 600px) {
.color_box {
    margin-left: 27px;
 
}
}
</style>
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
                            <h4><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp&nbsp<?= $heading ?></h4>
                          </a>
                    
                          <!-- .navbar -->
                       </div>
                      </header>
                      <!-- End Header -->