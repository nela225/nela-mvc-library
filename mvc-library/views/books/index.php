<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Library Manager</h1>
        <a href="index.php?action=create" class="btn btn-primary">Dodaj knjigu</a>
    </div>

    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naslov</th>
                <th>Autor</th>
                <th>Godina</th>
                <th>Kategorija</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $books->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['author']; ?></td>
                    <td><?= $row['year_published']; ?></td>
                    <td><?= $row['category_name']; ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=delete&id=<?= $row['id']; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Jesi li siguran da želiš obrisati ovu knjigu?')">
                           Delete
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>