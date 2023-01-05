<?php include('includes/login_register_header.php')?>
                       <!--login section start here-->
                       <div class="login-section">
                           <div class="login-heading-sectoin">
                                 <h4 class="login-heading text-center">Signup</h4>
                                <p class="text-center">Welcome to Color Prediction Game</p>
                           </div>
                           <form action="">
                               <div class="mb-3">
                                   <label>Mobile Number</label>
                                   <input type="tel" class="form-control" name="" placeholder="*Mobile Number" required>
                               </div>
                               <div class="mb-3">
                                   <label>Email</label>
                                   <input type="email" class="form-control" name="" placeholder="E-mail" required>
                               </div>
                               <div class="mb-3">
                                   <label>Password</label>
                                   <input type="password" class="form-control" value="123" name="password" autocomplete="current-password" required="" id="id_password" placeholder="password">
                                    <span class="password_hide"><i class="fa fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i></span>
                               </div>
                               <div class="mb-3">
                                   <label>Confirm Password</label>
                                   <input type="password" class="form-control" value="1234" name="password1" autocomplete="current-password" required="" id="id_password1" placeholder="*Confirm Password">
                                    <span class="password_hide"><i class="fa fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer;"></i></span>
                               </div>
                               <div class="mb-3">
                                   <label>Sponsor Id</label>
                                   <input type="password" class="form-control" value="" name="password2" autocomplete="current-password" required="" id="id_password2" placeholder="*Sponsor Id">
                                    <span class="password_hide"><i class="fa fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i></span>
                               </div>
                               <div class="mt-3 mb-2 link-sm">
                                   <div class="row">
                                       <div class="col-12">
                                             <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                              <label class="form-check-label" for="flexCheckChecked">
                                                I agree to the Privacy Policies
                                             </label>
                                            </div>
                                       </div>
                                   </div>
                                 
                               </div>
                                <button class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Signup</button>
                               <div>
                                   <p class="text-center mt-3">Already a member? ? <a href="<?= base_url()?>login" class="blue-text blue-border-line">Login</a></p>
                               </div>
                           </form>
                       </div>
                       <!--login section start here-->
                      
<?php include('includes/footer.php')?>