<?php
    require("../Controllers/CKelas.php");
    $Kelas = new CKelas();
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Nama Kelas</td><td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="simpan" value="Simpan">
            </td>
        </tr>       
    </table>
</form>

<?php 
        if(isset($_POST['simpan'])){
            $Kelas->simpanData($_POST['nama']);
        }
?>