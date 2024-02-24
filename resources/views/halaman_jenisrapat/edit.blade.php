@extends('halaman_dashboard.index')
@extends('halaman_dashboard.navnotulen')


@section('main')
<div class="col-lg-6 mx-auto" style="padding-top: 50px">
    <div class="card shadow mb-4  ">
       <div class="card-header py-3 " >
           <h6 class="m-0 font-weight-bold text-primary">Edit Jenis Rapat</h6>
       </div>
       <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @foreach ($jenis as $item)
                    <form class="forms-sample" method="POST" action="/edit/type" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        
                      
                        <div class="form-group">
                            <label for="nama">Nama Jenis Rapat</label>
                            <input type="text" class="form-control" id="nama"
                                name="name" value="{{ $item->name }}">
                        </div>
                         
                        

                        
                        <button type="submit" class="btn btn-primary me-2">Edit</button>
                        <a href="/type" class="btn bg-gray-500 text-gray-100">Kembali</a>
                    </form>
                @endforeach
            </div>
        </div>
    </div>


   
@endsection

   