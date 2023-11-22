<?php
include 'config/config.php';
session_start();

if($_SESSION['role']==""){
    header("Location: index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <head>
        <h2>Daftar Siswa</h2>
    </head>

    <nav>
        <a href="from_tambah_siswa.php">[+] Tambah Siswa Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>tplahir</th>
                <th>tglahir</th>
                <th>Alamat</th>
                <th>Hobi</th>
                <th>Cita-cita</th>
                <th>Jm_saudara</th>
                <th>Idkelas</th>
                <th>Iagama</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($conn, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['tplahir']."</td>";
                echo "<td>".$siswa['tglahir']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['hobi']."</td>";
                echo "<td>".$siswa['cita-cita']."</td>";
                echo "<td>".$siswa['jm_saudara']."</td>";
                echo "<td>".$siswa['idkelas']."</td>";
                echo "<td>".$siswa['idagama']."</td>";
                
                echo "<td>";
                echo "<a href='from_edit_siswa.php?id=".$siswa['id']."'>Edit</a>";
                echo "<a href='controller/hapus_siswa.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total Siswa; <?php echo mysqli_num_rows($query) ?></p>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses') {
                echo "Data Siswa Berhasil Ditambahkan";
            } else {
                echo "Tambah Data Siswa Gagal";
            }
        ?>
    </p>
        <?php endif; ?>
    
    <form action="controller/logout.php" method="POST" class="login-username">
        <div class="input-group">
            <button type="submit" class="btn">Logout</button>
        </div> 
    </form>    
</body>
</html>