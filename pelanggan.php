<?php
if (isset($_POST['save'])) {

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobil</title>
</head>
<body background="img/a.jpg">
<form action="" method="post">
<link rel="stylesheet" href="index.css" media="screen" title="no title">
    <link rel="stylesheet" href="mobil.css">
<h1>PILIH - MOBIL</H1>
<ul>
      <li><a class="active" href="beranda.php">Beranda</a>
      <a href="mobil.php">Mobil</a>
      <a href="home.php">Logout</a>
      <a href="Pelanggan.php">Pelanggan</a>
    </li>
</ul>
<br>
<section class="portofolio" id="portofolio">
        <div class="container">
            <div class="row">


                <tr>
                    <td><h2>ID Pelanggan</h2>
                    <select name="id_pelanggan">
                    <option name="id_pelanggan">ID Pelanggan
                    <option name="id_pelanggan">1
                    <option name="id_pelanggan">2
                    <option name="id_pelanggan">3
                    <option name="id_pelanggan">4
                    <option name="id_pelanggan">5

                    </select>
                    </td>
                </tr>
                <hr>
                <tr>
                    <td><h2>NO KTP</h2>
                    <select name="no_ktp">
                    <option name="no_ktp">NO KTP
                    <option name="no_ktp">AB1234
                    <option name="no_ktp">BA4321
                    <option name="no_ktp">CB2341
                    <option name="no_ktp">BC3241
                    </select>
                    </td>
                </tr>
                <hr>
                <tr>
                    <td><h2>Nama</h2>
                    <select name="nama">
                    <option name="nama">Nikita
                    <option name="nama">Nasywa
                    <option name="nama">Priyadi
                    <option name="nama">Farid
                    </select>
                    </td>
                </tr>
                <hr>
                <tr>
                    <td><h2>alamat</h2>
                    <select name="alamat">
                    <option name="alamat">Alamat
                    <option name="alamat">Jl.Bojong Koneng
                    <option name="alamat">Jl.Cangkuang Kulon
                    <option name="alamat">Jl.Sayati
                    <option name="alamat">Jl.Kopo
                    </select>
                    </td>
                <tr>
                    <td><h2>No Telepon</h2>
                    <select name="no_telepon">
                    <option name="no_telepon">No Telepon
                    <option name="no_telepon">089736213
                    <option name="no_telepon">088291384
                    <option name="no_telepon">085271923
                    <option name="no_telepon">088223810
                    </select>
                    </td>
                </tr>
                <hr>
                <br>
                <br>
                <input type="submit" name="save" value="Save" >
            </button>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $id = $_POST['id_pelanggan'];
    $noktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['no_telepon'];

    echo "ID pelanggan : $id";
    echo "<br>No KTP : $noktp";
    echo "<br>Nama : $nama";
    echo "<br>Alamat : $alamat";
    echo "<br>No Telepon : $notelp";

}

?>
