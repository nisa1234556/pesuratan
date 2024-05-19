<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kepala Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Tambah Kepala Surat</h2>
        <form action="{{ route('kepala_surat.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_kop">Nama KOP:</label>
                <input type="text" class="form-control" id="nama_kop" name="nama_kop" required>
            </div>
            <div class="form-group">
                <label for="alamat_kop">Alamat KOP:</label>
                <textarea class="form-control" id="alamat_kop" name="alamat_kop" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="nama_tujuan">Nama Tujuan:</label>
                <input type="text" class="form-control" id="nama_tujuan" name="nama_tujuan" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>