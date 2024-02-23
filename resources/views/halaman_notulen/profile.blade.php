@extends('halaman_dashboard.index')
@extends('halaman_dashboard.navnotulen')


@section('main')

         
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

                 <!-- Basic Card Example -->
                 @foreach ($user as $item)
                 <div class="col-lg-6 mx-auto" style="padding-top: 50px">
                 <div class="card shadow mb-4  ">
                    <div class="card-header py-3 " >
                        <h6 class="m-0 font-weight-bold text-primary">User Profile</h6>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center text-center">
                            <div class=" text-center">
                                <div class="position-relative" style="width: 150px; height: 150px;">
                                    <img src="{{ asset('image/acounts') }}/{{ $item->gambar }}" alt="Image" style="width: 100%; height: 100%;" class="rounded-circle shadow p-3 mb-5" id="gambarPreview">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="font-weight-bold text-primary">
                        <table>
                                
                            <tr>
                                <th style="  padding: 20px; padding-right: 150px;"></th>
                                <td>Nama</td>
                                <td style="padding-left: 20px; padding-right: 20px">:</td>
                                <td>{{$item->name}}</td>
                            </tr>
                            <tr>
                                <th style="padding: 20px; padding-right: 150px;"></th>
                                <td>Nomor Hp</td>
                                <td style="padding-left: 20px; padding-right: 20px">:</td>
                                <td>{{$item->nohp}}</td>
                            </tr>
                            <tr>
                                <th style="padding: 20px; padding-right: 150px;"></th>
                                <td>Email</td>
                                <td style="padding-left: 20px; padding-right: 20px">:</td>
                                <td>{{$item->email}}</td>
                            </tr>

                        </table>
                    </div>
                    <div  style="padding: 20px; padding-top: 40px">
                    <a href="/editprofile/{{$item->id}}" class="btn btn-primary">Edit</a>
                    <a href="/usercontrol" class="btn bg-gray-500 text-gray-100">Kembali</a>
                </div>
                    </div>
                </div>
            </div>
  
                 @endforeach
                 

@endsection