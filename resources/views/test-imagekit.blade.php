<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Gambar | ImageKit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-sm p-4 rounded-4" style="width: 100%; max-width: 450px;">
        <h3 class="text-center mb-4 text-primary">Upload Gambar ke ImageKit</h3>
        <form action="/test-imagekit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Pilih Gambar</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Upload Sekarang</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
