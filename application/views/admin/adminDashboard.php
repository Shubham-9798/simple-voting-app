<?php   echo $this->session->flashdata('status');?>

<div class="popup card p-4">
</div>

<div class="mt-2">
	<div class="row m-0">
		<div class="col-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                TOP 3 Achiever
            </nav>

            <?php foreach ($dec as $value) :?>
                  <div class="card mc-s">

                    
                    <div class="card d-flex flex-row justify-content-between ">
                      <div class="p-2"><?php echo $value->cond_nm;?></div>
                      <div class="p-2"><?php echo $value->party_nm;?></div>
                      <div class="p-2">Votes : <?php echo $value->count;?></div>
                      <!-- <button class="btn btn-primary" onclick='popup("<?php echo (string)$value->cond_nm.",".$value->party_nm.",".$value->count;?>")'>View_ </button> -->
                    </div>

                  </div>
         <?php endforeach ;?>


            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
                Vote Counting
            </nav>
         <div id="navbar-example2">
         <?php $a=1;?>
            <?php foreach ($all_data as $value) :?>
                  <div class="card mc-s">

                    
                    <div class="card d-flex flex-row justify-content-between ">
                    <div class="p-2"><?php echo $a;?></div>
                      <div class="p-2"><?php echo $value->cond_nm;?></div>
                      <div class="p-2"><?php echo $value->party_nm;?></div>
                      <div class="p-2">Votes : <?php echo $value->count;?></div>
                      <a class="btn btn-primary" href="<?php echo '#'.$a;?>">View</a>
                    </div>

                  </div><?php $a++;?>
         <?php endforeach ;?>
         </div>
		</div>




		<div class="col-md-7">
			<nav class="navbar navbar-expand-lg navbar-light bg-light border border-primary">
                <span>Registered Condidate</span>
                <button class="btn btn-info ml-3" id="addCondidate-btn">ADD</button>
            </nav>
            <div class="container-1" data-spy="scroll" data-target="#navbar-example2" data-offset="0">
            	  <?php $p=1;?>
                <?php foreach ($all_data as $value) :?>
                  <div class="card">
                  <div id="<?php echo $p;?>"></div>
                  	<div class="d-flex flex-column flex-sm-row">
                  		  <img src="<?php echo site_url();?>uploads/images/<?php echo $value->image;?>" class="ml-4 mt-2 img-fluid rounded" alt="...">
                        <span class="discrip p-4"> Lorem ipsum dolor sit amet,dslkj sksjnk  d d  d d dddd d d d consectetur adipisicing elit. Nisi, quae?</span>
                  	</div>
          	
          <div class="card m-3 d-flex flex-column flex-sm-row justify-content-between ">
					  <div class="p-2"><?php echo $value->cond_nm;?></div>
					  <div class="p-2"><?php echo $value->party_nm;?></div>
					  <div class="p-2">Votes : <?php echo $value->count;?></div>
					  <button class="btn btn-primary" onclick='window.location="<?php echo base_url();?>admin/updateCond"'>Editw</button>
					</div>

                  </div><?php $p++;?>
                 <?php endforeach ;?>
				 
            </div> <!---container-1 -->
            <!-- Add condidate -->
            <div id="addCondidate">
               <nav style="background-color:maroon" class="navbar navbar-expand-lg  mt-4 d-flex flex-row justify-content-between">
            	 <div>Add Condidates</div>
               <div id="t-cross" class="float-right">X</div>
               </nav>
               	<div class="card p-2">
               		<?php echo form_open_multipart('admin/create');?>
            
               			
						  <div class="form-group">
						    <label for="exampleInputEmail1">Model Name</label>
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
						   
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Id No.</label>
						    <input type="text" class="form-control" name="id"  placeholder="Enter Id Number" required>
						  </div>
						  <div class="form-group custom-file">
							  <input type="file" class="" name="userfile" required>
							  <label class="" for="customFile">Image resolution must be 200pxX200px</label>
							</div>
						  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>

               		</form>
                   <?php echo form_close()?>
               	</div>
            </div>




           

		</div>
	</div>
	
</div>

<script>
let val = 1;
console.log(val);
function popup(data){
   

  if(val!=1)
  {
    console.log('only one click');
    return 0;
  }
  val++;
  console.log(val);
  console.log(data);
  var str_array = data.split(',');
  var pop = document.querySelector('.popup');

  var foo = document.querySelector('.popup');
while (foo.firstChild) foo.removeChild(foo.firstChild);
  
  console.log(pop)
  for (var i = str_array.length - 1; i >= 0; i--) {
    var para = document.createElement("h1")
    console.log(str_array[i]);
    //var t = document.createTextNode(str_array[i]);  
    pop.appendChild(para);  
    //var v = para.appendChild("<div>"+str_array[i]+"</div>")
    //  pop.appendChild(t); 
    para.outerHTML = "<p>"+str_array[i]+"</p>"; 
       
  }

    //console.log(t);
    
    pop.style.display = "block";
    console.log(pop)
}

</script>