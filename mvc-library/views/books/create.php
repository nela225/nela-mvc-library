<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj knjigu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Dodaj novu knjigu</h1>

    <form action="index.php?action=store" method="POST" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label class="form-label">Naslov</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Godina izdavanja</label>
            <input type="number" name="year" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategorija</label>
            <select name="category_id" class="form-select" required>
                <option value="">Izaberi kategoriju</option>
                <?php while($category = $categories->fetch_assoc()): ?>
                    <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                <?php endwhile; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Sačuvaj</button>
        <a href="index.php" class="btn btn-secondary">Nazad</a>
    </form>
</div>

<script>
document.querySelector("form").addEventListener("submit", function(e) {
    let title = document.querySelector("[name='title']").value;
    if (title.length < 2) {
        alert("Naslov mora imati barem 2 karaktera!");
        e.preventDefault();
    }
});
</script>

</body>
</html>