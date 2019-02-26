
   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>">Vote</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>admin/index">admin</a>
      </li>

<!--       <?php if(!$this->session->userdata('userId') == '') :?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>admin/logout">Logout</a>
      </li>
    <?php endif ;?> -->

    </ul>
 
  </div>
    <?php if(!$this->session->userdata('userId') == '') :?>
      <div class="">
        <a class="nav-link" href="<?php echo base_url();?>admin/logout">Logout</a>
      </div>
    <?php endif ;?>
</nav>

