


<div class="register-center">
    <span>Register</span>
    <?php echo form_open('pages/registerDb'); ?>
    <form method="POST">
        <div class="form-group px-2">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group px-2">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group px-2">
        <label for="exampleInputPassword1">Phone Number</label>
        <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Phone Number">
    </div>

    <button type="submit" name="submit" value="submit" class="mx-auto btn btn-primary">Submit</button>
    </form>
    <?php echo form_close(); ?>
</div>