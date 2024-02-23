@extends('halaman_dashboard.index')
@extends('halaman_dashboard.navnotulen')

@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah User</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="/tambahuc" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda"
                            name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nomor HP</label>
                        <input type="text" class="form-control" id="nohp" placeholder="Masukkan nama Anda"
                            name="nohp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Alamat Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"
                            name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password"
                            name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/usercontrol" class="btn bg-gray-500 text-gray-100">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection