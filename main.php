<!DOCTYPE html>
<html>

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
            <h2>Pengenalan PHP</h2>

            <h3>1. Pengertian PHP</h3>
            <p>PHP (Hypertext Preprocessor) adalah bahasa pemrograman server-side yang dirancang khusus untuk
                pengembangan web. PHP dapat disisipkan di dalam HTML dan dijalankan di server.</p>

            <h3>2. Pengoperasian PHP</h3>
            <p>PHP dioperasikan di sisi server (server-side). Ketika client meminta halaman PHP, server akan memproses
                kode PHP terlebih dahulu, mengubahnya menjadi HTML, kemudian mengirimkan hasilnya ke client.</p>

            <h3>3. Implementasi Dasar PHP</h3>
            <div class="code-example">
                <?php
            // Contoh dasar PHP
            echo "<p>Ini adalah output dari PHP</p>";
            
            // Menggunakan variabel
            $nama = "Devano";
            echo "<p>Halo, $nama!</p>";
            
            // Menggunakan fungsi date()
            echo "<p>Hari ini adalah: " . date("d-m-Y") . "</p>";
            ?>
            </div>
        </div>
        </div>
    </body>

</html>