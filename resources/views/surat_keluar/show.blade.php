<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kepala Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Detail Kepala Surat</h2>
        <p><strong>Nama KOP:</strong> {{ $kepalaSurat->nama_kop }}</p>
        <p><strong>Alamat KOP:</strong> {{ $kepalaSurat->alamat_kop }}</p>
        <p><strong>Nama Tujuan:</strong> {{ $kepalaSurat->nama_tujuan }}</p>
        <p><strong>User:</strong> {{ $kepalaSurat->user->username }}</p>
        <a href="{{ route('kepala_surat.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
