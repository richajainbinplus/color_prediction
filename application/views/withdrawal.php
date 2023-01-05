<?php include('includes/header1.php')?>
<style>
    .border_control{
    border-top:0;
    border-right:0;
    border-left:0;
}
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
.custom_header {
    border-bottom: 0px solid #dee2e6; 
    justify-content: left;
    padding:13px 0 0px 13px;
}
.modal-footer{
     border-top: 0px solid #dee2e6; 
}
.custom_close{
    display:none;
}
.custom_content{
    width: 65%;
    margin-left: 16%;
    padding:8px;
}
/*Mobile view*/
@media only screen and (max-width: 600px) {
.custom_content {
    width: 95%;
    margin-left: 2%;
    padding: 8px;
}
}
    </style>
            
       <!--<div class="row">-->
       <!--    <div class="col-md-4 col-4 mb-2">-->
       <!--        <img src="<?php echo base_url()?>assets/images/slider/banner.png" class="top_images">-->
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
                    <input type="text" class="form-control border_control" placeholder="Rs. | *Enter amount">
                </div>
                <div class="bottom_content balance_fontweight">
                    <p class="font-14" style="">*Single withdraw amount limit Rs.49999</p>
                    <p class="font-14" style="">*Daily withdrawal limit 3 times</p>
                    <h3 class="font_size1 green">Select Method</h3>
                     <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            <h3 class="font_size3" style="">Bank Account</h3>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            <h3 class="font_size3" style=""> UPI</h3>
                            </label>
                        </div>

                 <h3 class="font_size1 green">Select Bank Account</h3>
                 <div class="row">
                     <div class="col-md-7 col-7 balance_fontweight">
                       <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        <h3 class="font_size3" style="">State Bank of India</h3>
                        </label> 
                        </div>
                     </div>
                     <div class="col-md-5 col-5 balance_fontweight">
                         <h3 class="font_size3" style="margin-right:2px;">XXXXXXXXXXX2450</h3>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-7 col-7 balance_fontweight">  
                        <div class="form-check">
                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            <h3 class="font_size3" style="">Punjab National Bank</h3>
                            </label>
                        </div>
                     </div>
                     <div class="col-md-5 col-5 balance_fontweight">
                         <h3 class="font_size3" style="">XXXXXXXXXXX2450</h3>
                     </div>
                 </div>
              <button type="button" class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:100%;">
                  Proceed
                </button>
                </form>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content custom_content">
                      <div class="modal-header custom_header">
                        <h5 class="modal-title" id="exampleModalLabel"><h3 class="font_size1 green">Withdrawal Amount Details</h3></h5>
                        <button type="button" class="btn-close custom_close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="row" style="border-bottom:2px solid #d2e9d6;">
                            <div class="col-md-8 col-8">
                                <h3 class="font_size2">Amount</h3>
                            </div>
                             <div class="col-md-4 col-4">
                                <h3 class="font_size2" style="float:right;">Rs.800</h3>
                            </div>
                        </div>
                        
                        <div class="row" style="border-bottom:2px solid #d2e9d6; margin-top: 3%;">
                            <div class="col-md-8 col-8">
                                <h3 class="font_size2">Service charge 5%</h3>
                            </div>
                             <div class="col-md-4 col-4">
                                <h3 class="font_size2" style="float:right;">Rs.40</h3>
                            </div>
                        </div>
                        
                        <div class="row" style="border-bottom:2px solid #d2e9d6;margin-top: 3%;">
                            <div class="col-md-8 col-8">
                                <h3 class="font_size2"><b>Total Amount</b></h3>
                            </div>
                             <div class="col-md-4 col-4">
                                <h3 class="font_size2" style="float:right;">Rs.840</h3>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-top: 3%;">
                            <div class="col-md-8 col-8">
                                <h3 class="font_size2">State Bank of india</h3>
                            </div>
                             <div class="col-md-4 col-4">
                                <h3 class="font_size2" style="float:right;">xxxxxxxxx2589</h3>
                            </div>
                        </div>
                      </div>
                        <button type="button" class="btn btn-success btn-custum w-100 mt-1 mb-2">Proceed</button>
                        <a href="#" class="text-danger text-center" data-bs-dismiss="modal"><b>Cancel</b></a>
                    </div>
                  </div>
                </div>
         </div>
     </div>
</div>
  </div>
<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>