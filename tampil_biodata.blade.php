<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Formulir Biodata Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ganti warna latar belakang body menjadi hijau */
        body {
            background-color: #87CEEB; /* Kode warna untuk biru langit*/
        }

        /* Ganti warna latar belakang header menjadi hijau neon */
        .card-header {
            background-color: #39FF14; /* Kode warna untuk hijau neon */
            color: #000000; /* Warna teks putih atau sesuai kebutuhan */
            text-align: center; /* Pusatkan teks */
            padding: 10px; /* Ruang di sekitar judul */
            border: 2px solid #0056b3; /* Kotak di sekitar judul */
            border-radius: 10px; /* Efek lengkungan pada kotak */
            font-family: 'Book Antiqua', sans-serif; /* Ganti font ke Book Antiqua */
        }

        .card-header h1 {
            font-size: 36px; /* Ukuran font */
            margin: 10px 0; /* Spasi atas dan bawah */
        }

        /* Ganti warna teks hasil inputan menjadi hijau muda samar */
        .card-body h5 {
            color: #000000; /* Kode warna untuk hijau muda (pale green) */
            font-family: 'Book Antiqua', sans-serif; /* Ganti font ke Book Antiqua */
        }
    </style>
</head>

<body>
    <div class="container mt-4">
      <div class="card">
        <div class="card-header">
            <h1>Biodata Mahasiswa</h1>
        </div>
        <div class="card-body">
          <h5>Nama Lengkap : {{ $send->fullname }}</h5>
          <h5>NIM : {{ $send->nim }}</h5>
          <h5>E-mail : {{ $send->email }}</h5>
          <h5>Jenis Kelamin : {{ $send->jeniskelamin }}</h5>
          <h5>Fakultas : {{ $send->fakultas }}</h5>
          <h5>Semester : {{ $send->semester }}</h5>
          <h5>Alamat : {{ $send->alamat }}</h5>
          <h5>Agama : {{ $send->agama }}</h5>
          <h5>Tanggal Lahir : {{ $send->tgllahir }}</h5>
          <h5>Hobi : {{ $send->hobi }}</h5>
        </div>
      </div>
    </div>
</body>
</html>
