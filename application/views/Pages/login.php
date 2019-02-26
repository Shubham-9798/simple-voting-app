
<?php if(($this->session->userdata('userId') != '') or $this->session->flashdata('notification')) :?>
   <?php $this->session->flashdata('notification');?>
<?php endif;?>   



<div class="register-center">
    <span>Login</span>
    <?php echo form_open('pages/login'); ?>
    <div class="form-group px-2">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group px-2">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="Password" placeholder="Phone Number">
    </div>
      <div class="form-check">
        <input type="checkbox"  class="form-check-input" id="passwordCheck">
        <label class="form-check-label" for="exampleCheck1">Show password</label>
      </div>

    <button type="submit" name="submit" value="submit" class="mx-auto btn btn-primary">Submit</button>
    </form>
    <?php echo form_close(); ?>
</div>
