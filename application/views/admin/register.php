<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registratie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
  <div class="login">
      <h3>Registration</h3>
      <?php
      $error_msg=$this->session->flashdata('error_msg');
      if($error_msg){
        echo $error_msg;
      }?>
                    
      <form role="form" method="post" action="<?php echo base_url('index.php/admin/register_user'); ?>">
        <input class="form-control" placeholder="Name" name="user_name" type="name" autofocus>
        <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
        <input class="form-control" placeholder="Wachtwoord" name="user_password" type="password" value="">
        <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
      </form>
      <center style="margin-top: 10px;"><b>Al een account?</b><br></b><a href="<?php echo base_url('index.php/admin/login_view'); ?>">Log in</a></center>
  </div>
</body>
</html>