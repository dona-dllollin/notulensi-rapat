@extends('halaman_dashboard.index')
@extends('halaman_dashboard.navnotulen')

@section('main')
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

    <div style="margin: 50px; overflow:auto; height:15cm" data-spy="scroll" data-offset="0" >
        <p>{{$item->notulen}}</p>
    </div>
        
        @endforeach
        
    
   </div>
</div>
</div>




@endsection