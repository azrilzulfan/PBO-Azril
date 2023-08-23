<?php
    require("../Models/MKelas.php");

    Class CKelas {
        function simpanData($nama)
        {
            $db = new MKelas();
            echo $db->simpan($nama);
        }
        function updateData($oldNama, $newNama)
        {
            $db = new MKelas();
            echo $db->update($oldNama, $newNama);
        }
        function hapusData($nama)
        {
            $db = new MKelas();
            echo $db->hapus($nama);
        }
    }
?>