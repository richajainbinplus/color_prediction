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
    width:26%;
    float: right;
    margin-top: 2%;
    margin-bottom: -14%;
    padding:2px;
    position:relative;
    top:1%;
    bottom:0;
    z-index: 99999;
 }
 .form_select1{
       width: 26%;
    margin-top: 2%;
    margin-bottom: -14%;
    padding: 2px;
    position: relative;
    top: 1%;
    bottom: 0;
    float: right;
    z-index: 99999;
    margin-right: 27%; 
 }
  label {
    color: white;
 }
  .dataTables_wrapper .dataTables_length select{
     color: white;
    border: 0;
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
<select class="form_select form-select-sm" aria-label=".form-select-sm example">
  <option selected>A To Z</option>
  <option value="1">A</option>
  <option value="2">B</option>
  <option value="3">C</option>
</select>
<select class="form_select1 form-select-sm" aria-label=".form-select-sm example">
  <option selected>This week</option>
  <option value="1">today</option>
  <option value="2">tomorrow</option>
  <option value="3">yesterday</option>
</select>
<table class="table_id" class="display">
    <thead>
        <tr>
            <th><h3 class="font_size2">Date & Time</h3></th>
            <th><h3 class="font_size2">Amount</h3></th>
            <th><h3 class="font_size2">Status</h3></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><h3 class="font_size4">14-06-22 | 05:15 AM</h3></td>
            <td><h3 class="font_size4">590</h3></td>
            <td> <h3 class="font_size4">Pending</h3></td>
        </tr>
        <tr>
           <td><h3 class="font_size4">13-06-22 | 21:10 PM</h3></td>
            <td><h3 class="font_size4">346</h3></td>
            <td> <h3 class="font_size4">Complete</h3></td>
        </tr>
         <tr>
             <td><h3 class="font_size4">12-06-22 | 18:23 PM</h3></td>
            <td><h3 class="font_size4">60</h3></td>
            <td> <h3 class="font_size4">Cancel</h3></td>
        </tr>
               <tr>
            <td><h3 class="font_size4">11-06-22 | 17:11 PM</h3></td>
            <td><h3 class="font_size4">100</h3></td>
            <td> <h3 class="font_size4">Cancel</h3></td>
        </tr>
        <tr>
           <td><h3 class="font_size4">13-06-22 | 21:10 PM</h3></td>
            <td><h3 class="font_size4">20</h3></td>
            <td> <h3 class="font_size4">Complete</h3></td>
        </tr>
         <tr>
             <td><h3 class="font_size4">12-06-22 | 18:23 PM</h3></td>
            <td><h3 class="font_size4">60</h3></td>
            <td> <h3 class="font_size4">Pending</h3></td>
        </tr>
    </tbody>
</table>
            



<?php include('includes/bottom_fixed_footer.php')?>
<?php include('includes/footer.php')?>