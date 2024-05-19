<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Daftar Pengguna</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pengguna</th>
                    <th>Status</th>
                    <th>Nama Petugas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id_user }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->status }}</td>
                    <td>{{ $user->nama_ptgs }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id_user) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('users.edit', $user->id_user) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('users.destroy', $user->id_user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
    </div>
    <div class="container mt-4">
        <div class="row" >
            <div class="col-md-4">
                <a href="{{ route('users.index') }}"  class="btn btn-primary btn-lg btn-block mb-3">Kelola Pengguna</a>
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