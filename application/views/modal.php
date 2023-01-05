<?php include('includes/header.php')?>
  <!--OTP Verfication-->
 <a class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#otp_verfication">
     OTP Verfication
 </a>
                       <!--otp verfication-->
                         <div class="modal fade" id="otp_verfication" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-sm forgot_password_modal">
                                <div class="modal-content">
                                  <div class="modal-header bottom-border-0 p-2">
                                    <button type="button" class="btn-close custum-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                  </div>
                                  <div class="modal-body">
                                     <form action="" method="">
                                          <h4 class="modal-login-heading text-center">OTP Verification</h4>
                                            <p class="font-12 text-center">Please enter the 4 digit verification code <br>
                                               we just sent you on your device</p>
                                              
                                             <input type="number" class="form-control mb-3" name="" required> 
                                             <p class="font-12 text-center mb-0">Time Left: <span class="text-red">00:13</span></p>
                                            <a href="<?= base_url()?>dashboard" class="btn btn-success btn-custum w-100 mt-2 mb-2">Submit</a>
                                             <!--<button class="btn btn-success btn-custum w-100 mt-2 mb-2">Submit</button>-->
                                            <div class="text-center">
                                                 <a class="blue-text blue-border-line font-11">Resend</a>
                                             </div>
                                              
                                     </form>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                       <!--otp verfication-->
                         <!--OTP Verfication-->
                         <!--won modal-->
                         <a class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#won_modal">
                               Won modal
                         </a>
                          <!--won modal-->
                             <div class="modal fade" id="won_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-sm forgot_password_modal">
                                    <div class="modal-content">
                                      <div class="modal-header bottom-border-0 p-2">
                                        <button type="button" class="btn-close custum-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                      </div>
                                      <div class="modal-body" style="background:url(<?= base_url()?>assets/images/won.png)">
                                         <form action="" method="">
                                             <p class="text-center"><b>Congratulations</b></p>
                                              <h4 class="modal-login-heading text-center won-text">You Won</h4>
                                                <p class="font-14 fontw-550 text-center">Game Period : 2589689532</p>
                                                <p class="font-14 fontw-550 text-center">Winning Amount : Rs. 1000</p>
                                               <a href="<?= base_url()?>dashboard" class="btn btn-success btn-custum w-100 mt-2 mb-2">Continue</a>
                                         </form>
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>
                           <!--won modal-->
                         <!--won modal-->
<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>