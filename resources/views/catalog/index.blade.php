<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Catalog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4faff;
            color: #333;
        }
        h1 {
            background-color: #64A0D9;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            background-color: #97CFF1;
            color: #fff;
            padding: 10px;
            font-size: 18px;
            margin-top: 20px;
            border-radius: 8px;
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        form {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 10px 0;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        select {
            padding: 8px 12px;
            margin-left: 8px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }
        select:focus {
            border-color: #64A0D9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
            color: #555;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #edf6fb;
            color: #333;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #eaf4fd;
        }
        button {
            padding: 10px 20px;
            background-color: #64A0D9;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #5092c4;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const categorySelect = document.getElementById("category");
            const sortSelect = document.getElementById("sort");

            categorySelect.addEventListener("change", function () {
                this.form.submit();
            });

            sortSelect.addEventListener("change", function () {
                this.form.submit();
            });
        });
    </script>
</head>
<body>
    <h1>Library Catalog</h1>
    <div class="container">
        <form method="GET" action="{{ route('catalog.index') }}">
            <div>
                <label for="category">Category:</label>
                <select name="category" id="category">
                    <option value="all" {{ $selectedCategory === 'all' ? 'selected' : '' }}>All Categories</option>
                    <option value="books" {{ $selectedCategory === 'books' ? 'selected' : '' }}>Books</option>
                    <option value="journals" {{ $selectedCategory === 'journals' ? 'selected' : '' }}>Journals</option>
                    <option value="cds" {{ $selectedCategory === 'cds' ? 'selected' : '' }}>CD</option>
                    <option value="newspapers" {{ $selectedCategory === 'newspapers' ? 'selected' : '' }}>Newspapers</option>
                    <option value="final_year_projects" {{ $selectedCategory === 'final_year_projects' ? 'selected' : '' }}>Final Year Projects</option>
                </select>
            </div>
            <div>
                <label for="sort">Sorting:</label>
                <select name="sort" id="sort">
                    <option value="asc" {{ $selectedSort === 'asc' ? 'selected' : '' }}>Ascending</option>
                    <option value="desc" {{ $selectedSort === 'desc' ? 'selected' : '' }}>Descending</option>
                </select>
            </div>
        </form>

        <div style="text-align: right; margin-top: 10px;">
            <a href="{{ route('admin.login') }}">
                <button>Login sebagai Admin</button>
            </a>
        </div>

        @if ($selectedCategory === 'all' || $selectedCategory === 'books')
            <h2>Books</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->pengarang }}</td>
                            <td>{{ $book->tahunTerbit }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($selectedCategory === 'all' || $selectedCategory === 'journals')
            <h2>Journals</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($journals as $journal)
                        <tr>
                            <td>{{ $journal->judul }}</td>
                            <td>{{ $journal->penulis }}</td>
                            <td>{{ $journal->tahunTerbit }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($selectedCategory === 'all' || $selectedCategory === 'cds')
            <h2>CD</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cds as $cd)
                        <tr>
                            <td>{{ $cd->judul }}</td>
                            <td>{{ $cd->pengarang }}</td>
                            <td>{{ $cd->penerbit }}</td>
                            <td>{{ $cd->genre }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($selectedCategory === 'all' || $selectedCategory === 'newspapers')
            <h2>Newspapers</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penerbit</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newspapers as $newspaper)
                        <tr>
                            <td>{{ $newspaper->judul }}</td>
                            <td>{{ $newspaper->penerbit }}</td>
                            <td>{{ $newspaper->tanggal }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if ($selectedCategory === 'all' || $selectedCategory === 'final_year_projects')
            <h2>Final Year Projects</h2>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Dosen Pembimbing</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($final_year_projects as $fyp)
                        <tr>
                            <td>{{ $fyp->judul }}</td>
                            <td>{{ $fyp->nama_mhs }}</td>
                            <td>{{ $fyp->NIM }}</td>
                            <td>{{ $fyp->dosen_pembimbing }}</td>
                            <td>{{ $fyp->date }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>
</body>
</html>
