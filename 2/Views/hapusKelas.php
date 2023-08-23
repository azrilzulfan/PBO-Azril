<?php
    require("../Controllers/CKelas.php");
    $Kelas = new CKelas();
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Nama Kelas</td><td>:</td>
            <td><input type="text" name="nama_delete"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="delete" value="Hapus">
            </td>
        </tr>       
    </table>
</form>

<?php 
       if(isset($_POST['delete'])){
        $namaToDelete = $_POST['nama_delete'];
        
        $Kelas->hapusData($namaToDelete);
    }
?>