<?php
include("header.php");
?>


  <div class="card col-md-10 tables">
<div class="container">
  <h2 class="">Patient's File</h2>
  <p> Patient File : All relevant details related to the individual patients</p>
  <hr/>

                           <div class="form-group row">
                              <label for="pat_name" class="col-sm-2 col-form-label">Patient Name :</label>
                              <div class="col-sm-6">
                                
                                 <input  type="text" placeholder="Full Name" name="pat_name" class="form-control" id="pat_name" required="required">
                              </div>
                            </div>
                  


                            <div class="form-group row">
                              <label for="pat_email" class="col-sm-2 col-form-label">Patient Email :</label>
                              <div class="col-sm-6">
                                
                                 <input  type="email" placeholder="Email Address" name="pat_email" id="pat_email" class="form-control  " required="required">
                              </div>
                            </div>
               

                            <div class="form-group row">
                              <label for="pat_mobile" class="col-sm-2 col-form-label">Mobile Number :</label>
                              <div class="col-sm-6">
                                
                                 <input  type="tel" placeholder="Mobile Number" name="pat_mobile" class="form-control " id="pat_mobile" required="required">
                              </div>
                            </div> 


                   
                   
             <h2 class="">Reports</h2>
             <br>
           
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Forms</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Adult Medical History</td>
       
    
   
          <td><a href="#"> <button type="button" class="btn btn-sm ">View <i class="fa fa-eye"></i> </button></a>
       <a href="#"> <button type="button" class="btn btn-sm ">PDF <i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      
      <tr>
        <td>2</td>
        <td>Child Medical History</td>
     
    
     <td><a href="#"> <button type="button" class="btn btn-sm ">View <i class="fa fa-eye"></i> </button></a>
         <a href="#"> <button type="button" class="btn btn-sm ">PDF <i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      <tr>
        <td>3</td>
        <td>HIPPAA</td>
  
     

        <td><a href="#"> <button type="button" class="btn btn-sm ">View <i class="fa fa-eye"></i> </button></a>
        <a href="view_patients.php"> <button type="button" class="btn btn-sm ">PDF <i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      <tr>
        <td>4</td>
        <td>Financial Policy</td>
      
     

      <td><a href="#"> <button type="button" class="btn btn-sm ">View <i class="fa fa-eye"></i> </button></a>
        <a href="view_patients.php"> <button type="button" class="btn btn-sm ">PDF <i class="fa fa-file"></i> </button></a></td>
       
      </tr>
      
    </tbody>
  </table>
  
  <br>
  <br>
  <h2 class="">Send Manual Request</h2>
  <p>The system will send out emails automatically for Form Fill Requests as per default settings. In case you want to send out a manual request, please use the section below</p>
  <div  style="padding:20px;">
   <div class="col-md-12 mb-3"  >
                   
                    <h4>Request To Fill The forms</h4>
                    <form>
                    
                              <div class="form-check form-check-inline">
                                          <label for="adult" class="form-check-label">  </label>
                                            <input name="adult" type="checkbox" id= "adult" class="form-check-input" value="">Adult Medical History
                                        
                                        </div>
                                         <div class="form-check form-check-inline">
                                          <label for="child" class="form-check-label">  </label>
                                            <input name="child" type="checkbox" class="form-check-input" id="child" value="">Child Medical History 
                                        
                                        </div>
                                      
                                         <div class="form-check form-check-inline">
                                          <label for="hippaa" class="form-check-label"></label>
                                            <input name="" type="checkbox" class="form-check-input" name="hippaa" id="hippaa" value="">HIPAA
                                          
                                        </div>
                                         <div class="form-check form-check-inline">
                                          <label for= "financial" class="form-check-label"></label>
                                            <input name="financial" type="checkbox" class="form-check-input" id="financial" value=""> Financial Policy
                                          
                                        </div>
                                      
                                      
     
                 <div class="col-md-12 form-group" >
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" type="message" cols="" rows="4"></textarea>
                    </div> 
                    <div class="form-inline" style="text-align:center;">
                    <input type="submit" name="snd_mail"  class="btn btn-default col-md-5 form-control" style="" value="Send Email">
                    
                   </div>
                 </form>
               </div>

</div>


</div>
    </div>
