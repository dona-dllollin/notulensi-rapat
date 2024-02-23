<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Akun Anda</title>
</head>
<body>
    <p>
        Halo <b>{{$pesan['nama']}}</b>

    </p>

    <p>

        Berikut ini adalah data anda :
    </p>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$pesan['nama']}}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td>{{$pesan['role']}}</td>
        </tr>
        <tr>
            <td>website</td>
            <td>:</td>
            <td>{{$pesan['website']}}</td>
        </tr>
        <tr>
            <td>Tanggal Register</td>
            <td>:</td>
            <td>{{$pesan['datetime']}}</td>
        </tr>
        <br><br><br>
        <center>
            <h3>Klcik di bawah untuk verifikasi akun anda :</h3>
            <a href="{{$pesan['url']}}" style="text-decoration: none; color:rgb(255, 255, 255); padding: 9px; background-color: blue;font: bold; border-radius: 20%;">Verifikasi</a>
            <br><br><br>
            <p>
                Copy Right @ 2024 | ISSO
            </p>
        </center>
    </table>
</body>
</html>