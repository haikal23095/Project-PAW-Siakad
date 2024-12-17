<?php 
include('../mahasiswa/config.php');

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
    <link rel="stylesheet" href="../css/style_jadwalkrs.css">
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
        <main>
            <header class="header">
                <button id="hamburger" class="hamburger">&#9776;</button> <!-- Tombol Hamburger -->
                <button class="logout-btn">Log Out</button>
            </header>
            <section class="content">
                <h1 class="judul">Penjadwalan Pembukaan KRS</h1>
                <form id="schedule-form">
                    <label for="start-date">Tanggal Mulai</label>
                    <input type="date" id="start-date" required>
                    <label for="end-date">Tanggal Selesai</label>
                    <input type="date" id="end-date" required>
                    <label for="program-study">Program Studi</label>
                    <select id="program-study" required>
                        <option value="informatika">Informatika</option>
                        <option value="sistem-informasi">Sistem Informasi</option>
                        <option value="teknik-elektro">Teknik Elektro</option>
                        <option value="teknik-mesin">Teknik Mesin</option>
                    </select>
                    <button type="submit" class="save-btn">Simpan</button>
                </form>
                <table>
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Program Studi</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            <!-- <button class="edit-btn">Edit</button>
                            <button class="deactivate-btn">Nonaktifkan</button>
                        
                            <button class="edit-btn">Edit</button>
                            <button class="deactivate-btn">Nonaktifkan</button> -->
                        <!-- Tambahkan data lainnya di sini -->
                    </tbody>
                </table>
            </section>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>
</html>