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
@endif

@section('main')

            @foreach ($data as $item)   
            <div class="d-sm-flex align-items-center justify-content-between mb-4" style="float:right; margin-right:100px; margin-top:20px">
                <a href="/ekspor/rapat/{{$item->id}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i> Ekspor Rapat </a>
                </div>
            @endforeach


<div style="padding: 20px; width: 21cm; height:30cm; margin:auto; margin-bottom:50px; margin-top:100px">
<div class="card shadow ">
   <div style="width: 21cm; height:30cm" >
 
    <table  style="margin: 20px; margin-left:30px; border-bottom : 3px solid #484848;">
        <tr>
              <td style="padding-right: 25px; padding-bottom:15px"> <img src="{{asset('image/kasuwari.png')}}" width="140px"> </td>
              <td style="text-align: center; font-family:'Times New Roman', Times, serif; padding-bottom:15px">
                <div>
                    <h4 style="font-size: 20px">LKMS Kasuwari</h4>
                    <h4 style="font-size: 20px">Jl. Untungsuropati No. 43, Pekalongan Barat, Kota Pekalongan</h4>
                    <h4 style="font-size: 20px">Telp. : 0895-3846-53075</h4>
                    <b>Email : info@kasuwari.com, Website : www.kasuwari.com</b>
              </td>
         </tr>
        </table >
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

        @foreach ($data as $item)

        <div style="margin: 30px">
        <table  style="border-collapse: separate;
        border-spacing: 10px;">
            <tr style="margin:20px">
                <td style="padding-right: 20px">Nomor Rapat</td>
                <td style="padding-right: 10px">:</td>
                <td>{{$item->nomor}}</td>
            </tr>
            <tr>
                <td style="padding-right: 20px">Jenis Rapat</td>
                <td style="padding-right: 10px">:</td>
                <td>{{$item->type->name}}</td>
            </tr>
            <tr>
                <td style="padding-right: 20px">Nama Rapat</td>
                <td style="padding-right: 10px">:</td>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <td style="padding-right: 20px">Pemimpin Rapat</td>
                <td style="padding-right: 10px">:</td>
                <td>{{$item->pemimpin}}</td>
            </tr>
            <tr>
                <td style="padding-right: 20px">Notulen Rapat</td>
                <td style="padding-right: 10px">:</td>
                <td>{{$item->user->name}}</td>
            </tr>
            <tr>
                <td style="padding-right: 20px">Tanggal</td>
                <td style="padding-right: 10px">:</td>
                <td>{{$item->tanggal}}</td>
            </tr>
            <tr>
                <td style="padding-right: 20px">Jam</td>
                <td style="padding-right: 10px">:</td>
                <td>{{$item->waktu}}</td>
            </tr>
        </table>
    </div>

    <div style="color: black; margin-top: 30px" class="text-center" >
        <h5> <b>{{$item->name}}</b></h5>
    </div>

    <div style="margin: 50px; margin-bottom:10px; overflow:auto; height:13cm" data-spy="scroll" data-offset="0" >
        <p>{!! $item->notulen !!}</p>
    </div>

    @if (Auth::user()->role === 'notulen')
        
    <div style="margin:20px; margin-bottom:20px">
        &nbsp;<a href="/editrapat/{{$item->id}}"
            class="btn-sm btn-warning text-decoration-none">Edit</a>
        <form onsubmit="return confirmDelete(event)" class="d-inline"
            action="/hapusrapat/{{$item->id}}" method="POST">
            @csrf
            <button type="submit" class="btn-sm btn-danger text-decoration-none">Delete</button>
        </form>
        <a style="margin-left: 65%;" href="/rapat" class="btn bg-gray-500 text-gray-100">Kembali</a>
    </div>

    @elseif(Auth::user()->role === 'user')
    <a style="margin-left: 80%; margin-top:10px" href="/rapat" class="btn bg-gray-500 text-gray-100">Kembali</a>
    @endif

        
        @endforeach
        
    
   </div>
</div>
</div>


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



@endsection