@extends('halaman_dashboard.index')

@extends('halaman_dashboard.navnotulen')



@section('main')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit data Rapat</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                        
                <form class="forms-sample" method="POST" action="/editrapat" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="form-group">
                        <label for="nama">Nomor Rapat</label>
                        <input type="text" class="form-control" id="nomor" 
                            name="nomor" value="{{$data->nomor}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Rapat</label>
                        <select class="form-control" name="jenis" id="jenis" style="width: 100%" required>
                            <option value="{{$data->id}}">{{$data->type->name}}</option>     
                            @foreach ($type as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>     
                            @endforeach
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="nama">Nama Rapat</label>
                        <input type="text" class="form-control" id="name" value="{{$data->name}}"
                            name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Pemimpin Rapat</label>
                        <input type="text" class="form-control" id="pemimpin" value="{{$data->pemimpin}}"
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
                        <input type="date" class="form-control" id="tanggal"  value="{{$data->tanggal}}" name="tanggal">
                        </div>
                    
                    <div class="col-sm-6">
                        <label for="angkatan">Waktu</label>
                        <input type="time" class="form-control" id="waktu" value="{{$data->waktu}}" name="waktu"
                          >
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Notulensi Rapat</label>
                        
                        <textarea  class="form-control" name="notulensi" id="editor"> {{$data->notulen}}
                        </textarea>  
                    </div>
                    <button type="submit" class="btn btn-primary me-2">edit</button>
                    <a href="/detail/rapat/{{$data->id}}" class="btn bg-gray-500 text-gray-100">Kembali</a>
                </form>

            </div>
        </div>
    </div>


    

  
@endsection


    
 

