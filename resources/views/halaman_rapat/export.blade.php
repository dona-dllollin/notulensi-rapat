<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$tittle}}</title>


    
    <!-- Custom fonts for this template-->
    <link href="{{asset('halaman_dashboard/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('halaman_dashboard/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- link css tabel --}}
    <link rel="stylesheet" href="{{asset('halaman_dashboard/vendor/datatables/dataTables.bootstrap4.min.css')}}">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
            <table  style="margin-right: 20px; margin-left:20px; margin-top:0px">
                <tr>
                      <td style="padding-right: 25px; padding-bottom:5px"> 
                        <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/image/kasuwari.png'))) }}" alt="" style="width: 140px;">
                         </td>
                      <td style="text-align: center; font-family:'Times New Roman', Times, serif; padding-bottom:5px; padding-right:20px">
                            <h4 style="font-size: 16px">LKMS Kasuwari</h4>
                            <h4 style="font-size: 16px">Jl. Untungsuropati No. 43, Pekalongan Barat, Kota Pekalongan</h4>
                            <h4 style="font-size: 16px">Telp. : 0895-3846-53075</h4>
                            <b>Email : info@kasuwari.com, Website : www.kasuwari.com</b>
                      </td>
                 </tr>
                </table >
                <hr style="color: #0e0e0f;">
        
                
                <div style="margin: 30px">
                <table  style="border-collapse: separate;
                border-spacing: 10px;">
                    <tr style="margin:20px">
                        <td style="padding-right: 20px">Nomor Rapat</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$rapat->nomor}}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px">Jenis Rapat</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$jenis}}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px">Nama Rapat</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$rapat->name}}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px">Pemimpin Rapat</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$rapat->pemimpin}}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px">Notulen Rapat</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$notulen}}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px">Tanggal</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$rapat->tanggal}}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 20px">Jam</td>
                        <td style="padding-right: 10px">:</td>
                        <td>{{$rapat->waktu}}</td>
                    </tr>
                </table>
            </div>
        
            <div style="color: black; margin-top: 30px; text-align: center" class="text-center" >
                <h3> <b>{{$rapat->name}}</b></h3>
            </div>
        
            <div style="margin: 20px; margin-bottom:10px;" >
                <p>{!! $rapat->notulen !!}</p>
            </div>

          





</body>
</html>