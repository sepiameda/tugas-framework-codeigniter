<!-- application/views/notebook/index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Catatan</title>
</head>
<body>
    <h1>Buku Catatan</h1>

    <ul>
        <?php foreach ($notes as $note): ?>
            <li><?= $note ?></li>
        <?php endforeach; ?>
    </ul>

    <form action="<?= site_url('notebook/tambah_catatan') ?>" method="post">
        <label for="catatan">Tambah Catatan:</label>
        <input type="text" name="catatan" required>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
