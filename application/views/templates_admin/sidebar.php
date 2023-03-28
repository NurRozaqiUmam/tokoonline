
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
          <p><?php echo $admin['nama_admin']?></p>
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
            <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
                <i class="fa fa-fw fa-dashboard"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/data_barang') ?>">
                <i class="fa fa-fw fa-database"></i>
                <span>Data Produk</span></a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-file"></i> <span>Data Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('admin/order') ?>"><i class="fa fa-circle-o"></i> Order</a></li>
            <li class="active"><a href="<?php echo base_url('admin/order/proses') ?>"><i class="fa fa-circle-o"></i> Order Masuk</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Data User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('admin/data_user/tenant') ?>"><i class="fa fa-circle-o"></i> Data Tenant</a></li>
            <li class="active"><a href="<?php echo base_url('admin/data_user/customer') ?>"><i class="fa fa-circle-o"></i> Data Customer</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/laporan') ?>">
                <i class="fa fa-fw fa-pie-chart"></i>
                <span>Report</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/metode') ?>">
                <i class="fa fa-fw fa-edit"></i>
                <span>Metode</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/data_barang/kategori') ?>">
                <i class="fa fa-fw fa-edit"></i>
                <span>Data Kategori</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Grafik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url('admin/chart') ?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
            <li class="active"><a href="<?php echo base_url('admin/chart/chart2') ?>"><i class="fa fa-circle-o"></i> Tahun</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>