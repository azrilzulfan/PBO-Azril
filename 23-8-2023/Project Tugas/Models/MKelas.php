<?php
    require('../Config/Database.php');

    Class MKelas{


        function Simpan($name){
            global $koneksi;
            $sql="insert into kelas values('".$name."')";
            $res = mysqli_query($koneksi,$sql);
            if($res == 1) {
                return "Berhasil";
            }

        }

        function Update($name, $newName) {
            global $koneksi;
            
            $sql = "UPDATE kelas SET name = '$newName' WHERE name = '$name'";

            try {
                $res = mysqli_query($koneksi, $sql);
                return "Berhasil";
            } catch (mysqli_sql_exception $e) {
                var_dump($e->getMessage());
                return "Gagal: " . $e->getMessage();
            }
            
        }
        

        function Delete($name) {
            global $koneksi; 
            
            $sql = "DELETE FROM kelas WHERE name = '$name'";
            $res = mysqli_query($koneksi, $sql);
        
            if ($res == 1) {
                return "Berhasil";
            } else {
                return "Gagal";
            }
        }
        
        
    }
?>