<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Rapat - MRapat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #28a745;
            /* Ganti dengan warna tombol permohonan rapat */
            color: white;
            /* Warna teks tombol */
            border: none;
            /* Hapus border jika perlu */
        }

        .btn-primary:hover {
            background-color: #218838;
            /* Warna tombol saat dihover */
            color: white;
            /* Pastikan warna teks tetap putih */
        }
    </style>
</head>

<body>
    <!-- Include Navbar -->
    <?= $this->include('navbar/navbar_admin'); ?>

    <div class="container mt-4">
        <h1>Persetujuan Rapat</h1>
        <p>Selamat datang di halaman persetujuan rapat.</p>
        <!-- Tambahkan konten lainnya sesuai kebutuhan -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>