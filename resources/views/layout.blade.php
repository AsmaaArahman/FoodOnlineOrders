<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>
        @yield('title')    
        </title>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    
        <!-- Page level plugin CSS-->
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700');

body{
    background: #f2f2f2;
    font-family: 'Josefin Sans', sans-serif;
}

h3{
     font-family: 'Josefin Sans', sans-serif;
}

.box{
    padding:60px 0px;
}

.title{
    margin:30px 0 0 0px;
}
.box-part{
    background:#FFF;
    border-radius:10px;
    padding:60px 10px;
    margin:30px 0px;
}

.box-part:hover{
    background:#4183D7;
}

.box-part:hover .fa , 
.box-part:hover .title , 
.box-part:hover .part p, 
.box-part:hover .text ,
.box-part:hover a{
    color:#FFF;
    -webkit-transition: all 1s ease-out;
    -moz-transition: all 1s ease-out;
    -o-transition: all 1s ease-out;
    transition: all 1s ease-out;
}

.text{
    margin:20px 0px;
}

.fa{
     color:#4183D7;
}</style>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

            <a class="navbar-brand mr-1" href="/">Tablea</a>
        
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>
                            <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            <!-- Navbar -->
            
        
            </nav>
        
                  <div id="wrapper">
              
                    <!-- Sidebar -->
                    <ul class="sidebar navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="/tablea/tablea/public/">
                          <i class="fas fa-fw fa-tachometer-alt"></i>
                          <span>Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/tablea/tablea/public/plantes" id="pagesDrop">
                         </i><i class="fas fa-fw fa-utensil-spoon"></i>
                          <span>Plantes</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/tablea/tablea/public/meals">
                          <i class="fas fa-fw fa-utensils"></i>
                          <span>Meals</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/tablea/tablea/public/options">
                          <i class="fas fa-fw fa-utensils"></i>
                          <span>Options</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/tablea/tablea/public/qutes">
                          <i class="fas fa-fw fa-parachute-box"></i>
                          <span>Qutes</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/tablea/tablea/public/customer">
                          <i class="fas fa-fw fa-user"></i>
                          <span>Customer</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/tablea/tablea/public/order">
                          </i><i class="fas fa-fw fa-truck"></i>
                          <span>Orders</span></a>
                      </li>
                    </ul>
              
                    <div id="content-wrapper">
        <div class="container-fluid">
            @include('message')
            @yield('content')
                    </div>
                </div>
                    
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Tablea 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

<!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
  
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    
        <!-- Page level plugin JavaScript-->
        <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    
        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin.min.js')}}"></script>
    
        <!-- Demo scripts for this page-->
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    
    </body>
</html>
