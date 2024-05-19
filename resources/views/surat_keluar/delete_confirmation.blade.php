<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Penghapusan Kepala Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Konfirmasi Penghapusan Kepala Surat</h2>
        <p>Anda yakin ingin menghapus kepala surat ini?</p>
        <form action="{{ route('kepala_surat.destroy', $kepalaSurat->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            <a href="{{ route('kepala_surat.index') }}" class="btn btn-secondary">Tidak</a>
        </form>
    </div>
</body>

</html>