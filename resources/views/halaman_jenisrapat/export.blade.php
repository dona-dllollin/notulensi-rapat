<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="table-responsive">
        <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    Nomor
                                </th>
                                <th>
                                    Nama Jenis Rapat
                                </th>
                                <th style="text-align: center">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                       
                        <tbody>
                                @foreach ($jenis as $item)
                                <tr>
                                <td>
                                    {{ $i++ }}
                                </td>
                              
                                <td>{{ $item->name }}</td>
                                    <td style="text-align:center " >
                                        &nbsp;<a href="/edit/type/{{$item->id}}"
                                            class="btn btn-warning text-decoration-none" style="margin-right:10px" >Edit</a>
                                            
                                        <form onsubmit="return confirmDelete(event)" class="d-inline"
                                            action="/hapus/type/{{$item->id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                            
                                </td>
                            </tr>
                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</body>
</html>