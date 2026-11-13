
<?php
$query = trim($_GET["query"] ?? "");

$dataMahasiswa = [
    ["nama" => "walter", "program_studi" => "Sistem Informasi"],
    ["nama" => "veronika", "program_studi" => "Teknik Mesin"],
    ["nama" => "carmelin", "program_studi" => "Teknik Sipil"],
    ["nama" => "queenshi", "program_studi" => "Sistem Informasi"],
    ["nama" => "kristoforus", "program_studi" => "Hukum"]
];

$hasilPencarian = [];

foreach ($dataMahasiswa as $mahasiswa) {
    if ($query === "" || stripos($mahasiswa["nama"], $query) !== false) {
        $hasilPencarian[] = $mahasiswa;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <main>
        <h1>Pencarian Data Mahasiswa</h1>

        <form method="get">
            <label for="query">Nama Mahasiswa</label>
            <input
                type="text"
                id="query"
                name="query"
                value="<?php echo htmlspecialchars($query, ENT_QUOTES, "UTF-8"); ?>"
                placeholder="Masukkan nama mahasiswa"
            >
            <button type="submit">Cari</button>
        </form>

        <h2>Hasil Pencarian</h2>

        <?php if ($hasilPencarian !== []) { ?>

            <table border="1" cellpadding="8">
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Program Studi</th>
                </tr>

                <?php foreach ($hasilPencarian as $mahasiswa) { ?>
                    <tr>
                        <td>
                            <?php echo htmlspecialchars($mahasiswa["nama"], ENT_QUOTES, "UTF-8"); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($mahasiswa["program_studi"], ENT_QUOTES, "UTF-8"); ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        <?php } else { ?>

            <p>Data mahasiswa tidak ditemukan.</p>

        <?php } ?>

        <p><a href="index.php">Kembali ke Halaman Utama</a></p>
        <p><a href="form.php">Pendaftaran Mahasiswa</a></p>
    </main>

</body>
</html>