<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Surat Keluar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Daftar Surat Keluar</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No. Surat</th>
                    <th>Perihal</th>
                    <th>Tujuan</th>
                    <th>Isi Surat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suratKeluar as $surat)
                <tr>
                    <td>{{ $surat->no_surat }}</td>
                    <td>{{ $surat->perihal }}</td>
                    <td>{{ $surat->tujuan }}</td>
                    <td>{{ $surat->isi_surat }}</td>
                    <td>
                        <a href="{{ route('surat_keluar.show', $surat->id_kops) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('surat_keluar.edit', $surat->id_kops) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('surat_keluar.destroy', $surat->id_kops) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus surat keluar ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('surat_keluar.create') }}" class="btn btn-primary mb-4">Tambah Surat Keluar</a>
    </div>
    <div class="container mt-4">
        <div class="row" >
            <div class="col-md-4">
                <a href="{{ route('users.index') }}"  class="btn btn-primary btn-lg btn-block mb-3">Kelola Pengguna</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('kepala_surat.index') }}" class="btn btn-success btn-lg btn-block mb-3">Kelola Kepala Surat</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('surat_keluar.index') }}"  class="btn btn-info btn-lg btn-block mb-3">Kelola Surat Keluar</a>
            </div>
        </div>
    </div>
</body>

</html>