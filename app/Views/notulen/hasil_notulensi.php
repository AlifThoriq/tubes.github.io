<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Notulensi - MRapat</title>
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

        .table-container {
            margin-top: 40px;
        }

        .btn-view-pdf {
            background-color: #007bff;
            color: white;
        }

        .table thead {
            background-color: #343a40;
            color: white;
        }

        .fas.fa-file-pdf {
            color: #dc3545;
        }
    </style>
</head>

<body>

    <!-- Include Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mt-5">
        <!-- Daftar Hasil Notulensi -->
        <div class="table-container">
            <h1 class="dashboard-title mb-4">Daftar Hasil Notulensi</h1>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Rapat</th>
                        <th>Waktu</th>
                        <th>Notulen</th>
                        <th>Ketua</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of Dummy Data -->
                    <tr>
                        <td>Rapat Evaluasi Proyek A</td>
                        <td>15 Oktober 2024, 10:00 - 12:00</td>
                        <td>John Doe</td>
                        <td>Jane Smith</td>
                        <td>
                            <a href="/path/to/pdf_dummy1.pdf" target="_blank" class="btn btn-sm btn-view-pdf">
                                <i class="fas fa-file-pdf"></i> Lihat PDF
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Rapat Strategi Pemasaran Q4</td>
                        <td>20 Oktober 2024, 14:00 - 16:00</td>
                        <td>Alice Johnson</td>
                        <td>Michael Brown</td>
                        <td>
                            <a href="/path/to/pdf_dummy2.pdf" target="_blank" class="btn btn-sm btn-view-pdf">
                                <i class="fas fa-file-pdf"></i> Lihat PDF
                            </a>
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