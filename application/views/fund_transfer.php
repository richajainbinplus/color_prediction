<?php include('includes/header1.php')?>
<style>
    .balance_fontweight h3 {
    font-weight: 500;
}
</style>
            
       <div class="top-page-name-section">
            <h4 class="text-white">Wallet Amount</h4>
            <h5 class="text-white"><img class="h-35" src="<?= base_url()?>assets/images/slider/rupess.png"> Rs, 50000</h5>
        </div>
        <div class="content form_content">                    
     <div class="row">
         <div class="col-md-12">
            <form>
                <div class="mb-3 balance_fontweight">
                    <label for="exampleInputEmail1" class="form-label"><h3 class="font_size2">Enter Amount for Fund Transfer</h3></label>
                    <input type="number" class="form-control form-control-lg" placeholder="Rs. | *Enter amount">
                </div>
                <div class="mb-3 balance_fontweight">
                <label for="exampleInputEmail1" class="form-label"><h3 class="font_size2">Mobile Number</h3></label>
                    <input type="number" class="form-control form-control-lg" placeholder="Client Id">
                </div>
                <div class="form-group mt-3 mb-3 balance_fontweight">
                <label for="exampleInputEmail1" class="form-label"><h3 class="font_size2">Description</h3></label>
                    <textarea class="form-control form-control-lg" placeholder="Description" rows="5"></textarea>
                </div>
                  <a href="<?php echo base_url()?>Home/withdrawal"><button type="submit" class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Submit</button></a>
                </form>
         </div>
     </div>
</div>

<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>