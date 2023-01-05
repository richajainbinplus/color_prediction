
<?php include('includes/header.php')?>
<style>
  .violet_btn{
    margin-left: 4%;
}
.card_shadow{
  padding-bottom:11px;
box-shadow: -3px 5px 3px -5px #d9d0d0;
}

.carousel-indicators [data-bs-target] {
width:5px;
height:5px;
border-radius:50%;
border:1px solid green;
padding:2px;
background:green;
}

.border{
  width:23%;
  height:2px;
  background:white;
  position:relative;
  left:38%;
}
.btn-success:active:focus{
    box-shadow: 0 0 0 0 white;
}
.violet_box{
    width:10px;
    height:10px;
    border-radius:3px;
    background:violet;

}


</style>
                       <!--login section start here-->
                        <div>
            
                           <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="<?php echo base_url()?>assets/images/slider/background.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?php echo base_url()?>assets/images/slider/background.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="<?php echo base_url()?>assets/images/slider/background.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                             
                            <div class="content">
                               <div class="balance_content">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <img src="<?php echo base_url()?>assets/images/slider/money.png" class="money_bag">
                                    </div>
                                    <div class="col-md-5 col-5 balance_fontweight">
                                        <h3 class="font_size2">Available Balance</h3>
                                        <h1 class="green font_size">Rs.5,000</h1>
                                    </div>
                                    <div class="col-md-5 col-5 text-center">
                                    <a href="<?php echo base_url()?>Home/recharge"> <button type="button" class="btn btn-success balance_btn">Recharge</button></a><br>
                                            <a href="#" class="bottom_rule font_size3"><u>*Rules</u></a>
                                    </div>
                                </div>
                                </div>
                          
                                <div class="border_balance background_green">
                                   <div class="row">
                                     <div class="col-md-6 col-6" style="border-right:2px solid white;">
                                     <a href="<?php echo base_url()?>Home/dashboard"><h3 class="font_size2">Parity</h3></a>
                                       <div class="border"></div>
                                    </div>
                                    <div class="col-md-6 col-6">
                                    <a href="<?php echo base_url()?>Home/index_parity"><h3 class="font_size2">Fast Parity</h3></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="full_content">
                                 <div class="row">
                                   <div class="col-md-6 col-6">
                                   <div class="icon_color">
                                       <h3 class="font_size"><img src="<?= base_url()?>assets/images/icon.png">Period</h3>
                                    </div>
                                  </div>
                                    <div class="col-md-6 col-6">
                                        <div class="icon_color">
                                           <h3 class="font_size" style="text-align:right;"><i class="fa fa-clock-o" aria-hidden="true"></i> Counter</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                   <div class="col-md-6 col-6">
                                   <div class="icon_color">
                                       <h3 class="font_size">250378963253</h3>
                                    </div>
                                  </div>
                                    <div class="col-md-6 col-6">
                                        <div class="icon_color">
                                           <h3 class="font_size text-danger" style="text-align:right;">01 : 00</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_color">
                                <div class="row">
                                   <div class="col-md-4 col-4">
                                       <button type="button" class="green_btn">Join Green</button>
                                  </div>
                                    <div class="col-md-4 col-4">
                                         <button type="button" class="red_btn">Join Red</button>
                                    </div>
                                    <div class="col-md-4 col-4">
                                         <button type="button" class="violet_btn">Join Violet</button>
                                    </div>
                                </div>

                                <div class="row d-flex justify-content-around" style="margin-right:1%;margin-left: -17px;">
                                   <div class="col-md-2 col-2">
                                       <button type="button" class="red_btn padding_btnM gradient1">0</button>
                                   </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="green_btn padding_btn">1</button>
                                    </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="red_btn padding_btnM">2</button>
                                    </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="green_btn padding_btn">3</button>
                                    </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="red_btn padding_btnM">4</button>
                                    </div>
                                </div>
                                
                                <div class="row d-flex justify-content-around" style="margin-right:1%;margin-left: -17px;">
                                   <div class="col-md-2 col-2">
                                       <button type="button" class="green_btn padding_btn gradient2">5</button>
                                   </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="red_btn padding_btnM">6</button>
                                    </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="green_btn padding_btn">7</button>
                                    </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="red_btn padding_btnM">8</button>
                                    </div>
                                    <div class="col-md-2 col-2">
                                         <button type="button" class="green_btn padding_btn">9</button>
                                    </div>
                                </div>  
                                </div>
                                <div class="row">
                                   <div class="col-md-6 col-6">
                                   <div class="icon_color">
                                       <h3 class="font_size2 green">Parity Records</h3>
                                    </div>
                                  </div>
                                    <div class="col-md-6 col-6">
                                    <div class="icon_color">
                                       <a href="#"><h3 class="font_size3" style="text-align:right;color:black">View More</h3></a>
                                    </div>
                                    </div>
                                </div>
                                  
                                <div class="border_balance grey_bg">
                                   <div class="row">
                                     <div class="col-md-3 col-3" style="border-right:2px solid black;height:18px;">
                                       <h3 class="font_size2">Period</h3>
                                    </div>
                                    <div class="col-md-3 col-3" style="border-right:2px solid black;height:18px;">
                                        <h3 class="font_size2">Prices</h3>
                                    </div>
                                    <div class="col-md-3 col-3" style="border-right:2px solid black;height:18px;">
                                        <h3 class="font_size2">Result</h3>
                                    </div>
                                    <div class="col-md-3 col-3">
                                        <h3 class="font_size2">Number</h3>
                                    </div>
                                  </div>
                             </div>
                             <div class="card card_shadow">
                                <div class="number">
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                        <h3 class="font_size4">250378963258</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4">32500</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="red_box"></div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4 text-danger">3</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                        <h3 class="font_size4">250378963259</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4">37542</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="color_box">
                                                <div class="green_box"></div>
                                                <div class="violet_box"></div>
                                           </div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4 text-success">1</h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                        <h3 class="font_size4">250378963255</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4">42608</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="red_box"></div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4 text-danger">4</h3>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                        <h3 class="font_size4">250378963256</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4">34505</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="green_box"></div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4 text-danger">1</h3>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                        <h3 class="font_size4">250378963254</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4">32500</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="red_box"></div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4 text-danger">4</h3>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                        <h3 class="font_size4">250378963256</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4">32500</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="color_box">
                                            <div class="red_box"></div>&nbsp
                                                <div class="violet_box"></div>
                                              </div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4 text-success">6</h3>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 col-3">
                                        <h3 class="font_size4">250378963255</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4">32000</h3>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <div class="green_box"></div>
                                        </div>
                                        <div class="col-md-3 col-3">
                                            <h3 class="font_size4 text-danger">2</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                               <div class="row">
                                   <div class="col-md-12 col-12">
                                     <div class="icon_color">
                                     <a href="<?= base_url()?>Home/fast_record">  <h3 class="font_size2 green">My Fast Parity Records</h3></a>
                                    </div>
                                  </div>
                                </div>
                                   <hr>
                                <div class="row">
                                   <div class="col-md-12 col-12 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size2">Contract Money</h3>
                                       <h1 class="green font_size2">Rs.1,00</h1>
                                    </div>
                                  </div>
                                </div>
                                <hr>
                              
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Period : 225896528965 </h3>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Select : Green</h3>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Status : <span class="yellow">Waiting</span> </h3>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Result : Waiting</h3>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Open Time : 152525  </h3>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Fee : 10</h3>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight" style="border-bottom:2px solid green;">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Pre Pay : 90 </h3>
                                       <p class="font_size4">Create Time : 24-05-22 | 1215 PM</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight" style="border-bottom:2px solid green">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Amount : 0</h3>
                                    </div>
                                  </div>
                                </div>



                                <div class="row">
                                   <div class="col-md-12 col-12 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size2">Contract Money</h3>
                                       <h1 class="green font_size2">Rs.1,00</h1>
                                    </div>
                                  </div>
                                </div>
                                
                              
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Period : 225896528965 </h3>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Select : Green</h3>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Status : <span class="red_span">Loss</span></h3>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Result : <span class="win_span">1, Green</span></h3>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Open Time : 152525  </h3>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Fee : 100</h3>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                   <div class="col-md-8 col-8 balance_fontweight" style="border-bottom:2px solid green">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Pre Pay : 900 </h3>
                                       <p class="font_size4">Create Time : 24-05-22 | 1215 PM</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-4 balance_fontweight" style="border-bottom:2px solid green;">
                                     <div class="icon_color">
                                       <h3 class="font_size3">Amount : -1000</h3>
                                    </div>
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>
                       <!--login section start here-->
<?php include('includes/bottom_fixed_footer.php')?>





<?php include('includes/footer.php')?>