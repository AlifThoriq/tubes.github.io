<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MRapat</title>
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

        table {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mt-4">
        <!-- Daftar Permohonan Rapat -->
        <h1 class="mb-4">Daftar Permohonan Rapat yang Disetujui</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Waktu Masuk</th>
                    <th>Waktu Keluar</th>
                    <th>Nama Rapat</th>
                    <th>Ruangan Rapat</th>
                    <th>Jumlah Peserta</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($permohonanRapat) && !empty($permohonanRapat)): ?>
                    <?php foreach ($permohonanRapat as $rapat): ?>
                        <tr>
                            <td><?= $rapat['waktu_masuk']; ?></td>
                            <td><?= $rapat['waktu_keluar']; ?></td>
                            <td><?= $rapat['nama_rapat']; ?></td>
                            <td><?= $rapat['ruangan_rapat']; ?></td>
                            <td><?= $rapat['jumlah_peserta']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data rapat yang disetujui.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- List Kehadiran Rapat -->
        <h1 class="mb-4">List Kehadiran Rapat</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Waktu Masuk</th>
                    <th>Waktu Keluar</th>
                    <th>Nama Rapat</th>
                    <th>Ruangan Rapat</th>
                    <th>Jumlah Peserta</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($kehadiranRapat) && !empty($kehadiranRapat)): ?>
                    <?php foreach ($kehadiranRapat as $kehadiran): ?>
                        <tr>
                            <td><?= $kehadiran['waktu_masuk']; ?></td>
                            <td><?= $kehadiran['waktu_keluar']; ?></td>
                            <td><?= $kehadiran['nama_rapat']; ?></td>
                            <td><?= $kehadiran['ruangan_rapat']; ?></td>
                            <td><?= $kehadiran['jumlah_peserta']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data kehadiran rapat.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>