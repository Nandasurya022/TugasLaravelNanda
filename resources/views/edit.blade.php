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
            font-family: 'Book Antiqua', sans-serif; /* Ganti font ke Arial Black atau sans-serif */
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

<body>
<div class="container mx-auto" style="max-width: 500px;">
    <h1 class="text-center mb-2">Selamat Datang Di Tugas Prognet Nanda</h1>
    <h2 class="text-center mb-2">Form Biodata Mahasiswa</h2>
    <h5 class="text-center mb-2">Silahkan Isi Data Anda Dengan Benar</h5>
    <form name="formBiodata" action="/mahasiswa/{{ $mahasiswa->id }}" method="post" onsubmit="return validateForm()">
        @csrf
        @method('put')
        <div class="form-group mb-3">
            <label><strong>Nama lengkap :</strong></label>
            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control" value="{{ $mahasiswa->fullname }}">
        </div>
        <div class="form-group mb-3">
            <label><strong>NIM :</strong></label>
            <input type="text" name="nim" id="nim" placeholder="NIM" class="form-control" value="{{ $mahasiswa->nim }}">
        </div>
        <div class="form-group mb-3">
            <label><strong>Email :</strong></label>
            <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control" value="{{ $mahasiswa->email }}">
        </div>
        <div class="form-group mb-3">
            <label><strong>Jenis Kelamin :</strong></label>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Laki - Laki' @if ($mahasiswa->jeniskelamin=='Laki - Laki'){{ "checked" }} @endif >Laki-Laki</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Perempuan' @if ($mahasiswa->jeniskelamin=='Perempuan'){{ "checked" }} @endif >Perempuan</p>
            <p><input class="me-1" type='radio' name='jeniskelamin' id="jeniskelamin" value='Tidak ingin Memberi Tahu' @if ($mahasiswa->jeniskelamin=='Tidak Ingin Memberi Tahu'){{ "checked" }} @endif>Lainnya</p>
        </div>
        <div class="form-group mb-3">
            <label><strong>Fakultas :</strong></label>
            <select name="fakultas" id="fakultas" class="form-control">
                <option selected>Pilih Fakultas</option>
                <option value="Fakultas Teknik" @if ($mahasiswa->fakultas=='Fakultas Teknik'){{ "selected" }} @endif>Fakultas Teknik</option>
                <option value="Fakultas Ekonomi dan Bisnis" @if ($mahasiswa->fakultas=='Fakultas Ekonomi dan Bisnis'){{ "selected" }} @endif>Fakultas Ekonomi dan Bisnis</option>
                <option value="Fakultas Kedokteran" @if ($mahasiswa->fakultas=='Fakultas Kedokteran'){{ "selected" }} @endif>Fakultas Kedokteran</option>
                <option value="Fakultas Hukum" @if ($mahasiswa->fakultas=='Fakultas Hukum'){{ "selected" }} @endif>Fakultas Hukum</option>
                <option value="Fakultas Pertanian" @if ($mahasiswa->fakultas=='Fakultas Pertanian'){{ "selected" }} @endif>Fakultas Pertanian</option>
                <option value="Fakultas Peternakan" @if ($mahasiswa->fakultas=='Fakultas Peternakan'){{ "selected" }} @endif>Fakultas Peternakan</option>
                <option value="Fakultas Matematikan dan Ilmu Pengetahuan Alam" @if ($mahasiswa->fakultas=='Fakultas Matematika dan Ilmu Pengetahuan Alam'){{ "selected" }} @endif>Fakultas Matematikan dan Ilmu Pengetahuan Alam</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label><strong>Semester :</strong></label>
            <select name="semester" id="semester" class="form-control">
                <option selected>Pilih Semester Anda Saat Ini</option>
                <option value="Semester 1" @if ($mahasiswa->semester=='Semester 1'){{ "selected" }} @endif>Semester 1</option>
                <option value="Semester 2" @if ($mahasiswa->semester=='Semester 2'){{ "selected" }} @endif>Semester 2</option>
                <option value="Semester 3" @if ($mahasiswa->semester=='Semester 3'){{ "selected" }} @endif>Semester 3</option>
                <option value="Semester 4" @if ($mahasiswa->semester=='Semester 4'){{ "selected" }} @endif>Semester 4</option>
                <option value="Semester 5" @if ($mahasiswa->semester=='Semester 5'){{ "selected" }} @endif>Semester 5</option>
                <option value="Semester 6" @if ($mahasiswa->semester=='Semester 6'){{ "selected" }} @endif>Semester 6</option>
                <option value="Semester 7" @if ($mahasiswa->semester=='Semester 7'){{ "selected" }} @endif>Semester 7</option>
                <option value="Semester 8" @if ($mahasiswa->semester=='Semester 8'){{ "selected" }} @endif>Semester 8</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label><strong>Alamat :</strong></label>
            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat Anda" value="{{ $mahasiswa->alamat }}">
        </div>
        <div class="form-group mb-3">
            <label><strong>Agama :</strong></label>
            <select name="agama" id="agama" class="form-control">
            <option value="Hindu" @if ($mahasiswa->agama=='Hindu'){{ "selected" }} @endif >Hindu</option>
            <option value="Islam" @if ($mahasiswa->agama=='Islam'){{ "selected" }} @endif >Islam</option>
            <option value="Kristem Khatolik" @if ($mahasiswa->agama=='Kristen Khatolik'){{ "selected" }} @endif >Kristen Khatolik</option>
            <option value="Kristem Protestan" @if ($mahasiswa->agama=='Kristen Protestan'){{ "selected" }} @endif >Kristen Protestan</option>
            <option value="Budha" @if ($mahasiswa->agama=='Budha'){{ "selected" }} @endif >Budha</option>
            <option value="Kongucu" @if ($mahasiswa->agama=='Kongucu'){{ "selected" }} @endif >Kongucu</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label><strong>Tanggal Lahir :</strong></label>
            <input type="date" name="tgllahir" id="tgllahir" class="form-control" value="{{ $mahasiswa->tgllahir }}">
        </div>
        <div class="form-group mb-3">
            <label><strong>Hobi :</strong></label>
            <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Hobi" value="{{ $mahasiswa->hobi }}">
        </div>
        <div class="left-align">
            <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
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
