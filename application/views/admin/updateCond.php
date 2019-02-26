            <div id="addCondidate">
               <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
            	 Add Condidates
               </nav>
               	<div class="container-1 card p-2">
               		<?php echo form_open_multipart('admin/create');?>
               		<form action="POST">
               			
						  <div class="form-group">
						    <label for="exampleInputEmail1">Model Name</label>
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
						   
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Id No.</label>
						    <input type="text" class="form-control" name="id" " placeholder="Enter Id Number">
						  </div>
						  <div class="form-group custom-file">
							  <input type="file" class="custom-file-input" name="userfile" id="customFile" required>
							  <label class="custom-file-label" for="customFile">Image resolution must be 200pxX200px</label>
							</div>
						  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>

               		</form>
               	</div>
            </div>