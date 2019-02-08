<br>
<div class="col-md-7 col-md-offset-2">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?=base_url('home');?>">CredManager</a>
      </div>
      <?php if ($this->session->userdata('uid')):?>
      <ul class="nav navbar-nav">
        <li><a href="<?=base_url('master/dashboard');?>">New</a></li>
        <li><a href="<?=base_url('cred/list');?>">Manage</a></li>
      </ul>
      <?php endif?>  
    
      <ul class="nav navbar-nav navbar-right">
        <?php if ($this->session->userdata('uid')):?>
        <li>
          <a href="<?=base_url('master/logout');?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
        </li>
        <?php endif?>

        <?php if (!$this->session->userdata('uid')):?>
          <li>
            <a href="<?=base_url('master/login');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          </li>
        <?php endif ?>
      </ul>
    </div>
  </nav>  
</div>
