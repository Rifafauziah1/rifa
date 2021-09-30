<?php
class mobil extends database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datamobil = mysqli_query($this->koneksi, "select * from mobil");
        // var_dump($datadosen);
        return $datamobil;
    }

    // Menambah Data
    public function create($nopol, $merk_mobil, $warna, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "insert into  values('$nopol','$merk_mobil','$warna')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($nopol)
    {
        $datamobil = mysqli_query(
            $this->koneksi,
            "select * from mobil where nopol='$nopol'"
        );
        return $datamobil;
    }

    // Menampilkan data berdasarkan id
    public function edit($nopol)
    {
        $datamobil = mysqli_query(
            $this->koneksi,
            "select * from mobil where nopol='$nopol'"
        );
        return $datadosen;
    }
    // mengupdate data berdasarkan id
    public function update($nopol, $merk_mobil, $warna, $harga)
    {
        mysqli_query(
            $this->koneksi,
            "update mobil set nopol='$nopol', merk='$merk_mobil' , warna='$warna' where id='$harga'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($nopol)
    {
        mysqli_query($this->koneksi, "delete from mobil where nopol='$nopol'");
    }
}
