<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('halaman_dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('halaman_dashboard/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><img src="{{asset('halaman_dashboard/isso.png')}}" style="width: 70%; margin-top:20%; margin-left:20%" alt=""></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                            </div>

                            <form action="{{route('registrasi')}}" class="user"  method="POST" enctype="multipart/form-data">
                                @csrf
                                		
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $item)
                                            <li>{{$item}}</li>
                                                
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                @endif
                                @if (Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <ul>
                                        <li>{{Session::get('success')}}</li>
                                                
                                        </ul>
                                    </div>
                                    
                                @endif

                                <div class="form-group">
                                 
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama"
                                            placeholder="Nama">
                                </div>

                                <div class="form-group">
                                 
                                        <input type="text" class="form-control form-control-user" id="nohp" name="nohp"
                                            placeholder="Nomor HP">
                                    
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Email Address">
                                </div>
                               
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password"
                                        placeholder="Password">
                                </div>
                                <div  class="form-group">
                                    <input class="input100" type="file" name="gambar" id="gambar">
                                    
                                </div>
                            
                             
                                <div class="form-group">
                                    <button class="btn btn-primary btn-user btn-block" type="submit">
                                        Buat Akun
                                    </button>
                                </div>
                          
                            </form>
                            
                            <div class="text-center">
                                <a class="small" href="{{route('auth')}}">Sudah Punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('halaman_dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('halaman_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('halaman_dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('halaman_dashboard/js/sb-admin-2.min.js')}}"></script>

</body>

</html>