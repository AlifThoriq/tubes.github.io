<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Rapat - MRapat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            padding-top: 70px;
            background-color: #f4f6f9;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn-add-agenda {
            background-color: #007bff;
            color: white;
            margin-bottom: 20px;
        }

        .badge-role {
            padding: 5px 10px;
            font-size: 0.9rem;
        }

        .badge-ketua {
            background-color: #007bff;
            color: #fff;
        }

        .badge-notulen {
            background-color: #ffc107;
            color: #fff;
        }

        .badge-anggota {
            background-color: #28a745;
            color: #fff;
        }

        .table-container {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <!-- Include Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mt-5">
        <!-- Button to Add New Agenda -->
        <button class="btn btn-add-agenda btn-lg" data-toggle="modal" data-target="#addAgendaModal">
            <i class="fas fa-plus"></i> Tambah Agenda Rapat
        </button>

        <!-- Daftar Agenda Rapat -->
        <div class="table-container">
            <h1 class="dashboard-title mb-4">Daftar Agenda Rapat</h1>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Rapat</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Ketua</th>
                        <th>Notulen</th>
                        <th>Peserta</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of Dummy Data -->
                    <tr>
                        <td>Rapat Koordinasi Proyek</td>
                        <td>22 Oktober 2024, 09:00 - 11:00</td>
                        <td>Ruang A</td>
                        <td><span class="badge badge-role badge-ketua">Budi Santoso</span></td>
                        <td><span class="badge badge-role badge-notulen">Ani Setiawan</span></td>
                        <td>
                            <span class="badge badge-role badge-anggota">John Doe</span>,
                            <span class="badge badge-role badge-anggota">Sarah Lee</span>,
                            <span class="badge badge-role badge-anggota">Michael Tan</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Rapat Bulanan Marketing</td>
                        <td>25 Oktober 2024, 13:00 - 15:00</td>
                        <td>Ruang B</td>
                        <td><span class="badge badge-role badge-ketua">Siti Rahma</span></td>
                        <td><span class="badge badge-role badge-notulen">Ali Yusuf</span></td>
                        <td>
                            <span class="badge badge-role badge-anggota">Lina Hermawan</span>,
                            <span class="badge badge-role badge-anggota">Carlos Wijaya</span>,
                            <span class="badge badge-role badge-anggota">David Kim</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Adding Agenda Rapat -->
    <div class="modal fade" id="addAgendaModal" tabindex="-1" aria-labelledby="addAgendaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAgendaModalLabel">Tambah Agenda Rapat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form to Add Agenda Rapat -->
                    <form id="addAgendaForm">
                        <div class="form-group">
                            <label for="nama_rapat">Nama Rapat</label>
                            <input type="text" class="form-control" id="nama_rapat" name="nama_rapat" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_rapat_mulai">Waktu Mulai</label>
                            <input type="datetime-local" class="form-control" id="waktu_rapat_mulai" name="waktu_rapat_mulai" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu_rapat_selesai">Waktu Selesai</label>
                            <input type="datetime-local" class="form-control" id="waktu_rapat_selesai" name="waktu_rapat_selesai" required>
                        </div>
                        <div class="form-group">
                            <label for="ketua_rapat">Ketua Rapat</label>
                            <input type="text" class="form-control" id="ketua_rapat" name="ketua_rapat" required>
                        </div>
                        <div class="form-group">
                            <label for="notulen_rapat">Notulen</label>
                            <input type="text" class="form-control" id="notulen_rapat" name="notulen_rapat" required>
                        </div>
                        <div id="anggotaFields">
                            <div class="form-group">
                                <label for="anggota_rapat_1">Anggota 1</label>
                                <input type="text" class="form-control" id="anggota_rapat_1" name="anggota_rapat[]">
                            </div>
                            <div class="form-group">
                                <label for="anggota_rapat_2">Anggota 2</label>
                                <input type="text" class="form-control" id="anggota_rapat_2" name="anggota_rapat[]">
                            </div>
                            <div class="form-group">
                                <label for="anggota_rapat_3">Anggota 3</label>
                                <input type="text" class="form-control" id="anggota_rapat_3" name="anggota_rapat[]">
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" id="addAnggotaField">Tambah Anggota</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add functionality to dynamically add more Anggota fields
        let anggotaCounter = 3;
        document.getElementById('addAnggotaField').addEventListener('click', function() {
            anggotaCounter++;
            const newField = `
                <div class="form-group">
                    <label for="anggota_rapat_${anggotaCounter}">Anggota ${anggotaCounter}</label>
                    <input type="text" class="form-control" id="anggota_rapat_${anggotaCounter}" name="anggota_rapat[]">
                </div>
            `;
            document.getElementById('anggotaFields').insertAdjacentHTML('beforeend', newField);
        });
    </script>

</body>

</html>