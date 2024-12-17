<?php 
include('../mahasiswa/config.php');

if ($_SESSION['Level'] != 'admin') {
    header("Location: ../loginpage.php");
}

$sql = "SELECT Nama_User FROM User WHERE Level = 'admin' LIMIT 1";
$result = $conn->query($sql);

$nama_admin = "Admin"; // Default jika tidak ada data

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_admin = $row['Nama_User'];
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik UTM</title>
    <link rel="stylesheet" href="../css/style_akundosen.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="avatar"></div>
                <p><?php echo htmlspecialchars($nama_admin); ?></p>
            </div>
            <nav class="menu">
                <ul>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/mahasiswa/dashboard.png" alt="../admin/index.php"><span>Dashboard</span></li></a>
                    <a href="../admin/index_kelolaakunawal.php"><li><img src="../assets/icon-sidebar/admin/profil pengguna.png" alt="../admin/index.php"><span>Kelola Akun</span></li></a>
                    <a href="../admin/index_kalender.php"><li><img src="../assets/icon-sidebar/admin/kalender akademik.png" alt="kalender akademik"><span>Kelola Kalender Akademik</span></li></a>
                    <a href="../admin/index_krsawal.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola KRS</span></li></a>
                    <a href="../admin/index_jadwalkrs.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Jadwal KRS</span></li></a>
                    <a href="../admin/index_.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Pengumuman</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Diskusi</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/admin/krs.png" alt="../admin/index.php"><span>Kelola Pesan</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/mahasiswa/khs.png" alt="../admin/index.php"><span>Kelola KHS</span></li></a>
                    <a href="../admin/kelola ukt.php"><li><img src="../assets/icon-sidebar/admin/kelola ukt.png" alt="../admin/index.php"><span>Kelola UKT</span></li></a>
                    <a href="../admin/kelola matkul.php"><li><img src="../assets/icon-sidebar/admin/info matakuliah.png" alt="../admin/index.php"><span>Kelola Informasi Matakuliah</span></li></a>
                    <a href="../admin/index_informasiakademik.php"><li><img src="../assets/icon-sidebar/admin/info akademik.png" alt="../admin/index.php"><span>Kelola Informasi Akademik</span></li></a>
                    <a href="../admin/index.php"><li><img src="../assets/icon-sidebar/mahasiswa/faq.png" alt="../admin/index.php"><span>Kelola FAQ</span></li></a>

                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="header">
                <h1>Kelola Akun Dosen</h1>
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <a href="../logout.php" class="logout">Log Out</a>
            </header>
            <section class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123</td>
                            <td>syafiq</td>
                            <td>Teknik Informatika</td>
                            <td>fikiprik@gmail.com</td>
                            <td class="tombol_aksi">
                                <a href="../admin/index_kelola_edit_dosen.php">
                                    <button class="add">Edit</button></a>
                                <button class="remove">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="../admin/index_kelola_tambah_dosen.php">
                    <button class="tambah">Tambah</button>
                </a>
            </section>
        </main>
    </div>

    <script src="../js/script_akundosen.js"></script>
</body>
</html>