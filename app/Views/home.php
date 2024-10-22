<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MRapat</title>
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
            margin-bottom: 2rem;
        }

        .table th,
        .table td {
            vertical-align: middle;
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

        .dashboard-title {
            font-weight: bold;
            color: #555;
        }

        /* Navbar Customization */
        .navbar-brand {
            font-size: 1.5rem;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link i {
            margin-right: 5px;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa !important;
            background-color: #007bff;
            border-radius: 5px;
        }

        .navbar-nav .nav-item.active .nav-link {
            color: #ffffff !important;
            background-color: #0056b3;
            border-radius: 5px;
        }

        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- Include Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mt-5">
        <!-- Daftar Permohonan Rapat -->
        <div class="table-container">
            <h1 class="dashboard-title mb-4">Daftar Permohonan Rapat yang Disetujui</h1>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Nama Rapat</th>
                        <th>Ruangan Rapat</th>
                        <th>Ketua</th>
                        <th>Notulen</th>
                        <th>Peserta</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example of Dummy Data -->
                    <tr>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Rapat Koordinasi Proyek</td>
                        <td>Ruang A</td>
                        <td><span class="badge badge-role badge-ketua">Budi Santoso</span></td>
                        <td><span class="badge badge-role badge-notulen">Ani Setiawan</span></td>
                        <td>
                            <span class="badge badge-role badge-anggota">John Doe</span>,
                            <span class="badge badge-role badge-anggota">Sarah Lee</span