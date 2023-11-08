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
            background-color: #007bff; /* Kode warna untuk biru (blue) */
            color: #fff; /* Warna teks putih */
            font-family: 'Arial Black', sans-serif; /* Ganti font ke Arial Black atau sans-serif */
        }

        /* Ganti warna background tombol submit menjadi hijau */
        .btn-primary {
            background-color: #007bff; /* Kode warna untuk hijau (green) */
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
      background-color: #98FB98; /* Warna latar belakang hijau (#00ff00) */
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
<div class="container mx-auto" style="max-width: 500px;">
    <h1 class="text-center mb-2">Selamat Datang Di Tugas Prognet Nanda</h1>
    <h2 class="text-center mb-2">Form Biodata Mahasiswa</h2>
    <h5 class="text-center mb-2">Silahkan Isi Data Anda Dengan Benar</h5>
    <form name="formBiodata" action="/mahasiswa" method="post" onsubmit="return validateForm()">
        @csrf
        <div class="form-group mb-3">
            <label><strong>Nama lengkap :</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label><strong>Jenis Kelamin :</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki'>Laki-Laki</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan'>Perempuan</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak ingin Memberi Tahu'>Lainnya</p>
        </div>
        <div class="form-group mb-3">
            <label><strong>Fakultas :</strong></label>
            <select name="fakultas" id="fakultas" class="form-control">
                <option selected>Pilih Fakultas</option>
                <option value="Fakultas Teknik">Fakultas Teknik</option>
                <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
                <option value="Fakultas Hukum">Fakultas Hukum</option>
                <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                <option value="Fakultas Peternakan">Fakultas Peternakan</option>
                <option value="Fakultas Matematikan dan Ilmu Pengetahuan Alam">S1 Fakultas Matematikan dan Ilmu Pengetahuan Alam</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label><strong>Semester :</strong></label>
            <select name="semester" id="semester" class="form-control">
                <option selected>Pilih Semester Anda Saat Ini :</option>
                <option value="Semester 1">Semester 1</option>
                <option value="Semester 2">Semester 2</option>
                <option value="Semester 3">Semester 3</option>
                <option value="Semester 4">Semester 4</option>
                <option value="Semester 5">Semester 5</option>
                <option value="Semester 6">Semester 6</option>
                <option value="Semester 7">Semester 7</option>
                <option value="Semester 8">Semester 8</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label><strong>Alamat :</strong></label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Anda">
        </div>
        <div class="form-group mb-3">
            <label><strong>Agama :</strong></label>
            <select name="agama" id="agama" class="form-control">
                <option selected>Pilih Agama Anda :</option>
                <option value="Hindu">Hindu</option>
                <option value="Islam">Islam</option>
                <option value="Kristem Khatolik">Kristen Khatolik</option>
                <option value="Kristem Protestan">Kristen Protestan</option>
                <option value="Budha">Budha</option>
                <option value="Kongucu">Kongucu</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" name="tgllahir" id="tgllahir" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi">
        </div>
        <div class="left-align">
    <button type="submit" name="submit" class="btn btn-primary mb-4" style="background-color: green; color: white;">Submit</button>
</div>

    </form>
</div>
<script>
    function validateForm() {
        // Validasi Nama Lengkap
        if (document.forms["formBiodata"]["fullname"].value == "") {
            alert("Masukkan Nama Lengkap Anda");
            document.forms["formBiodata"]["fullname"].focus();
            return false;
        }
        // Validasi NIM
        if (document.forms["formBiodata"]["nim"].value == "") {
            alert("Masukkan NIM Anda");
            document.forms["formBiodata"]["nim"].focus();
            return false;
        }
        // Validasi E-mail
        if (document.forms["formBiodata"]["email"].value == "") {
            alert("Masukkan E-mail Aktif Anda");
            document.forms["formBiodata"]["email"].focus();
            return false;
        }
        // Validasi Jenis Kelamin
        var jeniskelamin = document.getElementsByName('jeniskelamin');
        var genValue = false;
        for(var i=0; i<jeniskelamin.length;i++){
            if(jeniskelamin[i].checked == true){
                genValue = true;
            }
        }
        if(!genValue){
            alert("Pilih Jenis Kelamin Anda");
            return false;
        }
        // Validasi Fakultas
        if (document.forms["formBiodata"]["fakultas"].value == "") {
            alert("Masukkan Fakultas Anda");
            document.forms["formBiodata"]["fakultas"].focus();
            return false;
        }
        // Validasi Semester
        if (document.forms["formBiodata"]["semester"].value == "") {
            alert("Masukkan Semester Anda Saat Ini");
            document.forms["formBiodata"]["semester"].focus();
            return false;
        }
        // Validasi Alamat
        if (document.forms["formBiodata"]["alamat"].value == "") {
            alert("Masukkan Alamat Anda");
            document.forms["formBiodata"]["alamat"].focus();
            return false;
        }
        // Validasi Agama
        if (document.forms["formBiodata"]["agama"].value == "") {
            alert("Masukkan Agama Anda");
            document.forms["formBiodata"]["agama"].focus();
            return false;
        }
        // Validasi Tanggal Lahir
        if (document.forms["formBiodata"]["tgllahir"].value == "") {
            alert("Masukkan Tanggal Lahir Anda");
            document.forms["formBiodata"]["tgllahir"].focus();
            return false;
        }
        // Validasi Hobi
        if (document.forms["formBiodata"]["hobi"].value == "") {
            alert("Masukkan Hobi Anda");
            document.forms["formBiodata"]["hobi"].focus();
            return false;
        }
    }
</script>
</body>
</html>
