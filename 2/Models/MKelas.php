<?php
    require("../Config/Database.php");

    Class MKelas {

        var $sql;

        function simpan($nama)
        {
            Global $koneksi;
            $sql="insert into kelas values('".$nama."')";
            $cek=mysqli_query($koneksi,$sql);
            if ($cek == 1){
                return "Data Berhasil Disimpan";
            } else {
                return "Data Gagal Disimpan";
            }
        }
        function update($oldNama,$newNama)
        {
            Global $koneksi;
            $sql = "UPDATE kelas SET nama = '".$newNama."' WHERE nama = '".$oldNama."'";
            $cek = mysqli_query($koneksi, $sql);
            if ($cek) {
                return "Data Berhasil Diupdate";
            } else {
                return "Data Gagal Diupdate";
            }
        }
        function hapus($nama)
        {
            Global $koneksi;
            $sql = "DELETE FROM kelas WHERE nama = '".$nama."'";
            $cek = mysqli_query($koneksi, $sql);
            if ($cek) {
                return "Data Berhasil Dihapus";
            } else {
                return "Data Gagal Dihapus";
            }
        }
    }
?>