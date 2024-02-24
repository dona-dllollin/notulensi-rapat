@extends('halaman_dashboard.index')

@extends('halaman_dashboard.navnotulen')
{{-- @section('navitem')
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="/notulen">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Rapat
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
              aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Rapat</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Notulensi Rapat:</h6>
                  <a class="collapse-item" href="{{route('rapat')}}">Tambah Rapat</a>
                  <a class="collapse-item" href="cards.html">Cards</a>
              </div>
          </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
              aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Utilities</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Custom Utilities:</h6>
                  <a class="collapse-item" href="">User Control</a>
                  <a class="collapse-item" href="utilities-color.html">Colors</a>
                  <a class="collapse-item" href="utilities-border.html">Borders</a>
                  <a class="collapse-item" href="utilities-animation.html">Animations</a>
                  <a class="collapse-item" href="utilities-other.html">Other</a>
              </div>
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
              aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Login Screens:</h6>
                  <a class="collapse-item" href="">Data Mahasiswa</a>
                  <a class="collapse-item" href="login.html">Login</a>
                  <a class="collapse-item" href="register.html">Register</a>
                  <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                  <div class="collapse-divider"></div>
                  <h6 class="collapse-header">Other Pages:</h6>
                  <a class="collapse-item" href="404.html">404 Page</a>
                  <a class="collapse-item" href="blank.html">Blank Page</a>
              </div>
          </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="nav-link" href="charts.html">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="tables.html">
              <i class="fas fa-fw fa-table"></i>
              <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
@endsection --}}


@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah data Rapat</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="/tambahrapat" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nomor Rapat</label>
                        <input type="text" class="form-control" id="nomor" placeholder="Nomor Rapat"
                            name="nomor">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Rapat</label>
                        <select class="form-control" name="jenis" id="jenis" style="width: 100%" required>
                            <option >Pilih Jenis Rapat</option>
                            @foreach ($type as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>     
                            @endforeach
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="nama">Nama Rapat</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Rapat"
                            name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Pemimpin Rapat</label>
                        <input type="text" class="form-control" id="pemimpin" placeholder="Pemimpin Rapat"
                            name="pemimpin" >
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">
                        <label for="email">Notulen Rapat</label>
                        <input type="text" class="form-control" id="notulen"  value="{{Auth::user()->name}}"
                            name="notulen" disabled> 
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nim">tanggal</label>
                        <input type="date" class="form-control" id="tanggal"  name="tanggal">
                        </div>
                    
                    <div class="col-sm-6">
                        <label for="angkatan">Waktu</label>
                        <input type="time" class="form-control" id="waktu" name="waktu"
                          >
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Notulensi Rapat</label>
                        
                        <textarea  class="form-control" name="notulensi" id="editor">
                        </textarea>
                  
                    
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/rapat" class="btn bg-gray-500 text-gray-100">Kembali</a>
                </form>
            </div>
        </div>
    </div>


    

  
@endsection


    
 

