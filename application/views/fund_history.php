<?php include('includes/header1.php')?>
<style>
     .font_size4{
     text-align:center;
 }
  .dataTables_wrapper .dataTables_length {
    text-align:left!important;
    margin-left: 1%!important;
 }
 .form_select{
     display: block;
    width: 100%;
    border: 0px;
    padding: 3px 0.75rem;
    border-radius: 5px!important;
    box-shadow: 0 .002rem 1rem rgba(0,0,0,.10)!important;
    border:0px!important;
    outline:0px!important;
 }
 /*.form_select{*/
 /*   width:26%;*/
 /*   float: right;*/
 /*   margin-top: 2%;*/
 /*   margin-bottom: -14%;*/
 /*   padding:2px;*/
 /*   position:relative;*/
 /*   top:1%;*/
 /*   bottom:0;*/
 /*   z-index: 99999;*/
 /*}*/
 /*.form_select1{*/
 /*      width: 26%;*/
 /*   margin-top: 2%;*/
 /*   margin-bottom: -14%;*/
 /*   padding:2px;*/
 /*   position: relative;*/
 /*   top: 1%;*/
 /*   bottom: 0;*/
 /*   float: right;*/
 /*   z-index: 99999;*/
 /*   margin-right: 27%; */
 /*}*/
 .dataTables_wrapper .dataTables_length select{
     color: white;
    border: 0;
 }
 label {
    color: white;
 }
/*Mobile view*/
@media only screen and (max-width: 600px) {
 .form_select1{
    margin-top:3%;
 }
  .form_select{
    margin-top:3%;
 }
}
</style>
<div class="row">
    <div class="col-5"></div>
    <div class="col-7" style="padding-right:17px">
        <div class="row mt-3">
               <div class="col-6">
                    <select class="form_select form-select-sm w-100" aria-label=".form-select-sm example">
                      <option selected>A To Z</option>
                      <option value="1">A</option>
                      <option value="2">B</option>
                      <option value="3">C</option>
                    </select>
                </div>
                <div class="col-6">
                    <select class="form_select form-select-sm w-100" aria-label=".form-select-sm example">
                      <option selected>This week</option>
                      <option value="1">today</option>
                      <option value="2">tomorrow</option>
                      <option value="3">yesterday</option>
                    </select>
                </div>
        </div>
    </div>
    
</div>

<table class="table_id" class="display">
    <thead>
        <tr>
            <th><h3 class="font-14">Mobile Number</h3></th>
            <th><h3 class="font-14">Date & Time </h3></th>
            <th><h3 class="font-14">Amount</h3></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><h3 class="font_size4">7898587897</h3></td>
            <td><h3 class="font_size4">14-06-22 | 0515 AM</h3></td>
            <td> <h3 class="font_size4">100</h3></td>
        </tr>
        <tr>
           <td><h3 class="font_size4">6788587897</h3></td>
            <td><h3 class="font_size4">14-06-22 | 0515 AM</h3></td>
            <td> <h3 class="font_size4">500</h3></td>
        </tr>
         <tr>
             <td><h3 class="font_size4">7898587890</h3></td>
            <td><h3 class="font_size4">14-06-22 | 0515 AM</h3></td>
            <td> <h3 class="font_size4">300</h3></td>
        </tr>
        <tr>
          <td><h3 class="font_size4">8998587897</h3></td>
            <td><h3 class="font_size4">14-06-22 | 0515 AM</h3></td>
            <td> <h3 class="font_size4">780</h3></td>
        </tr>
         <tr>
            <td><h3 class="font_size4">7898587897</h3></td>
            <td><h3 class="font_size4">14-06-22 | 0515 AM</h3></td>
            <td> <h3 class="font_size4">100</h3></td>
        </tr>
        <tr>
            <td><h3 class="font_size4">8878587897</h3></td>
            <td><h3 class="font_size4">14-06-22 | 0515 AM</h3></td>
            <td> <h3 class="font_size4">200</h3></td>
        </tr>
    </tbody>
</table>
            

 

<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>