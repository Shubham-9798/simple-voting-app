

 <?php if($this->session->flashdata('message_name')!=""):?>
<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> 
   <?php echo $this->session->flashdata('message_name') ;?>
</div>
<?php endif;?>

<h3>Dashbord</h3>
 <div class="row m-2">
 	<!-- <div class="col-md-3">
 		<h2>Side column</h2>
 	</div> -->

 	<div class="col-md-12 ">

 	  <?php echo form_open('home/index'); ?>
 		<form id="validate1" method="POST">
        <div class="row mx-2">
              <?php foreach ($all_data as $condidate) :?>
        		<div class="col-4 col-sm-3 col-md-2 mt-2 mb-2">
                    <div class="card" style="min-width: 100px!important;">
						  <img class="card-img-top" class="img-circle" src="<?php echo site_url();?>uploads/images/<?php echo $condidate->image;?>" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $condidate->party_nm;?></h5>
						    <p class="card-text"><?php echo $condidate->cond_nm;?></p>
						    <input type="checkbox" name="select" class="check" value="<?php echo $condidate->condidate_id;?>" onclick="func()" >
						    <span class="value">Select Condidate</span>
						  </div>
                    </div>   
        		</div> 
        	   <?php endforeach;?>	

        </div>

	    <div class="container p-4">
							<div class="form-group">
						<label for="exampleFormControlInput1">Name</label>
						<input type="text" class="form-control" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Phone Number</label>
						<input type="text" id="pass" class="form-control" name="number"placeholder="Phone Number" required>
						<small id="message"></small>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">confirm Phone Number</label>
						<input type="text" id="passconfm" class="form-control" placeholder="Confirm Nmber" required>
						<small id="message1"></small>
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">FeedBack</label>
						<textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" rows="3" required></textarea>
					</div>
					<button class="btn btn-primary" name="submit" value="submit" id="form_id1">Submit</button>
					</div>
				</form>
				<?php echo form_close(); ?>
				</div>
 </div>
	<!--row-->


 
<script>
	//var sel = document.querySelectorAll(".check");

	function func() {
		var sel = document.querySelectorAll(".check");
		var val = document.querySelectorAll(".value");
        //console.log(val);
		// var sel = document.getElementById("myCheck");
		//console.log(sel);
		for (var i = 0; i < sel.length; ++i) {
            //console.log(sel[i]);
			if(sel[i].checked == true){
				//console.log(sel[i].value);
                val[i].style.color = "green";
                val[i].innerHTML ="selected"
			}
			else {
				//console.log("not selected");
				val[i].style.color = "red";
				val[i].innerHTML ="Not Selected"
			}
     }///for loop end

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  }





</script>