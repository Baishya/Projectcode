<script>

    $(document).ready(function(){
		
		Dropezone.autoDiscover = false;
		var myDropzone = new Dropzone("#avatar-dropzone");
		
	});

</script>
<br></br>
<div class="row">
						<div class="col-md-1">
						</div><!---col-2--->
						<div class="col-md-3">
						<h1>User-Manager</h1>
						   
	                     <div class="list-group">
						 
									 <a class="list-group-item" href="?page=users">
										<i class="fa fa-plus"></i> New User
										</a>
						
						<?php 
						   $q = "SELECT * FROM users ORDER BY last ASC";
						   $r = mysqli_query($dbc, $q);
						   
						   while($list = mysqli_fetch_assoc($r)){ 
						       
							   $list = data_user($dbc, $list['id']);
						      //$blurb = substr(strip_tags($page_list['body']),0,0);
						   
						   ?>
							<a class="list-group-item <?php selected($list['id'], $opened['id'],'active') ?>" href="indexx.php?page=users&id=<?php echo $list['id']; ?>">
							<h4 class="list-group-item-heading"><?php echo $list['fullname']; ?></h4>
							<!--<p class="list-group-item-text"><?php //echo $blurb; ?></p>-->
							</a>
                                  
	 
						  <?php } ?>
						  </div><!---list-group--->
					    </div><!---col-3--->
						<div class="col-md-1">
						</div><!---col-1--->
						<div class="col-md-6">
	                                          <?php if(isset($message)) { echo $message; } ?>
											    <br></br>
												<form action="indexx.php?page=users&id=<?php echo $opened['id'];  ?>" method="post" role="form">
												
												<div class="form-group">
												<label for = "first">First Name:</label>
												<input class="form-control" type="text" name="first" id="first" value="<?php echo $opened['first']; ?>" placeholder= "" autocomplete="off">
												</div>
												
												<div class="form-group">
												<label for = "last">Last Name:</label>
												<input class="form-control" type="text" name="last" id="last" value="<?php echo $opened['last']; ?>" placeholder= "" autocomplete="off">
												</div>
												
												<div class="form-group">
												<label for = "email">Email Address:</label>
												<input class="form-control" type="text" name="email" id="email" value="<?php echo $opened['email']; ?>" placeholder= "" autocomplete="off">
												</div>
												
												<div class="form-group">
												<label for = "status">Status:</label>
												<select class="form-control"  name="status" id="status">
												<option value="0" <?php if(isset($_GET['id'])){ selected('0', $opened['status'], 'selected'); } ?>>Inactive</option>
												<option value="1" <?php if(isset($_GET['id'])){ selected('1', $opened['status'], 'selected'); } ?>>Active</option> 
												 
												</select>
												</div>
												
												<div class="form-group">
												<label for = "password">Password:</label>
												<input class="form-control" type="password" name="password" id="password" value="" placeholder= "password" autocomplete="off">
												</div>
												
												<div class="form-group">
												<label for = "passwordv">Verify-Password:</label>
												<input class="form-control" type="password" name="passwordv" id="passwordv" value="" placeholder= "Type Password Again" autocomplete="off">
												</div>
												 
												 <button type="submit" class="btn btn-default">Save</button>
												  <input type="hidden" name="submitted" value="1">
												  <?php if(isset($opened['id'])) { ?>
												  
												  <input type="hidden" name="id" value="<?php echo $opened['id']; ?>">
												  <?php } ?>
												</form>
												
												<form action="uploads.php" class="dropzone" id="avatar-dropzone">
												   <input type="file" name="file">
												
												</form>
						                        
						</div><!---col-5--->
						<div class="col-md-1">
		                </div><!---col-1--->
		
	    </div><!---end row--->