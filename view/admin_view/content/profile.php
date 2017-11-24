
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
include_once('src/users.php');
$uid = $_SESSION['user'];
$user = new Users();
$info = $user -> getUserbyID($uid);
$info = json_decode($info,true);
$full_name=$info['name'];
$gender=$info['gender'];
if($gender == 1)$gender ="Nam"; else if($gender ==2) $gender="Nữ"; else $gender="Cập nhật";
$address=$info['address'];
$phone=$info['phone'];
$email=$info['email'];



?>
    
	<section class="content"> 
    	<div class="row">
        	<div class="col-md-7">
            	<div class="panel"><!--panel bg-maroon--> 
                	<div class="panel-heading bg-aqua-active">	
                    	<h4 class="panel-title" id="hname"><?php echo $full_name; ?></h4>
                       <span class="pull-right" id="spanEdit">
                            <a href="<?php echo $host.'index.php?page=editprofile' ?>" onClick="" type="button" class="btn btn-sm btn-warning" id="btnEdit"><i class="glyphicon glyphicon-edit"></i></a><!--MSK-00151-->
                        </span>
                    </div>				
                    <div class="panel-body"><!--panel-body -->
                    	<div class="row" id="my_profile">
                			<div class="col-md-3"> 
                				<!--<img id="photo2" alt="User Pic" src="../<?php  ?>" class="img-circle img-responsive"> -->
                			</div>
                			<div class=" col-md-9"> 
                  				<table class="table table-bordered table-striped">
                    				<tbody>
                      					<tr>
                        					<td class="col-md-4">Full Name</td>
                        					<td id="full_name"><?php echo $full_name; ?></td>
                      					</tr>
                             			<tr>
                        					<td>Address</td>
                        					<td id="address"><?php echo $address; ?> </td>
                      					</tr>
                        				<tr>
                        					<td>Gender</td>
                        					<td id="gender"><?php echo $gender; ?> </td>
                      					</tr>
                      					<tr>
                        					<td>Email</td>
                        					<td id="email"><?php echo $email; ?> </td>
                      					</tr>
                                  <tr>
                        					<td>Phone Number</td>
                        					<td id="phone"><?php echo $phone; ?> </td>
                      					</tr>
                                 <tr>
                                  <td>Quyền hạn</td>
                                  <td id="phone"><?php echo $authority; ?> </td>
                                </tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                       
                     </div>
                   
            	</div><!--/. panel--> 
        	</div>
		</div><!--/.row --> 
	</section><!-- /.section -->
	
