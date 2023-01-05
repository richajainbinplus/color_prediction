<?php include('includes/login_register_header.php')?>
                       <!--login section start here-->
                       <div class="login-section">
                           <div class="login-heading-sectoin">
                                 <h4 class="login-heading text-center">Forgot Password</h4>
                                <p class="text-center">Please enter your registered Mobile Number or Email</p>
                           </div>
                           <form action="">
                               <div class="mb-3">
                                   <input type="tel" class="form-control" name="" placeholder="*Mobile Number or E-mail" required>
                               </div>
                              <a  data-bs-toggle="modal" data-bs-target="#otp_verfication">
                                    <button class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Submit</button>
                               </a>
                               
                               <div>
                                   <p class="text-center mt-3">Back to login ? <a href="<?= base_url()?>login" class="blue-text blue-border-line">Login</a></p>
                               </div>
                           </form>
                       </div>
                       
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
                                            <a href="<?= base_url()?>change_password" class="btn btn-success btn-custum w-100 mt-2 mb-2">Submit</a>
                                             <!--<button class="btn btn-success btn-custum w-100 mt-2 mb-2">Submit</button>-->
                                          
                                     </form>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                       <!--otp verfication-->
                      
<?php include('includes/footer.php')?>