<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DEPARTMENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Administrative</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Purchasing</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Production</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Sales</span>
          </a>
        </li>

        <li class="treeview active">
          <a href="<?php echo site_url(); ?>">
            <i class="fa fa-money"></i> <span>Finance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if($uri == 'sales-invoice'){echo 'class="active"';}?>><a href="<?php echo site_url('sales-invoice'); ?>"><i class="fa fa-circle-o"></i>Sales Invoice</a></li>
            <li <?php if($uri == 'sales-ledger'){echo 'class="active"';}?>><a href="<?php echo site_url('sales-ledger'); ?>"><i class="fa fa-circle-o"></i>Sales Ledger</a></li>
            <li <?php if($uri == 'subsidiary'){echo 'class="active"';}?>><a href="<?php echo site_url('subsidiary-ledger'); ?>"><i class="fa fa-circle-o"></i>A/R Subsidiary Ledger</a></li>
            <li <?php if($uri == 'financial-statement'){echo 'class="active"';}?>><a href="<?php echo site_url('financial-statement'); ?>"><i class="fa fa-circle-o"></i>Financial Statement</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>