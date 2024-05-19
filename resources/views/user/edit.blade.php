<!-- resources/views/users/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Edit User</h1>
        <form action="{{ route('users.update', $user->id_user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" class="form-control" value="{{ $user->status }}" required>
            </div>
            <div class="form-group">
                <label for="nama_ptgs">Nama Ptgs:</label>
                <input type="text" name="nama_ptgs" class="form-control" value="{{ $user->nama_ptgs }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</body>
</html>
