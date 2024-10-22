<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Rapat - MRapat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 70px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .table {
            margin-top: 20px;
        }

        /* Flexbox to align button and search bar */
        .header-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .pagination {
            justify-content: flex-end;
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
        <h1>Permohonan Rapat</h1>

        <!-- Header Controls (Button and Search Bar) -->
        <div class="header-controls">
            <!-- Button to trigger modal -->
            <button class="btn btn-success" data-toggle="modal" data-target="#permohonanModal">Buat Permohonan Rapat</button>

            <!-- Search Bar -->
            <input type="text" class="form-control w-25" placeholder="Search..." id="searchInput">
        </div>

        <!-- Table for displaying meeting requests -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Rapat</th>
                    <th>Ruangan</th>
                    <th>Jumlah Peserta</th>
                    <th>Option</th>
                    <th>Persetujuan</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dummy data rows -->
                <tr>
                    <td>1</td>
                    <td>Demo Presentasi</td>
                    <td>Aula 1</td>
                    <td>2 Orang</td>
                    <td><button class="btn btn-danger">Batal Ajukan</button></td>
                    <td><span class="badge badge-success">Disetujui</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Presentasi Rapat 2</td>
                    <td>Aula Rendang</td>
                    <td>3 Orang</td>
                    <td><button class="btn btn-danger">Batal Ajukan</button></td>
                    <td><span class="badge badge-secondary">Belum Disetujui</span></td>
                </tr>
                <!-- Add more dummy data here -->
            </tbody>
        </table>

        <!-- Footer Controls (Pagination) -->
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <!-- Modal for creating new meeting request -->
    <div class="modal fade" id="permohonanModal" tabindex="-1" role="dialog" aria-labelledby="permohonanModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permohonanModalLabel">Buat Permohonan Rapat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form for submitting new meeting request -->
                    <form action="<?= site_url('rapat/store') ?>" method="post">
                        <!-- Nama Rapat -->
                        <div class="form-group">
                            <label for="namaRapat">Nama Rapat</label>
                            <input type="text" class="form-control" id="namaRapat" name="namaRapat" placeholder="Masukkan nama rapat" required>
                        </div>

                        <!-- Ruangan Rapat -->
                        <div class="form-group">
                            <label for="ruanganRapat">Ruangan Rapat</label>
                            <select class="form-control" id="ruanganRapat" name="ruanganRapat" required>
                                <option value="">Pilih Ruangan</option>
                                <option>Aula Rendan</option>
                                <option>Ruang Meeting</option>
                            </select>
                        </div>

                        <!-- Jumlah Peserta -->
                        <div class="form-group">
                            <label for="jumlahPeserta">Jumlah Peserta</label>
                            <input type="number" class="form-control" id="jumlahPeserta" name="jumlahPeserta" placeholder="Masukkan jumlah peserta" required>
                        </div>

                        <!-- Waktu Mulai dan Waktu Selesai -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="waktuMulai">Waktu Mulai</label>
                                    <input type="datetime-local" class="form-control" id="waktuMulai" name="waktuMulai" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="waktuSelesai">Waktu Selesai</label>
                                    <input type="datetime-local" class="form-control" id="waktuSelesai" name="waktuSelesai" required>
                                </div>
                            </div>
                        </div>

                        <!-- Deskripsi Rapat -->
                        <div class="form-group">
                            <label for="deskripsiRapat">Deskripsi Rapat</label>
                            <textarea class="form-control" id="deskripsiRapat" name="deskripsiRapat" rows="3" placeholder="Tambahkan deskripsi rapat"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Ajukan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>