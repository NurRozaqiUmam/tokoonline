
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $tenant['nama_tenant']?></p>
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
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('tenant/dashboard_tenant') ?>">
                <i class="fa fa-fw fa-dashboard"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('tenant/data_barang') ?>">
                <i class="fa fa-fw fa-database"></i>
                <span>Data Produk</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('tenant/order') ?>">
                <i class="fa fa-fw fa-file"></i>
                <span>Order</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('tenant/laporan') ?>">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span>Report</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>