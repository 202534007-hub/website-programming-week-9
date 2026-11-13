
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Mahasiswa</title>
</head>
<body>

    <main>
        <h1>Formulir Pendaftaran Mahasiswa</h1>

        <form action="process.php" method="post">

            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required maxlength="100">

            <br><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <br><br>

            <label for="major">Program Studi</label>
            <select id="major" name="major" required>
                <option value="">Pilih program studi</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
            </select>

            <br><br>

            <button type="submit">Simpan</button>

        </form>
    </main>

</body>
</html>