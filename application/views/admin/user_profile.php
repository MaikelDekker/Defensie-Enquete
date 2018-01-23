<?php
/*$user_id=$this->session->userdata('user_id');
if(!$user_id){
 
  redirect('user/login_view');
}*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Profiel Informatie</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
  <div class="login">
      <table class="table table-bordered table-striped">
        <tr>
          <h4>User Info</h4>
        </tr>
        <tr>
          <td>Naam</td>
          <td><?php echo $this->session->userdata('user_name'); ?></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><?php echo $this->session->userdata('user_email');  ?></td>
        </tr>
      </table>
      <a href="<?php echo base_url('index.php/admin/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
  </div>
</body>
</html>