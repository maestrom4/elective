<div class="modal show" id="modal-id">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><?php echo empty($user->id) ? 'Add user':'Edit user <b>'. $user->email."</b>";?></h4>
      </div>
      <div class="modal-body">
      <!-- <?php echo '<pre>'.print_r($this->session->userdata(),TRUE).'</pre>';?> -->
      <?php echo validation_errors(); ?>
      <?php echo form_open(); ?>
      <table class="table">
        <thead>
          <tr>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Email</td>
            <?php
              echo empty($user->id) ? "<td>".form_input('email')."<td>":"<td>".form_input('email',set_value('email',$user->email))."</td>";
            ?>
          </tr>
          <tr>
            <td>Password</td>
            <td><?php echo form_password('password');?></td>
          </tr>


          <tr>
            <td>Confirm password</td>
            <td><?php echo form_password('passconf');?></td>
          </tr>

          <tr>
            <td></td>
            <td><?php echo form_submit('submit',empty($user->id)? 'Add user':'Update User','class="btn btn-primary"');?></td>
          </tr>
        </tbody>
      </table>
      <?php echo form_close();?>
      </div>
      <div class="modal-footer">
        &copy; <?php echo date('Y'). $meta_title; ?>
       </div>
    </div>
  </div>
</div>
