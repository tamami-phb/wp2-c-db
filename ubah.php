<?php
require_once 'koneksi.php';

$sql = "select * from mahasiswa where nim='" . $_GET['nim'] . "'";
$result = pg_query($sql);
$data = pg_fetch_array($result);
echo $data[0]['nim'];
?>

<h1>Form Ubah Data</h1>

<form method="POST">
    NIM : 
<?php
echo '<input type="text" name="nim" required values="' . $data->nim . '"><br>';
?>
    NAMA : <input type="text" name="nama"><br>
    KELAS : <input type="text" name="kelas"><br>
    <input type="submit" value="Simpan">
</form>