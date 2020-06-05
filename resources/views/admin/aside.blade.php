 <div class="col-md-3 left_col">
  <div class="left_col scroll-view" style="width: 100%;">

    <!-- sidebar menu -->
    <div id="sidebar-menu" style="margin-top: 20px;" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Главное меню</h3>
        <ul class="nav side-menu">

          <li><a><i class="fa fa-home"></i> Рубрики <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                @if(Request::is('admin/history'))
                  <li><a href="{{ route('admin')}}">Вернуться обратно</a></li>
                @endif
              <li><a href="{{ route('history')}}">История платежей</a></li>
              <li><a href="{{ route('invoiceForPayment')}}">Создать платёж</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->

  </div>
</div>