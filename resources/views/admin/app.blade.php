<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.head')
</head>
<body class="nav-md">

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="width: 100%;">

            <!-- sidebar menu -->
            <div id="sidebar-menu" style="margin-top: 20px;" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Главное меню</h3>
                <ul class="nav side-menu">

                  <li><a><i class="fa fa-home"></i> Рубрики <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/history">История платежей</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            @section('content')
            @show
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <div class="copyright text-center my-auto">
                <span>&#169; PayMaximus {{ now()->year }}</span>
            </div>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>

<!-- /#wrapper -->

@include('admin.footer')
</body>

</html>