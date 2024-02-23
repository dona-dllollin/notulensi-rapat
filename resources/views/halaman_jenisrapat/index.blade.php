@extends('halaman_dashboard.index')
@extends('halaman_dashboard.navnotulen')

@section('main')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
               
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}

            <h4 class="font-weight-bold mb-0 ml-5 d-inline">Data User</h4>
            <div style="float: right">
                <a href="/tambahuc" class="text-decoration-none text-white mr-5"><button type="button"
                        class="btn btn-primary btn-icon-text btn-rounded d-inline">
                        <i class="ti-plus btn-icon-prepend"></i>Tambah
                        User
                    </button></a>
            </div>

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
                                        &nbsp;<a href="/edituser/{{$item->id}}"
                                            class="btn btn-warning text-decoration-none" style="margin-right:10px ">Edit</a>

                                            
                                        <form onsubmit="return confirmDelete(event)" class="d-inline"
                                            action="/hapususer/{{$item->id}}" method="POST">
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