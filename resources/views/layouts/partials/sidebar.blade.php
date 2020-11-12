<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth()->user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @if (Auth()->user()->admin === 1)
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
              <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Inventory</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Wherehouse</a></li>
            </ul>
        </li>
        @endif

        <li><a href="#"><i class="fa fa-book"></i> <span>User</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
