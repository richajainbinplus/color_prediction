<style>
    .fixed-footer{
      padding: 4px 4px;  
    }  

</style>
  <!--footer section-->
    <div class="fixed-footer">
        <div class="row">
            <div class="col-2">
                <a href="<?php echo base_url()?>Home/recharge"><span class="icon">
                   <i class="fa fa-inr" ></i>
                    Recharge
                   </span>
                </a>
            </div>
            <div class="col-2">
                 <a href="<?php echo base_url()?>Home/notification"><span class="icon">
                    <i class="fa fa-share"></i>
                    Refer
                </span>
                </a>
            </div>
            <div class="col-2">
                 <a href="<?php echo base_url()?>Home/dashboard"><span class="icon <?= ($page_name=="home")?'footer-active':''?>">
                    <i class="fa fa-home"></i>
                    Home
                </span>
                </a>
            </div>
            <div class="col-2">
                <span class="icon">
                    <i class="fa fa-database"></i>
                    Earn
                </span>
            </div>
            <div class="col-2">
                 <a href="<?php echo base_url()?>Home/enquiry"><span class="icon">
                    <i class="fa fa-question-circle"></i>
                    Enquiry
                </span></a>
            </div>
            <div class="col-2">
                 <a href="<?php echo base_url()?>Home/withdrawal"><span class="icon">
                    <i class="fa fa-user"></i>
                    Account
                </span>
                </a>
            </div>
        </div>
    </div>
    <!--footer section-->