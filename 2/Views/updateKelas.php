<?php
    require("../Controllers/CKelas.php");
    $Kelas = new CKelas();
?>

<form action="" method="post">
    <table>
        <tr>
            <td>Old Nama</td><td>:</td>
            <td><input type="text" name="old_nama"></td>
        </tr>
        <tr>
            <td>Nama Kelas</td><td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td colspan="3" align="right">
                <input type="submit" name="update" value="Update">
            </td>
        </tr>       
    </table>
</form>

<?php 
        if(isset($_POST['update'])){
            $oldNama = $_POST['old_nama'];
            $newNama = $_POST['nama'];
            
            $Kelas->updateData($oldNama, $newNama);
        }
?>