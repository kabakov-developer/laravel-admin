<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.head')
</head>
<body class="nav-md">

    <div class="container body">
      <div class="main_container">
       @include('admin.aside')

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

        <!-- /footer content -->
      </div>

<!-- /#wrapper -->

@include('admin.footer')
</body>

</html>