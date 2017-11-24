
<style>

.form-control-feedback {
  
   pointer-events: auto;
  
}

.msk-set-width-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
}
.msk-set-color-tooltip + .tooltip > .tooltip-inner { 
  
     min-width:180px;
	 background-color:red;
}

</style>
    
<?php 

include_once  ('src/editprofile.php');



?>
    <form method="POST" action="">
	<section class="content"> 
    	<div class="row">
        	<div class="col-md-8">
            	<div class="panel"><!--panel bg-maroon--> 
                	<div class="panel-heading bg-aqua-active">	
                    	<h4 class="panel-title" id="hname"><?php echo $full_name; ?></h4>
                  </div>				
                  <div class="panel-body"><!--panel-body -->
                    	<div class="row" id="my_profile">

                			   
                		  <div class=" col-md-12"> 
                        
                  				<table class="table table-bordered table-striped">
                    				<tbody>
                      					<tr>
                        					<td class="col-md-3">Full Name</td>
                        					<td id="full_name">
                                  <input type="text" class="form-control" name="name" placeholder="<?php echo $full_name; ?>">
                                    <input type="text" class="hide" name="uid" value="<?php echo $uid; ?>" >
                                  </td>
                      					</tr>
                             			<tr>
                        					<td>Address</td>
                        					<td id="address">
                                  <input type="text" class="form-control" name="address" placeholder="<?php echo $address; ?>">

                                   </td>
                      					</tr>
                        				<tr>
                        					<td>Gender</td>
                        					<td id="gender">
                                      <div class="radio">
                                      <label>
                                        <input type="radio" name="gender" id="optionsRadios1" value="1" <?php echo $nam; ?> > Male      
                                      </label>               
                                       </label>
                                       <div class="radio">
                                        <label>
                                        <input type="radio" name="gender" id="optionsRadios2" <?php echo $nu; ?> value="2" > Female                     
                                       </label></p>
                                       </div> </td>
                      					</tr>
                      					<tr>
                        					<td>Email</td>
                        					<td id="email">
                                   <input type="Email" class="form-control" name="email" placeholder="<?php echo $email; ?>"> </td>
                      					</tr>
                                 <tr>
                        					<td>Phone Number</td>
                        					<td id="phone">
                                   <input type="Phone" class="form-control" name="phone" placeholder="<?php echo $phone; ?>"> </td>
                                   </td>
                      					</tr>
                              
                                 <tr>
                                  <td>Current password</td>
                                  <td id="phone">
                                   <input type="password" class="form-control" name="oldpassword" placeholder="Mật khẩu hiện tại"> </td>
                                   </td>
                                </tr>
                                <tr>
                                  <td>New password</td>
                                  <td id="newpass">
                                   <input type="password" class="form-control" name="password" placeholder="Mật khẩu mới"> </td>
                                   </td>
                                </tr>
                                <tr>
                                  <td>Confirm new password</td>
                                  <td id="confirmpass">
                                   <input type="password" class="form-control" name="confirmpass" placeholder="Xác nhận mật khẩu mới"> </td>
                                   </td>
                                </tr>
                    				</tbody>
                  				</table>
                        

                      <div class="box-footer">
                        <button type="button" onclick="FCancel()" class="btn btn-default pull-right ">Cancel</button>
                        <button type="submit"  name="tag" value="editprofile" class="btn btn-info pull-right">Lưu</button>
                      </div>
                        
                    
                          
                     
                  </div>
            	</div><!--/. panel--> 
        	</div><!--/.col-md-9 --> 
		  </div><!--/.row --> 
	</section><!-- /.section -->
	 </form>
<script>
  
  function FCancel(){

    window.location="<?php echo $host.'index.php?page=profile' ?>";
  }


  function Freload(){

    window.location.reload();
  }
</script>