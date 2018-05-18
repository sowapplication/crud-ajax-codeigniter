
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="" alt="">
        </div>
        <div class="pull-left info">
          <p>Siva</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
		<li>
          <a href="<?php echo site_url('sowmastercontroller/')?>">
             <i class="fa fa-dashboard"></i> <span>SOW Master</span>		 
          </a>
        </li>
		<li>
          <a href="<?php echo site_url('client/')?>">
             <i class="fa fa-dashboard"></i>Client master	 
          </a>
        </li>
		<li>
          <a href="<?php echo site_url('User_controller/')?>"><i class="fa fa-dashboard"></i>User master		 
          </a>
        </li>
		<li>
          <a href="<?php echo site_url('role/')?>"><i class="fa fa-dashboard"></i>Role master		 
          </a>
        </li>
		<li>
          <a href="<?php echo site_url('report/')?>"><i class="fa fa-dashboard"></i>Reports		 
          </a>
        </li>		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
  