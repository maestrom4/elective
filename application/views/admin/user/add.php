<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title"><?php echo empty($user->id) ? 'Add a new user' : 'Edit user' ?></h4>
  </div>
  <div class="modal-body">
  <!-- <?php echo '<pre>'.print_r($this->session->userdata(),TRUE).'</pre>';?> -->
  <?php echo validation_errors(); ?>
  <?php echo form_open(); ?>
  <!-- <?php echo var_dump($users); ?> -->
  <table class="table">
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Email</td>
        <td><?php echo form_input('email');?></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><?php echo form_password('password');?></td>
      </tr>
      <tr>
        <td></td>
        <td><?php echo form_submit('submit','Log in','class="btn btn-primary"');?></td>
      </tr>

    </tbody>
  </table>
  <?php echo form_close();?>

  </div>
