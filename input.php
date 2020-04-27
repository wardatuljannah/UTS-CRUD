<h3> Form Input Data Mahasiswa</h3>
<hr>
<form method="post" action="">
    <table>
        <tr>
            <td>NPM</td>
            <td><input type="text" name="txtNpm"></td>
        </tr>
         <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="txtNama"></td>
        </tr>
         <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="txtKelamin">
                    <option value="">- Pilih -</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><Input type="text" name="txtJurusan" size="60"></td>
        </tr>
        <tr>
             <td></td>
            <td><Input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>

<?php
include "Konek.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $simpan = mysqli_query($konek, "INSERT INTO mahasiswa (npm,nama,jk,jurusan)
        VALUES('$_POST[txtNpm]','$_POST[txtNama]','$_POST[txtKelamin]','$_POST[txtJurusan]')");

    if($simpan){
        header('location:data.php');
    }else{
        echo "Gagal menyimpan data..."; 
    }
}

?>