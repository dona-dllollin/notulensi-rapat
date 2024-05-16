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
@endif

@section('main')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
               
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h4 class="font-weight-bold mb-0 ml-5 d-inline">Data Rapat</h4>
            @if (Auth::user()->role === 'notulen')
            <div style="float: right">
                <a href="/tambahrapat" class="text-decoration-none text-white mr-5" ><button type="button"
                    class="btn btn-primary btn-icon-text btn-rounded d-inline" >
                    <i class="bi bi-plus"></i>  Tambah  Rapat
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
            <div class="form-group">
                <form action="">
                <label for="type">Filter Jenis Rapat</label>
                <select class="form-control" name="type_id" id="type" style="width: 30%; margin: center;" required onchange="filterMeetings()">
                    <option value="all" {{request('type_id') == 'all' ? 'selected' : ''}}> Semua Jenis Rapat</option>
                    @foreach ($type as $item)
                    <option value="{{$item->id}}" {{request('type_id') == $item->id ? 'selected' : ''}}>{{$item->name}}</option>     
                    @endforeach
                </select>
            </form>
              </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    Nomor Rapat
                                </th>
                                <th>
                                   Jenis Rapat
                                </th>
                                <th>
                                   Nama Rapat
                                </th>
                                <th>
                                   Pimpinan Rapat
                                </th>
                                <th>
                                   Tanggal
                                </th>
                                <th>
                                   Waktu
                                </th>
                                <th style="text-align: center">
                                    detail
                                </th>
                            </tr>
                        </thead>
                       
                        <tbody>
                                @foreach ($data as $item)
                                <tr>
                                <td> {{ $item->nomor}}</td>
                                <td> {{ $item->type->name}}</td>  
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->pemimpin }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->waktu }}</td>


                                    <td style="text-align:center " >
                                        &nbsp;<a href="/detail/rapat/{{$item->id}}"
                                            class="btn btn-warning text-decoration-none" style="margin-right:10px" >Detail</a>
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


@endsection
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

<script>
     function filterMeetings() {
            const typeSelect = document.getElementById('type');
            const typeId = typeSelect.value;
            const url = new URL(window.location.href);
            if (typeId && typeId !== 'all') {
                url.searchParams.set('type_id', typeId);
            } else {
                url.searchParams.delete('type_id');
            }
            window.location.href = url.toString();
        }
</script>