<?php echo validation_errors(); ?>
    
<div class="">
    <span>Login</span>
<?php echo form_open('admin/login'); ?>
    <form method="POST">
    <div class="form-group px-2">
        <label>Phone Number</label>
        <input type="number" name="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="Phone Number">
       
    </div>
    <div class="form-group px-2">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
    </div>

    <button type="submit" name="submit" value="submit" class="mx-auto btn btn-primary">Submit</button> 
    </form>
<?php echo form_close(); ?>
   
</div>
 
