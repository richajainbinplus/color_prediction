<?php include('includes/login_register_header.php')?>
<style>
    section{
        background:url(<?= base_url()?>assets/img/main_bg.png);
        background-size:cover;
        background-repeat: no-repeat;
    }
    .welcome-section{
        margin:40% 10px;
        color:white;
    }
    .btn-earn{
            background:#0E5B1D!important;
            border-color:#0E5B1D!important;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .feature-list{
        list-style:none;
        padding-left:0px;
        margin:20px 0px;
    }
.feature-list li {
    font-size: 19px;
    margin-bottom: 20px;
}
   .feature-list li span {
    background: white;
    height: 22px;
    width: 20px;
    padding: 6px 8px;
    color: #1aa235;
    border-radius: 5px;
    margin-right:11px;
}
  .welcome-section h1{
        font-size:30px;
    }
@media screen and (max-width: 600px) {
 .feature-list li {
    font-size: 17px;
  }
    .welcome-section{
        margin:51% 10px;
    }
  
}


</style>
                       <!--login section start here-->
                        <div class="welcome-section">
                            <div class="text-center">
                                   <h4>Welcome to</h4>
                                   <h1>Color Prediction Game</h1>
                                    <h5>Fastest Earning Platform</h5>
                                    <a href="<?= base_url()?>login" class="btn btn-lg btn-success btn-earn mt-3 mb-3">Earn Now</a>
                            </div>
                         
                            <ul class="feature-list">
                                <li><span class="icon"><i class="fa fa-lock"></i></span> 100% Safe & Secure Platform</li>
                                <li><span class="icon"><i class="fa  fa-headphones"></i></span> 24x7 Customer Support</li>
                                <li><span class="icon"><i class="fa fa-gift"></i></span> Upto 30% Bonus on Every Referral</li>
                                <li><span class="icon"><i class="fa fa-inr"></i></span> Easy Deposits and Withdrawals</li>
                            </ul>
                        </div>
                       <!--login section start here-->
<?php include('includes/footer.php')?>