<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Persediaan Obat</title>
    <!-- Masukkan stylesheet Anda di sini -->
    <style>
        /* Contoh CSS */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Sistem Persediaan Obat</h1>

    <?php
    // Kode PHP untuk mengakses data obat dari database
    // Misalnya, kita punya koneksi ke database di sini

    // Contoh data obat
    $obat = array(
        array("Kode Obat" => "OBT001", "Nama Obat" => "Paracetamol", "Stok" => 100),
        array("Kode Obat" => "OBT002", "Nama Obat" => "Amoxicillin", "Stok" => 50),
        array("Kode Obat" => "OBT003", "Nama Obat" => "Ibuprofen", "Stok" => 75),
        // Data obat lainnya
    );
    ?>

    <h2>Data Obat</h2>
    <table>
        <tr>
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($obat as $data): ?>
        <tr>
            <td><?php echo $data["Kode Obat"]; ?></td>
            <td><?php echo $data["Nama Obat"]; ?></td>
            <td><?php echo $data["Stok"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Tambahkan formulir atau fungsi lainnya di sini -->

</body>
</html>
