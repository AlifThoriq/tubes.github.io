<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Notulensi - MRapat</title>
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

        .btn-approve {
            background-color: #28a745;
            color: white;
        }

        .btn-reject {
            background-color: #dc3545;
            color: white;
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
        <!-- Daftar Persetujuan Notulensi -->
        <div class="table-container">
            <h1 class="dashboard-title mb-4">Daftar Notulensi untuk Persetujuan</h1>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Rapat</th>
                        <th>Waktu</th>
                        <th>Poin Pembahasan</th>
                        <th>Keputusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of Dummy Data -->
                    <tr>
                        <td>Rapat Koordinasi Proyek</td>
                        <td>22 Oktober 2024, 09:00 - 11:00</td>
                        <td>Diskusi Progres Pembangunan</td>
                        <td>Setujui Pemakaian Material X</td>
                        <td>
                            <button class="btn btn-sm btn-approve"><i class="fas fa-check"></i> Setujui</button>
                            <button class="btn btn-sm btn-reject"><i class="fas fa-times"></i> Tolak</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Rapat Bulanan Marketing</td>
                        <td>25 Oktober 2024, 13:00 - 15:00</td>
                        <td>Evaluasi Kampanye Q4</td>
                        <td>Lanjutkan Strategi</td>
                        <td>
                            <button class="btn btn-sm btn-approve"><i class="fas fa-check"></i> Setujui</button>
                            <button class="btn btn-sm btn-reject"><i class="fas fa-times"></i> Tolak</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>