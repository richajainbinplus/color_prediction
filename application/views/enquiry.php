<?php include('includes/header1.php')?>
            
       <div class="row">
           <div class="col-md-12 col-12 mb-2">
               <img src="<?php echo base_url()?>assets/images/slider/banner1.png" class="w-100">
           </div>
        </div> 
        <div class="content form_content">                    
     <div class="row">
         <div class="col-md-12">
            <form>
                <div class="mb-3 balance_fontweight">
                    <label for="exampleInputEmail1" class="form-label"><h3 class="font_size2">Provide some details</h3></label>
                    <input type="number" class="form-control" placeholder="*Mobile Number">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" placeholder="Client Id">
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Enquiry</option>
                    <option value="1">Suggestion</option>
                    <option value="2">Consult</option>
                    <option value="3">Recharge Issue</option>
                    <option value="2">Withdrawal Issue</option>
                    <option value="3">Other</option>
                </select>
                <div class="form-group mt-3 mb-3">
                    <textarea class="form-control" placeholder="Description" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-custum w-100 btn-lg mt-1 mb-4">Submit</button>
                </form>
         </div>
     </div>
</div>

<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>