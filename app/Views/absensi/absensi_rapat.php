<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi - MRapat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .table {
            margin-top: 20px;
        }

        /* Flexbox to align button to the left */
        .header-controls {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header {
            background-color: #007bff;
            color: white;
        }

        h1 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mt-4">
        <h1>Absensi Rapat</h1>

        <!-- Header Controls (Button to trigger modal) -->
        <div class="header-controls">
            <!-- Button to trigger modal, now placed on the left -->
            <button class="btn btn-success" data-toggle="modal" data-target="#absensiModal">Absensi Baru</button>
        </div>

        <!-- Table for displaying attendance -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Rapat</th>
                    <th>Status</th>
                    <th>Bukti Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example rows -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Rapat Proyek</td>
                    <td><span class="badge badge-success">Hadir</span></td>
                    <td><a href="#" class="btn btn-primary">Lihat Bukti</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>Rapat Koordinasi</td>
                    <td><span class="badge badge-secondary">Tidak Hadir</span></td>
                    <td><a href="#" class="btn btn-primary">Lihat Bukti</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal for adding new attendance -->
    <div class="modal fade" id="absensiModal" tabindex="-1" role="dialog" aria-labelledby="absensiModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="absensiModalLabel">Absensi Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for submitting new attendance -->
                    <form action="<?= site_url('absensi/store') ?>" method="post">
                        <!-- Nama Lengkap -->
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <!-- Nama Rapat -->
                        <div class="form-group">
                            <label for="namaRapat">Nama Rapat</label>
                            <select class="form-control" id="namaRapat" name="namaRapat" required>
                                <option value="">Pilih Nama Rapat</option>
                                <!-- Dynamically add options here -->
                            </select>
                        </div>

                        <!-- Status Kehadiran -->
                        <div class="form-group">
                            <label for="statusKehadiran">Status Kehadiran</label>
                            <select class="form-control" id="statusKehadiran" name="statusKehadiran" required>
                                <option value="">Pilih Status</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </div>

                        <!-- Upload Bukti Kehadiran -->
                        <div class="form-group">
                            <label for="buktiKehadiran">Bukti Kehadiran (jpg, png)</label>
                            <input type="file" class="form-control" id="buktiKehadiran" name="buktiKehadiran" accept="image/*" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Tambah Absensi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>