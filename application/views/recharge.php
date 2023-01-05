<?php include('includes/header1.php')?>
<style>

input[type="radio"] {
background-clip: content-box;
  border: 2px solid green;
  background-color:white;
  border-radius: 50%;
}
input[type="radio"]:checked {
  background-color: green;
  border:1px solid green;
}
.green_btn{
    font-weight: 600;
    margin-bottom:7px;
    background: white;
    color: black;
    font-size:13px;
    border:1px solid #1AA235;
    padding:10px 40px; 
}
.green_btn:hover{
    font-weight: 600;
    margin-bottom:7px;
    background: #1AA235;
    color: white;
    font-size:13px;
    border:1px solid #1AA235;
    padding:10px 40px; 
}
.inner_btn{
   position: absolute;
    background: green;
    color: white;
    border-radius: 3px;
    padding: 1px 2px;
    float: right;
    font-size: 12px;
    margin-top: 21px;
   margin-left: -29px
}


    </style>
            
       <!--<div class="row">-->
       <!--    <div class="col-md-12 mb-2">-->
       <!--        <img src="<?php echo base_url()?>assets/images/slider/banner.png" class="w-100">-->
       <!--    </div>-->
       <!-- </div> -->
        <div class="top-page-name-section">
            <h4 class="text-white">Wallet Amount</h4>
            <h5 class="text-white"><img class="h-35" src="<?= base_url()?>assets/images/slider/rupess.png"> Rs, 50000</h5>
        </div>
  <div class="content form_content">                    
       <div class="row">
         <div class="col-md-12">
            <form>
                <div class="mb-3 balance_fontweight">
                    <input type="text" class="form-control  border_control" placeholder="Rs. | *Enter amount">
                </div>
                <div class="bottom_content balance_fontweight">
                             <div class="row">
                                   <div class="col-md-4 col-4">
                                       <button type="button" class="btn green_btn w-100">100</button>
                                  </div>
                                    <div class="col-md-4 col-4">
                                         <button type="button" class="btn green_btn w-100">500</button>
                                    </div>
                                    <div class="col-md-4 col-4">
                                         <button type="button" class="btn green_btn w-100">1000</button>
                                    </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-4 col-4">
                                       <button type="button" class="btn green_btn w-100">600</button>
                                  </div>
                                    <div class="col-md-4 col-4">
                                          <button type="button" class="btn green_btn w-100">400</button>
                                             <span class="inner_btn">+2%</span>
                                    </div>
                                    <div class="col-md-4 col-4">
                                         <button type="button" class="btn green_btn w-100">590</button>
                                    </div>
                                </div>
                    <h3 class="font_size1 green mt-2">Choose Payment Method</h3>
                     <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            <h3 class="font_size3" style="color:black;font-weight:700;">Credit / Debit Card</h3>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            <h3 class="font_size3" style="color:black;font-weight:700;">UPI</h3>
                            </label>
                        </div>

         
              
                     <a href="<?php echo base_url()?>Home/withdrawal"> <button type="button" class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Proceed</button></a>
                </form>
         </div>
     </div>
</div>
  </div>
<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>