<?php
include("header.php");
// include("footer.php");
?>

<div class="">
  <div class="card col-md-10 tables">
<div class="">
  <h2>Patient List</h2>
  <p>View all Patients to whom Form Request was Sent" & click the eye icon to view their files in detail </p>
   
    <hr/>

    <div class="form-inline">
    <label for="pat_full_name" class="col-md-2">Fullname:</label>
    <input type="text" class="form-control col-md-3" id="pat_full_name" placeholder="Full Name" name="pat_full_name">
    <label for="pat_email" class="col-md-2">Email:</label>
    <input type="email" class="form-control col-md-3" id="pat_email" placeholder="Email" name="pat_email">

    <input type="submit" name="search"  class="btn btn-default btn-sm col-md-1" style="margin-left: 1%;" value="search">
    
   <!--  <button type="submit" class="btn btn-primary">Submit</button> -->
  </div>

          <hr/>
<br>
                  
           
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Patient Fullname</th>
        <th>Email</th>
        <th>View Details</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " >View <i class="fa fa-eye"></i> </button></a></td>
       
      </tr>
      
       <tr>
        <td>2</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " >View <i class="fa fa-eye"></i> </button></a></td>
       
      </tr>
       <tr>
        <td>3</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " >View <i class="fa fa-eye"></i> </button></a></td>
       
      </tr> 
      <tr>
        <td>4</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " >View <i class="fa fa-eye"></i> </button></a></td>
       
      </tr> 
      <tr>
        <td>5</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " >View <i class="fa fa-eye"></i> </button></a></td>
       
      </tr> 
      <tr>
        <td>6</td>
        <td>full name</td>
        <td>some@gamil.com</td>

      
       <td><a href="view_patients.php"> <button type="button" class="btn btn-sm " >View <i class="fa fa-eye"></i> </button></a></td>
       
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

include("footer.php")?>