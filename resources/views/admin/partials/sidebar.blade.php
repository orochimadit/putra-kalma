
  <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
      <!--- Divider -->
      <div id="sidebar-menu">
        <ul>

          <li class="user-details cyan darken-2">


            <div style=" background: #5fbeaa ">

              <img src="{{asset('assets/images/avatar-profil.PNG')}}" alt="" class="circle responsive-img valign profile-image">
              <a class="text-white" href="#">tes</a>


            </div>
          </li>

          <li class="text-muted menu-title">Navigation</li>

          <li>
            <a href="{{route('dashboard')}}"><i class="ti-home"></i> <span> Dashboard </span></a>

          </li>

          <li class="has_sub">
            <a href="javascript:void(0);" class="waves-effect"><i class="ti-pencil-alt"></i><span> Data Master </span> <span class="menu-arrow"></span></a>
            <ul class="list-unstyled">
              <li><a href="{{route('housings.index')}}">Perumahan</a></li>
              <li><a href="{{route('lots.index')}}">Kaveling</a></li>
              <li><a href="{{route('banks.index')}}">Data Bank</a></li>
              <li><a href="{{route('kprs.index')}}">KPR</a></li>
              <li><a href="{{route('staff.index')}}">Manajemen Staff</a></li>
              <li><a href="{{route('konsumen.index')}}">Manajemen Konsumen</a></li>
            </ul>
          </li>

          <li class="has_sub">
            <a href="{{route('sales.index')}}" class="waves-effect"><i class="ti-import"></i> <span> Transaksi Masuk </span> </a>
          </li>

          <li class="has_sub">
            <a href="{{route('payment.index')}}" class="waves-effect"><i class="ti-money"></i> <span> Pembayaran </span> </a>
          </li>

          <li class="has_sub">
            <a href="{{route('report')}}" class="waves-effect"><i class="ti-archive"></i> <span> Laporan </span> </a>
          </li>

          <!-- <li class="has_sub">
            <a href="{{route('sales.index')}}" class="waves-effect"><i class="ti-shopping-cart"></i> <span> Penjualan </span> </a>
          </li> -->
          <li class="has_sub">
            <a href="{{route('development-progress.index')}}" class="waves-effect"><i class="ti-home"></i> <span>Progres Pembagunan</span> </a>
          </li>



        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>