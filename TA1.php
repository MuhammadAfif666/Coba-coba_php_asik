<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Informasi Pegawai</title>
</head>
<body>

<?php
$nama_pegawai = isset($_POST['nama_pegawai']) ? $_POST['nama_pegawai'] : "Rahmat";
$agama = isset($_POST['agama']) ? $_POST['agama'] : "Islam";
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : "Manager";
$status = isset($_POST['status']) ? $_POST['status'] : "menikah";
$jumlah_anak = 4;

echo "<h2>Informasi Pegawai</h2>";
echo "<p>Nama Pegawai: $nama_pegawai</p>";
echo "<p>Agama: $agama</p>";
echo "<p>Jabatan: $jabatan</p>";

if ($status === "menikah") {
    echo "<p>Status: Menikah</p>";
    echo "<p>Jumlah Anak: $jumlah_anak</p>";
} else {
    echo "<p>Status: Belum Menikah</p>";
}
?>

<form method="post" action="">
    <label for="nama_pegawai">Nama Pegawai:</label>
    <input type="text" name="nama_pegawai" id="nama_pegawai" value="<?php echo $nama_pegawai; ?>">

    <br>

    <label for="agama">Agama:</label>
    <input type="text" name="agama" id="agama" value="<?php echo $agama; ?>">

    <br>

    <label for="jabatan">Jabatan:</label>
    <select name="jabatan" id="jabatan">
        <option value="Manager" <?php if ($jabatan === "Manager") echo "selected"; ?>>Manager</option>
        <option value="Asisten" <?php if ($jabatan === "Asisten") echo "selected"; ?>>Asisten</option>
        <option value="Kabag" <?php if ($jabatan === "Kabag") echo "selected"; ?>>Kabag</option>
        <option value="Staff" <?php if ($jabatan === "Staff") echo "selected"; ?>>Staff</option>
    </select>

    <br>

    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="menikah" <?php if ($status === "menikah") echo "selected"; ?>>Menikah</option>
        <option value="belum_menikah" <?php if ($status === "belum_menikah") echo "selected"; ?>>Belum Menikah</option>
    </select>

    <br>

    <input type="submit" value="Klik disini">
</form>

</body>
</html>
