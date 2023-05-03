<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid mt-3">
    <table class="table table-hover table-bordered">
        <tr class="table-dark">
            <td>id</td>
            <td>Judul Buku</td>
            <td>Penulis</td>
            <td>Harga</td>
            <td>Tanggal Terbit</td>
            <td>Aksi</td>
        </tr>

        @foreach ($data_buku as $buku)
            <tr>
                <td>{{$buku->id}}</td>
                <td>{{$buku->judul}}</td>
                <td>{{$buku->penulis}}</td>
                <td>{{ "Rp".number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{$buku->tgl_terbit}}</td>
                <td>
                    <a href="{{route('buku.destroy',$buku->id)}}" class="btn btn-danger">Hapus</a>
                    <a href="{{route('buku.edit',$buku->id)}}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <p><a href="{{ route('buku.create') }}" class="btn btn-primary mx-5">Tambah Buku</a></p>
    <h5 class="mx-5">Jumlah Buku :{{$data_buku->count('id')}}</h5>
    <p class="mx-5">Total harga buku : {{ "Rp. ".number_format($data_buku->sum('harga')) }}</p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>