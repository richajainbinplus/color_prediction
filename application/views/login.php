<?php include('includes/login_register_header.php')?>
                       <!--login section start here-->
                       <div class="login-section">
                           <div class="login-heading-sectoin">
                                 <h4 class="login-heading text-center">Login</h4>
                                <p class="text-center">Welcome to Color Prediction Game</p>
                           </div>
                           <form action="">
                               <div class="mb-3">
                                   <input type="" class="form-control" name="" placeholder="*Mobile Number or E-mail" required>
                               </div>
                               <div class="mb-3">
                                   <input type="password" class="form-control" value="12345" name="password" autocomplete="current-password" required="" id="id_password" placeholder="password">
                                    <span class="password_hide"><i class="fa fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i></span>
                               </div>
                               <div class="mt-3 mb-2 link-sm">
                                   <div class="row">
                                       <div class="col-8">
                                             <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                              <label class="form-check-label" for="flexCheckChecked">
                                                I agree to the Terms & Conditions
                                              </label>
                                            </div>
                                       </div>
                                       <div class="col-4">
                                           <a href="<?= base_url()?>forgot_password" class="blue-text blue-border-line float-right">Forgot password ?</a>
                                       </div>
                                   </div>
                                 
                               </div>
                               <a  data-bs-toggle="modal" data-bs-target="#otp_verfication">
                                    <button class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Login</button>
                               </a>
                               
                               <div>
                                   <p class="text-center mt-3">New Member ? <a href="<?= base_url()?>sign_up" class="blue-text blue-border-line">Sign up</a></p>
                               </div>
                           </form>
                       </div>
                       <!--login section start here-->
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
<?php include('includes/footer.php')?>