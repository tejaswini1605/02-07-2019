<?php
include("header.php");
?>

<div class="">
  <div class="card col-md-10 tables ">
<div class="container ">
  <h2 class="">View Form Entries</h2>
  <p>Select the form below to view all form entries list sorted by patients</p>
  <hr/>


         <div class="form-inline " style="margin:2% auto;"> 
            <label class="col-md-2">Select Form :</label> 
                    <select class="col-md-6 form-control">
                    <option value="#"  >Adult Medical History form</option>
                    <option value="#" >Child Medical History form</option>
                    <option value="#" >HIPAA Consent</option>
                    <option value="#" >Financial Policy form</option>
                    
                    </select>

           </div>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        
        <th>Patient Name</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>some</td>
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
    
   
          <td><a href="#"> <button type="button" class="btn btn-sm ">View Form <i class="fa fa-eye"></i> </button></a>
      <a href="#"> <button type="button" class="btn btn-sm " >PDF <i class="fa fa-file"></i> </button></a>
        <a href="view_patients.php"> <button type="button" class="btn btn-sm ">View Patients <i class="fa fa-user"></i> </button></a></td>
       
      </tr>
      
       <tr>
        <td>2</td>
        <td>some</td>
        
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
     <td><a href="#"> <button type="button" class="btn btn-sm ">View Form <i class="fa fa-eye"></i> </button></a>
      <a href="#"> <button type="button" class="btn btn-sm " >PDF <i class="fa fa-file"></i> </button></a>
        <a href="view_patients.php"> <button type="button" class="btn btn-sm ">View Patients <i class="fa fa-user"></i> </button></a></td>
      </tr>
       <tr>
        <td>3</td>
        <td>some</td>
        
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
    
   
               <td><a href="#"> <button type="button" class="btn btn-sm ">View Form <i class="fa fa-eye"></i> </button></a>
      <a href="#"> <button type="button" class="btn btn-sm " >PDF <i class="fa fa-file"></i> </button></a>
        <a href="view_patients.php"> <button type="button" class="btn btn-sm ">View Patients <i class="fa fa-user"></i> </button></a></td>
       
      </tr>
       <tr>
        <td>4</td>
        <td>some</td>
        
        <td>8975201520</td>
        <td>abc@gmail.com</td>
    
   
        <td><a href="#"> <button type="button" class="btn btn-sm ">View Form <i class="fa fa-eye"></i> </button></a>
      <a href="#"> <button type="button" class="btn btn-sm " >PDF <i class="fa fa-file"></i> </button></a>
        <a href="view_patients.php"> <button type="button" class="btn btn-sm ">View Patients <i class="fa fa-user"></i> </button></a></td>
      </tr>


    </tbody>
  </table>

  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>

  
</div>


</div>

</div>

<?php
include("footer.php");
?>