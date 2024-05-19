<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kepala Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Daftar Kepala Surat</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama KOP</th>
                    <th>Alamat KOP</th>
                    <th>Nama Tujuan</th>
                    <th>User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kepalaSurats as $surat)
                <tr>
                    <td>{{ $surat->nama_kop }}</td>
                    <td>{{ $surat->alamat_kop }}</td>
                    <td>{{ $surat->nama_tujuan }}</td>
                    <td>{{ $surat->id_user }}</td>
                    <td>
                        <a href="{{ route('kepala_surat.show', $surat->id_kop) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('kepala_surat.edit', $surat->id_kop) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kepala_surat.destroy', $surat->id_kop) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kepala surat ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('kepala_surat.create') }}" class="btn btn-primary mb-4">Tambah Kepala Surat</a>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('users.index') }}" class="btn btn-primary btn-lg btn-block mb-3">Kelola Pengguna</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('kepala_surat.index') }}"  class="btn btn-success btn-lg btn-block mb-3">Kelola Kepala Surat</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('surat_keluar.index') }}"  class="btn btn-info btn-lg btn-block mb-3">Kelola Surat Keluar</a>
            </div>
        </div>
    </div>
</body>

</html>