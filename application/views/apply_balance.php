<?php include('includes/header1.php')?>
<style>
    .border_control{
    border-top:0;
    border-right:0;
    border-left:0;
}
    </style>
            
       <!--<div class="row">-->
       <!--    <div class="col-md-4 col-4 mb-2">-->
       <!--        <img src="<?php echo base_url()?>assets/images/slider/bounce.png" class="top_images">-->
       <!--    </div>-->
       <!-- </div> -->
         <div class="top-page-name-section">
            <h4 class="text-white">My Bonus Amount</h4>
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
                    <p class="font_size3">*Limit 1 transaction per day</p>
                    <h3 class="font_size1">Service Time</h3>
                    <ul>
                        <li class="font_size3"><h3 class="font_size3">Monday to Friday</h3></li>
                        <li class="font_size3"><h3 class="font_size3">1000 AM to 1700 PM</h3></li>
                     </ul>
                 </div>
                <button type="submit" class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Proceed</button>
                </form>
         </div>
     </div>
</div>

<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>