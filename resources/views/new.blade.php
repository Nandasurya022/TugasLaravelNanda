<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Laravel Form Biodata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ganti warna latar belakang body menjadi biru */
        body {
            background-color: #007bff; /* Kode warna untuk biru (blue) */
            color: #fff; /* Warna teks putih */
            font-family: 'Book Antiqua', sans-serif; /* Ganti font ke Book Antiqua atau sans-serif */
        }

        /* Gaya CSS untuk mengatur posisi form input ke kiri */
        .form-container {
            max-width: 500px; /* Lebar maksimal form */
            margin: 0 auto; /* Pusatkan form dalam container */
        }

        /* Gaya CSS untuk mengatur label dan input ke kiri */
        .form-group {
            text-align: left;
        }

        /* Gaya CSS untuk mengatur judul berada di tengah-tengah */
        .form-title {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container mx-auto form-container">
    <h1 class="form-title">Selamat Datang Di Tugas Prognet Nanda</h1>
    <h2 class="form-title">Form Biodata Mahasiswa</h2>
    <h5 class="form-title">Silahkan Isi Data Anda Dengan Benar</h5>
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
                <option value="Fakultas Matematikan dan Ilmu Pengetahuan Alam">S1 Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
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
