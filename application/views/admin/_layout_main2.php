<?php
$this->load->view('admin/components/head');
?>

<body>

  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Title</a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <!-- <li><a href="#">Create Project</a></li> -->
              <li><?php echo anchor('admin/user/new_project','<i class="glyphicon glyphicon-pushpin"></i> New Project');?></li>
              <li><?php echo anchor('admin/user/settings','<i class="glyphicon glyphicon-cog"></i> Settings');?></li>
              <li><?php echo anchor('admin/user/logout','<i class="glyphicon glyphicon-off"></i>  logout');?></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <?php $this->load->view($subview);?>
    </div>
  </div>




<?php $this->load->view('admin/components/footer');?>
