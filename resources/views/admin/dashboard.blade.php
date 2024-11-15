<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Welcome, Admin</h1>
    <nav>
        <a href="{{ route('admin.books.index') }}">Book Management</a> |
        <a href="{{ route('admin.logout') }}">Logout</a>
    </nav>
</body>
</html>
