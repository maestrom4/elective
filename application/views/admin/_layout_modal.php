<?php $this->load->view('admin/components/head');?>
<body style="background: #555;">
<div class="modal show" id="modal-id">
  <div class="modal-dialog">
    <?php $this->load->view($subview);?>
      <div class="modal-footer">
        &copy; <?php echo date('Y'). $meta_title; ?>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/components/footer');?>
