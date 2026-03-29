
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi knjigu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Uredi knjigu</h1>

    <form action="index.php?action=update" method="POST" class="card p-4 shadow-sm">
        <input type="hidden" name="id" value="<?= $book['id']; ?>">

        <div class="mb-3">
            <label class="form-label">Naslov</label>
            <input type="text" name="title" class="form-control" value="<?= $book['title']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="author" class="form-control" value="<?= $book['author']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Godina izdavanja</label>
            <input type="number" name="year" class="form-control" value="<?= $book['year_published']; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategorija</label>
            <select name="category_id" class="form-select" required>
                <?php while($category = $categories->fetch_assoc()): ?>
                    <option value="<?= $category['id']; ?>" <?= $category['id'] == $book['category_id'] ? 'selected' : ''; ?>>
                        <?= $category['name']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Nazad</a>
    </form>
</div>

</body>
</html>