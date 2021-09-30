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
    <a href="pelanggan.php">Pelanggan</a></li>


</ul>
<br>
<section class="portofolio" id="portofolio">
        <div class="container">
            <div class="row">


                <tr>
                    <td><h2>Nopol</h2>
                    <select name="nopol">
                    <option name="nopol">Nopol
                    <option name="nopol">B9381
                    <option name="nopol">A9321
                    <option name="nopol">D8732
                    <option name="nopol">P1203
                    <option name="nopol">D6039

                    </select>
                    </td>
                </tr>
                <hr>
                <tr>
                    <td><h2>MERK</h2>
                    <select name="merk_mobil">
                    <option name="merk_mobil">MERK
                    <option name="merk_mobil">Toyota
                    <option name="merk_mobil">Datsun
                    <option name="merk_mobil">Nissan
                    <option name="merk_mobil">Toyota
                    </select>
                    </td>
                </tr>
                <hr>
                <tr>
                    <td><h2>Warna</h2>
                    <select name="warna">
                    <option name="warna">Merah
                    <option name="warna">Kuning
                    <option name="warna">Hitam
                    <option name="warna">Abu
                    </select>
                    </td>
                </tr>
                <hr>
                <tr>
                    <td><h2>Harga</h2>
                    <select name="harga">
                    <option name="harga">Harga
                    <option name="harga">100000/hari
                    <option name="harga">250000/hari
                    <option name="harga">200000/hari
                    <option name="harga">180000/hari
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
    $nopol = $_POST['nopol'];
    $merk = $_POST['merk_mobil'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    echo "Nopol : $nopol";
    echo "<br>Merk : $merk";
    echo "<br>Warna : $warna";
    echo "<br>Harga : $harga";

}

?>