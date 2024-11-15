<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manajemen Pustakawan</title>
</head>
<body>
    <h1>Daftar Pustakawan</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('admin.createLibrarian') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="name" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Tambah Pustakawan</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($librarians as $librarian)
                <tr>
                    <td>{{ $librarian->name }}</td>
                    <td>{{ $librarian->email }}</td>
                    <td>{{ $librarian->is_active ? 'Aktif' : 'Nonaktif' }}</td>
                    <td>
                        <form action="{{ route('admin.removeLibrarian', $librarian->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        <form action="{{ route('admin.toggleLibrarianStatus', $librarian->id) }}" method="POST">
                            @csrf
                            <button type="submit">{{ $librarian->is_active ? 'Nonaktifkan' : 'Aktifkan' }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
