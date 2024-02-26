@extends('halaman_dashboard.index')
@if (Auth::user()->role === 'notulen')
    
@section('navitem')
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
                  <a class="collapse-item" href="{{route('rapat')}}">Tabel Data Rapat</a>
                  <a class="collapse-item" href="/tambahrapat">Tambah Rapat</a>
              </div>
          </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
              aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Jenis Rapat</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Jenis - Jenis Rapat:</h6>
                  <a class="collapse-item" href="{{route('type')}}">Tabel Jenis Rapat</a>
              </div>
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Master Data User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages"
              aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Data User</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Data User:</h6>
                  <a class="collapse-item" href="{{route('usercontrol')}}">Tabel User</a>
                  <a class="collapse-item" href="/tambahuc">Tambah User</a>
                 
              </div>
          </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="nav-link" href="/profile/notulen/{{Auth::user()->id}}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Profile</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
@endsection

@section('main')
    <div class="row">
        <div class="col-md-12 grid-margin">
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4" style="float:right; margin-right:10px">
                <a href="{{route('export')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div> --}}
            <div class="d-flex justify-content-between align-items-center">
               
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}

            <h4 class="font-weight-bold mb-0 ml-5 d-inline">Data Jenis Rapat</h4>
            @if (Auth::user()->role === 'notulen')
                
            <div style="float: right">
                <a href="#" class="text-decoration-none text-white mr-5" ><button type="button"
                    class="btn btn-primary btn-icon-text btn-rounded d-inline" data-toggle="modal" data-target="#tambahModal">
                    <i class="ti-plus btn-icon-prepend"></i>Tambah Jenis Rapat
                </button></a>
            </div>
            @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire(
                    'Sukses',
                    '{{ Session::get('success') }}',
                    'success'
                );
            });
        </script>
    @endif
    </div>

          
            
            
        <div class="table-responsive">
        <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    Nomor
                                </th>
                                <th>
                                    Nama Jenis Rapat
                                </th>      
                                <th style="text-align: center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                       
                        <tbody>
                                @foreach ($jenis as $item)
                                <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                              
                                <td>{{ $item->name }}</td>
                                    
                               
                                    <td style="text-align:center " >
                                        &nbsp;<a href="/edit/type/{{$item->id}}"
                                            class="btn btn-warning text-decoration-none" style="margin-right:10px" >Edit</a>
                                            
                                        <form onsubmit="return confirmDelete(event)" class="d-inline"
                                            action="/hapus/type/{{$item->id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                            
                                </td>
                            </tr>
                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>


{{-- modal tambah jenis rapat --}}
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Rapat</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="/tambahtype" method="post">
            <div class="form-group" style="margin:10px">
                <label for="nama">Jenis Rapat</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Jenis Rapat"
                    name="name" required>
            </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             @csrf

              <button class="btn btn-primary" type="submit">Tambah</button>

            </form>
        </div>
    </div>
</div>
</div>






@endsection

@elseif(Auth::user()->role === 'user')
@section('navitem')
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
          <a class="nav-link" href="/user">
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
                  <a class="collapse-item" href="{{route('rapat')}}">Tabel Data Rapat</a>
                  {{-- <a class="collapse-item" href="/tambahrapat">Tambah Rapat</a> --}}
              </div>
          </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
              aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Jenis Rapat</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
              data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Jenis - Jenis Rapat:</h6>
                  <a class="collapse-item" href="{{route('type')}}">Tabel Jenis Rapat</a>
              </div>
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      {{-- <li class="nav-item">
          <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages"
              aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Data User</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Data User:</h6>
                  <a class="collapse-item" href="{{route('usercontrol')}}">Tabel User</a>
                  <a class="collapse-item" href="/tambahuc">Tambah User</a>
                 
              </div>
          </div>
      </li> --}}

      <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="nav-link" href="/profile/user/{{Auth::user()->id}}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Profile</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
@endsection
@section('main')
    <div class="row">
        <div class="col-md-12 grid-margin">
            {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4" style="float:right; margin-right:10px">
                <a href="{{route('export')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div> --}}
            <div class="d-flex justify-content-between align-items-center">
               
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}

            <h4 class="font-weight-bold mb-0 ml-5 d-inline">Data Jenis Rapat</h4>
            @if (Auth::user()->role === 'notulen')
                
            <div style="float: right">
                <a href="#" class="text-decoration-none text-white mr-5" ><button type="button"
                    class="btn btn-primary btn-icon-text btn-rounded d-inline" data-toggle="modal" data-target="#tambahModal">
                    <i class="ti-plus btn-icon-prepend"></i>Tambah Jenis Rapat
                </button></a>
            </div>
            @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire(
                    'Sukses',
                    '{{ Session::get('success') }}',
                    'success'
                );
            });
        </script>
    @endif
    </div>

          
            
            
        <div class="table-responsive">
        <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    Nomor
                                </th>
                                <th>
                                    Nama Jenis Rapat
                                </th>
                              
                            </tr>
                        </thead>
                       
                        <tbody>
                                @foreach ($jenis as $item)
                                <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                              
                                <td>{{ $item->name }}</td>
                               
                            </tr>
                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>


{{-- modal tambah jenis rapat --}}
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Rapat</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form action="/tambahtype" method="post">
            <div class="form-group" style="margin:10px">
                <label for="nama">Jenis Rapat</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan Jenis Rapat"
                    name="name" required>
            </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             @csrf

              <button class="btn btn-primary" type="submit">Tambah</button>

            </form>
        </div>
    </div>
</div>
</div>






@endsection
@endif


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Menghentikan form dari pengiriman langsung

        Swal.fire({
            title: 'Yakin Hapus Data?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((willDelete) => {
            if (willDelete.isConfirmed) {
                event.target.submit(); // Melanjutkan pengiriman form
            } else {
                swal('Your imaginary file is safe!');
            }
        });
    }
</script>