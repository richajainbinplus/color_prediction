<?php include('includes/login_register_header.php')?>
                       <!--login section start here-->
                       <div class="login-section">
                           <div class="login-heading-sectoin">
                                 <h4 class="login-heading text-center">Change Password</h4>
                                <p class="text-center">Please enter your new password</p>
                           </div>
                           <form action="">
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
                              
                               <a  data-bs-toggle="modal" data-bs-target="#otp_verfication">
                                    <button class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Submit</button>
                               </a>
                             
                           </form>
                       </div>
                       <!--login section start here-->
                     
<?php include('includes/footer.php')?>