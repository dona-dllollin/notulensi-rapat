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

            <h4 class="font-weight-bold mb-0 ml-5 d-inline">Data Rapat</h4>
            <div style="float: right">
                <a href="/tambahrapat" class="text-decoration-none text-white mr-5" ><button type="button"
                        class="btn btn-primary btn-icon-text btn-rounded d-inline" >
                        <i class="ti-plus btn-icon-prepend"></i>Tambah  Rapat
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