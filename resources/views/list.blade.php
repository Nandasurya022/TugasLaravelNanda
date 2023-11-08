<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Laravel Form Biodata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ganti warna latar belakang body menjadi biru */
        body {
            background-color: #98FB98; /* Kode warna untuk biru (blue) */
            color: #fff; /* Warna teks putih */
            font-family: 'Arial Black', sans-serif; /* Ganti font ke Arial Black atau sans-serif */
        }

        /* Ganti warna background tombol submit menjadi hijau */
        .btn-primary {
            background-color: #28a745; /* Kode warna untuk hijau (green) */
        }

        /* Gaya CSS untuk mengatur posisi tombol submit ke kiri */
        .left-align {
            text-align: left;
        }
    </style>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* CSS for the Header */
    #header {
      background-color: #ADD8E6; /* Warna latar belakang hijau (#00ff00) */
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
      color: #000000; /* Warna teks menu (putih) */
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
<body>
<!-- ======= Start Hasil Form ======= -->
<div id="form" class="form-mf sect-pt4 route mt-4 mb-4">
    <div class="container mt-5">
        <h1 class="text-center mb-5" style="color: black;">List Biodata Mahasiswa</h1> <!-- Menambahkan warna teks hitam di sini -->
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
        <form action="/mahasiswa/create" method="get">
          <button class="badge bg-success border-0 mb-2" type="submit">New Data</button>
        </form>
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
              <button class="btn btn-success badge border-0">Edit</button>
              </form>
              <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apa Anda yakin menghapus data ini?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
  <!-- ======= End Hasil Form ======= -->
</body>
</html>
