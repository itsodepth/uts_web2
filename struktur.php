<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UTS WEB 2 Devano & Satriyo</title>
        <link rel="icon" href="assets/Logo.png">
        <link rel="stylesheet" href="assets/styles.css">
    </head>

    <body>
        <div class="menu-container">
            <h1 class="page-title">Belajar PHP</h1>
            <div class="menu-items">
                <a href="main.php" class="menu-item">Pengenalan PHP</a>
                <a href="dasar.php" class="menu-item">Dasar-Dasar PHP</a>
                <a href="struktur.php" class="menu-item">Struktur PHP</a>
            </div>
        </div>
        <div class="section">
            <h2>Struktur Kondisi & Perulangan</h2>

            <h3>1. Kondisi If Tunggal</h3>
            <p>Kondisi if tunggal digunakan untuk mengeksekusi kode jika suatu kondisi terpenuhi.</p>

            <h3>2. Kondisi If Else</h3>
            <p>If else digunakan untuk menentukan eksekusi kode berdasarkan kondisi benar atau salah.</p>

            <h3>3. Kondisi If Bersarang (Nested If)</h3>
            <p>Nested if adalah kondisi if di dalam if, digunakan untuk kondisi yang lebih kompleks.</p>

            <h3>4. Pemrograman Perulangan</h3>
            <p>Perulangan digunakan untuk mengeksekusi kode berulang kali (for, while, do-while).</p>

            <h3>5. Implementasi Sistem Penggajian</h3>
            <div class="code-example">
                <?php
        // Variabel untuk menyimpan hasil
        $showResults = true; // Flag untuk menampilkan hasil
        ?>

                <!-- Form Input Data Karyawan -->
                <form method="post" action="" style="margin-bottom: 20px;" id="formPenggajian">
                    <div style="margin-bottom: 15px;">
                        <label for="nama">Nama Karyawan:</label><br>
                        <input type="text" id="nama" name="nama" required style="padding: 5px; width: 200px;"
                            value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="jabatan">Jabatan:</label><br>
                        <select id="jabatan" name="jabatan" required style="padding: 5px; width: 214px;">
                            <option value="direktur"
                                <?php echo (isset($_POST['jabatan']) && $_POST['jabatan'] == 'direktur') ? 'selected' : ''; ?>>
                                Direktur</option>
                            <option value="manager"
                                <?php echo (isset($_POST['jabatan']) && $_POST['jabatan'] == 'manager') ? 'selected' : ''; ?>>
                                Manager</option>
                            <option value="supervisor"
                                <?php echo (isset($_POST['jabatan']) && $_POST['jabatan'] == 'supervisor') ? 'selected' : ''; ?>>
                                Supervisor</option>
                            <option value="staff"
                                <?php echo (isset($_POST['jabatan']) && $_POST['jabatan'] == 'staff') ? 'selected' : ''; ?>>
                                Staff</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="status">Status Karyawan:</label><br>
                        <select id="status" name="status" required style="padding: 5px; width: 214px;">
                            <option value="tetap"
                                <?php echo (isset($_POST['status']) && $_POST['status'] == 'tetap') ? 'selected' : ''; ?>>
                                Karyawan Tetap</option>
                            <option value="kontrak"
                                <?php echo (isset($_POST['status']) && $_POST['status'] == 'kontrak') ? 'selected' : ''; ?>>
                                Karyawan Kontrak</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label for="jamLembur">Jam Lembur:</label><br>
                        <input type="number" id="jamLembur" name="jamLembur" min="0"
                            value="<?php echo isset($_POST['jamLembur']) ? $_POST['jamLembur'] : '0'; ?>"
                            style="padding: 5px; width: 200px;">
                    </div>

                    <button type="submit" name="hitung_gaji"
                        style="padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
                        Hitung Gaji
                    </button>
                    <button type="submit" name="reset_hasil"
                        style="padding: 8px 15px; background-color: #f44336; color: white; border: none; border-radius: 4px; cursor: pointer;">
                        Reset Hasil
                    </button>
                </form>

                <div class="output" id="hasil"
                    style="margin-top: 20px; background-color: #f8f9fa; padding: 15px; border-radius: 5px; border-left: 4px solid #4CAF50; display: none;">
                    <?php
            if (isset($_POST['hitung_gaji']) && !isset($_POST['reset_hasil'])) {
                $nama = $_POST['nama'];
                $jabatan = $_POST['jabatan'];
                $status = $_POST['status'];
                $jamLembur = (int)$_POST['jamLembur'];
                
                echo "<h4 style='margin: 0 0 15px 0;'>Hasil Perhitungan Gaji</h4>";
                
                $gajiPokok = ($jabatan == "direktur") ? 15000000 : (($jabatan == "manager") ? 10000000 : (($jabatan == "supervisor") ? 7000000 : 4500000));
                echo "<p><strong>Nama Karyawan:</strong> " . ucwords($nama) . "</p>";
                echo "<p><strong>Jabatan:</strong> " . ucfirst($jabatan) . "</p>";
                echo "<p><strong>Status:</strong> Karyawan " . ucfirst($status) . "</p>";
                echo "<p><strong>Jam Lembur:</strong> " . $jamLembur . " jam</p>";
                echo "<p><strong>Gaji Pokok:</strong> Rp " . number_format($gajiPokok, 0, ',', '.') . "</p>";
                
                // Logika untuk bonus lembur
                if ($jabatan == "staff" && $jamLembur > 0) {
                    $bonusLembur = ($gajiPokok * 0.1) * $jamLembur;
                    echo "<p><strong>Bonus Lembur:</strong> Rp " . number_format($bonusLembur, 0, ',', '.') . "</p>";
                } else {
                    echo "<p><strong>Bonus Lembur:</strong> Jabatan ini tidak mendapatkan bonus lembur.</p>";
                }
                
                echo "<hr style='border: 1px solid #4CAF50; margin: 15px 0;'>";
                
                $totalGaji = $gajiPokok + (isset($bonusLembur) ? $bonusLembur : 0);
                echo "<p><strong>Total Gaji:</strong> Rp " . number_format($totalGaji, 0, ',', '.') . "</p>";
                
                echo "<script>document.getElementById('hasil').style.display = 'block';</script>"; // Menampilkan output
                echo "<script>document.getElementById('hasil').scrollIntoView({ behavior: 'smooth' });</script>"; // Menambahkan scroll ke hasil
            }
            if (isset($_POST['reset_hasil'])) {
                echo "<h4 style='margin: 0 0 0 0;'>Hasil telah direset.</h4>";
                echo "<script>document.getElementById('hasil').style.display = 'none';</script>"; // Menyembunyikan output
                echo "<script>document.getElementById('formPenggajian').scrollIntoView({ behavior: 'smooth' });</script>"; // Scroll ke form
            }
            ?>
                </div>
            </div>
        </div>
    </body>

</html>