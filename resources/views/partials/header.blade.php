<div class="search-open"><!-- search open -->
    <div class="container">
      <div class="col-md-offset-2 col-md-8">
        <div class="input-group">
          <input type="text" class="form-control">
          <span class="input-group-btn">
            <button class="btn tp-btn-orange" type="button">Search</button>
          </span> </div>
        </div>
      </div>
    </div>
    <!-- search open --> 
    <!-- tp header -->
    <div class="tp-header" id="tp-header">
      <div class="container">
        <div class="row">
          <div class="col-md-4"> <a class="navbar-brand" href="index.html"><img src="{{asset('images/ft-logo.png')}}" alt="Peace Insurance Logo" class="img-responsive"></a> 
          </div>
        </div>

      </div>
    </div>

    <!-- /.tp header --> 
    <!-- tp-navbar -->
    <div class="tp-navbar">
      <nav class="navbar navbar-default">
        <div class="container"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown"> 
                <a href="{{route('home')}}"  role="button" aria-expanded="false"> Home </a>
              </li>
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Perumahan <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu">
                @foreach($housings as $value)
                    <li><a href="{{route('perumahan',$value->id)}}">{{$value->name}}</a></li>
                @endforeach
                </ul>
              </li>
            </li>
            <li><a href="index.php?page=kpr">KPR</a></li>
            <li><a href="{{route('panduan')}}">Panduan</a></li>
            <li><a href="{{route('profile')}}">Profil Perusahaan</a></li>
            <li><a href="{{route('contact')}}">Dukungan</a></li>
          

            @auth
            <li><a href="index.php?page=akun">Akun</i></a></li>
            <li >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            
            </li> 
            <!-- <li><a href="logout.php">Keluar</i></a></li> -->
              <li><a href="index.php?page=proses">Transaksi</i></a></li>
            @endauth
            @guest
             <li><a href="{{route('login')}}">Masuk</i></a></li>
             <li><a href="{{route('login')}}">Daftar</i></a></li>
            @endguest
            

          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </div>


