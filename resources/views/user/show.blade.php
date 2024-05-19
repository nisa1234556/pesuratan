<!-- resources/views/users/show.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>View User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-4">View User</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Username:</h5>
                <p class="card-text">{{ $user->username }}</p>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Status:</h5>
                <p class="card-text">{{ $user->status }}</p>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Nama Petugas:</h5>
                <p class="card-text">{{ $user->nama_ptgs }}</p>
            </div>
        </div>
        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-4">Back</a>
    </div>
</body>

</html>
