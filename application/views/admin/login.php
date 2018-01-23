<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
  <div class="login">
      <h3>Login</h3>
      <?php
      $success_msg= $this->session->flashdata('success_msg');
      $error_msg= $this->session->flashdata('error_msg');
      if($success_msg){
      ?>
        <div class="alert alert-success">
          <?php echo $success_msg; ?>
        </div>
      <?php
      }
      if($error_msg){
      ?>
        <div class="alert alert-danger">
          <?php echo $error_msg; ?>
        </div>
      <?php
      }
      ?>
      <form role="form" method="post" action="<?php echo base_url('index.php/admin/login_user'); ?>">
        <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
        <input class="form-control" placeholder="Wachtwoord" name="user_password" type="password" value="">
        <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
      </form>
      <center style="margin-top: 10px;"><b>Nog geen account?</b><br></b><a href="<?php echo base_url('index.php/admin/register_view'); ?>">Registreer je hier</a></center> 
  </div>
</body>
</html>