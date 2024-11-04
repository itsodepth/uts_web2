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
            <h2>Dasar-dasar PHP</h2>

            <h3>1. Variabel</h3>
            <p>Variabel dalam PHP diawali dengan tanda $ dan diikuti dengan nama variabel. Variabel digunakan untuk
                menyimpan data yang dapat berubah-ubah.</p>

            <h3>2. Tipe Data PHP</h3>
            <ul>
                <li>String: Teks</li>
                <li>Integer: Bilangan bulat</li>
                <li>Float: Bilangan desimal</li>
                <li>Boolean: Nilai true/false</li>
                <li>Array: Kumpulan data</li>
                <li>Object: Instance dari class</li>
            </ul>

            <h3>3. Operator PHP</h3>
            <ul>
                <li>Aritmatika: +, -, *, /, %</li>
                <li>Perbandingan: ==, !=, >, <,>=, <= </li>
                <li>Logika: &&, ||, !</li>
                <li>Assignment: =, +=, -=, *=, /=</li>
            </ul>

            <h3>4. Implementasi</h3>
            <div class="code-example">
                <form method="post" action="" style="margin-bottom: 20px;">
                    <div style="margin-bottom: 15px;">
                        <label for="angka1">Masukkan Angka Pertama:</label><br>
                        <input type="number" id="angka1" name="angka1" required
                            value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : ''; ?>"
                            style="padding: 5px; width: 200px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label for="angka2">Masukkan Angka Kedua:</label><br>
                        <input type="number" id="angka2" name="angka2" required
                            value="<?php echo isset($_POST['angka2']) ? $_POST['angka2'] : ''; ?>"
                            style="padding: 5px; width: 200px;">
                    </div>
                    <button type="submit" name="hitung_operasi"
                        style="padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
                        Hitung Operasi
                    </button>
                    <button type="submit" name="reset_hasil"
                        style="padding: 8px 15px; background-color: #f44336; color: white; border: none; border-radius: 4px; cursor: pointer;">
                        Reset Hasil
                    </button>
                </form>

                <div class="output" id="hasil"
                    style="margin-top: 20px; background-color: #f8f9fa; padding: 15px; border-radius: 5px; border-left: 4px solid #4CAF50; display: none;">
                    <?php
            if (isset($_POST['hitung_operasi']) && !isset($_POST['reset_hasil'])) {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];

                echo "<h4 style='margin: 0 0 15px 0;'>Hasil Perhitungan</h4>";
                echo "<div style='background-color: white; padding: 15px; border-radius: 5px; margin-bottom: 15px;'>";
                
                // Operasi Aritmatika
                echo "<div style='margin-bottom: 15px;'><strong>Operasi Aritmatika:</strong><br>";
                echo "Penjumlahan: $angka1 + $angka2 = " . ($angka1 + $angka2) . "<br>";
                echo "Pengurangan: $angka1 - $angka2 = " . ($angka1 - $angka2) . "<br>";
                echo "Perkalian: $angka1 x $angka2 = " . ($angka1 * $angka2) . "<br>";
                echo "Pembagian: $angka1 ÷ $angka2 = " . ($angka2 != 0 ? ($angka1 / $angka2) : "Tidak bisa dibagi dengan 0") . "<br>";
                echo "</div>";

                echo "<div style='margin-bottom: 15px;'><strong>Operasi Perbandingan:</strong><br>";
                echo "$angka1 sama dengan $angka2: " . ($angka1 == $angka2 ? "Ya" : "Tidak") . "<br>";
                echo "$angka1 lebih besar dari $angka2: " . ($angka1 > $angka2 ? "Ya" : "Tidak") . "<br>";
                echo "$angka1 lebih kecil dari $angka2: " . ($angka1 < $angka2 ? "Ya" : "Tidak") . "<br>";
                echo "</div>";

                echo "<div><strong>Operasi Logika:</strong><br>";
                echo "Kedua angka positif: " . ($angka1 > 0 && $angka2 > 0 ? "Ya" : "Tidak") . "<br>";
                echo "</div>";

                echo "</div>";
                echo "<script>document.getElementById('hasil').style.display = 'block';</script>";
                echo "<script>document.getElementById('hasil').scrollIntoView({ behavior: 'smooth' });</script>";
            }

            if (isset($_POST['reset_hasil'])) {
                echo "<h4 style='margin: 0 0 0 0;'>Hasil telah direset.</h4>";
                echo "<script>document.getElementById('hasil').style.display = 'none';</script>";
                echo "<script>document.getElementById('angka1').scrollIntoView({ behavior: 'smooth' });</script>";
            }
            ?>
                </div>
            </div>
        </div>
    </body>

</html>