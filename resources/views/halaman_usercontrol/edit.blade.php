@extends('halaman_dashboard.index')
@extends('halaman_dashboard.navnotulen')


@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit user</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @foreach ($user as $item)
                    <form class="forms-sample" method="POST" action="/edituser" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <div class="mb-3 text-center">
                            <div class="row justify-content-center text-center">
                                <div class=" text-center">
                                    <div class="position-relative" style="width: 150px; height: 150px;">
                                        <img src="{{ asset('image/acounts') }}/{{ $item->gambar }}" alt="Image" style="width: 100%; height: 100%;" class="rounded-circle shadow p-3 mb-5" id="gambarPreview">
                                        <label for="gambar">
                                        <i class="fas fa-camera fa-2x text-primary position-absolute" style="bottom: 0; right: 0; margin: 8px;"></i>
                                        <input class="form-control" type="file" id="gambar" name="gambar"  style="opacity: 0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;" onchange="previewImage(this)">
                                    </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                      
                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" class="form-control" id="nama"
                                name="name" value="{{ $item->name }}">
                        </div>
                        <div class="form-group">
                        <label for="nama">Nomor Hp</label>
                        <input type="text" class="form-control" name="nohp" value="{{$item->nohp}} ">
                    </div>
               
                            
                        <div>
                        <label>
                            <input type="radio" name="role" value="notulen" {{ $item->role === 'notulen' ? 'checked' : 'checked' }}> Notulen
                        </label>
                        <label>
                            <input type="radio" name="role" value="user" {{ $item->role === 'user' ? 'checked' : 'checked' }}> User
                        </label>
                        </div>
                       
                    
  
                        

                        
                        <button type="submit" class="btn btn-primary me-2">Edit</button>
                        <a href="/usercontrol" class="btn btn-light">Kembali</a>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            var preview = document.getElementById('gambarPreview');
            var file = input.files[0];
            var reader = new FileReader();
    
            reader.onloadend = function () {
                preview.src = reader.result;
            }
    
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "{{ asset('image/acounts') }}/{{ $item->gambar }}";
            }
        }
    </script>
@endsection