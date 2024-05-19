<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kepala Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Detail Kepala Surat</h2>
        <div class="card shadow">
            <div class="card-body text-center">
                <h5 class="card-title text-primary">Nama KOP: {{ $kepalaSurat->nama_kop }}</h5>
                <p class="card-text">Alamat KOP: {{ $kepalaSurat->alamat_kop }}</p>
                <p class="card-text">Nama Tujuan: {{ $kepalaSurat->nama_tujuan }}</p>
                <p class="card-text">User: {{ $kepalaSurat->id_users }}</p>
            </div>
        </div>
        <a href="{{ route('kepala_surat.index') }}" class="btn btn-secondary mt-3 float-right">Kembali</a>
    </div>
</body>

</html>