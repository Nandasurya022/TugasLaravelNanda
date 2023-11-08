<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Ganti font teks menjadi "Book Antiqua" */
        body {
            font-family: 'Book Antiqua', serif;
        }

        /* Ganti latar belakang tabel menjadi warna putih */
        table {
            background-color: #fff;
            margin: 0 auto; /* Posisikan tabel di tengah */
            width: 80%; /* Lebar tabel 80% dari lebar layar */
            border-collapse: collapse; /* Gabungkan batas sel untuk menghindari celah */
            width: 100%; /* Lebar tabel 100% */
        }

        /* Ganti warna latar belakang body menjadi hijau */
        body {
            background-color: #98FB98; /* Kode warna untuk hijau (green) */
        }

        /* Ganti warna tombol "New Data" menjadi hijau terang */
        .badge-new {
            background-color: #5cb85c; /* Kode warna hijau terang */
        }

        /* Ganti warna tombol "Edit" menjadi hijau */
        .btn-edit {
            background-color: #5bc0de; /* Kode warna hijau */
        }

        /* Ganti warna tombol "Delete" menjadi merah */
        .badge-delete {
            background-color: #d9534f; /* Kode warna merah */
        }

        /* Atur tata letak tombol "New Data" di kiri */
        .btn-new-container {
            text-align: left;
            margin-top: 20px;
            margin-left: 20px; /* Margin kiri agar tombol tidak terlalu dekat dengan tepi layar */
        }

        /* Tengahkan teks "List Biodata Mahasiswa" */
        .center-text {
            text-align: center;
            color: black; /* Menambahkan warna teks hitam di sini */
        }

        /* Tambahkan jarak antara baris data dalam tabel */
        table th, table td {
            padding: 10px; /* Padding pada sel tabel */
        }

        /* Ganti warna latar belakang navbar menjadi hijau */
        #header {
            background-color: #98FB98; /* Warna latar belakang hijau (#98FB98) */
            color: #fff; /* Warna teks header (putih) */
            padding: 20px 0; /* Padding atas dan bawah header */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efek bayangan (shadow) pada header */
        }

        #header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #header .logo {
            font-size: 24px; /* Ukuran font logo */
            font-weight: 600; /* Ketebalan font logo */
            text-transform: uppercase; /* Mengubah teks menjadi huruf kapital */
        }

        #header nav ul {
            list-style: none; /* Menghapus tanda bullet pada daftar menu */
            margin: 0;
            padding: 0;
            display: flex; /* Mengatur menu dalam satu baris */
        }

        #header nav ul li {
            margin-right: 20px; /* Margin antara menu */
        }

        #header nav a {
            text-decoration: none; /* Menghapus dekorasi tautan (underline) */
            color: #000000; /* Warna teks menu (hitam) */
            transition: color 0.3s; /* Efek transisi ketika warna teks menu berubah */
        }

        #header nav a:hover {
            color: #007bff; /* Warna teks menu saat dihover (biru) */
        }
    </style>
    <title>Your Website</title>
</head>
<body>
  <header id="header">
    <div class="container">
      <div class="logo"><a href="/">Nanda Surya</a></div>
      <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/mahasiswa">Tugas</a></li>
        </ul>
      </nav>
    </div>
  </header>
    <div id="form" class="form-mf sect-pt4 route mt-4 mb-4">
        <div class="container mt-5">
            <h1 class="center-text mb-5">List Biodata Mahasiswa</h1>
            <div class="btn-new-container">
                <form action="/mahasiswa/create" method="get">
                    <button class="badge bg-success border-0 badge-new" type="submit">New Data</button>
                </form>
            </div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Fakultas</th>
                        <th>Semester</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Tanggal Lahir</th>
                        <th>Hobi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->fullname }}</td>
                        <td>{{ $mahasiswa->nim }}</td>
                        <td>{{ $mahasiswa->email }}</td>
                        <td>{{ $mahasiswa->jeniskelamin }}</td>
                        <td>{{ $mahasiswa->fakultas }}</td>
                        <td>{{ $mahasiswa->semester }}</td>
                        <td>{{ $mahasiswa->alamat }}</td>
                        <td>{{ $mahasiswa->agama }}</td>
                        <td>{{ $mahasiswa->tgllahir }}</td>
                        <td>{{ $mahasiswa->hobi }}</td>
                        <td>
                            <form action="/mahasiswa/{{ $mahasiswa->id }}/edit" method="GET">
                                <button class="btn btn-success badge border-0 btn-edit">Edit</button>
                            </form>
                            <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0 badge-delete" onclick="return confirm('Apa Anda yakin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
