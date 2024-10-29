<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Notulen</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS for Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
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
        .nav-link {
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s ease, transform 0.3s ease;
            color: white;
        }

        .nav-link:hover {
            color: #ffffff;
            transform: translateY(-2px);
        }

        .icon-button {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .icon-button:hover {
            background-color: #319795;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }


        .content-wrapper {
            display: flex;
            justify-content: center;
            padding: 20px;
            margin-top: 80px;
            /* Offset to prevent overlap with navbar */
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
            background-color: #a0e1e9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #c3f0f4;
            color: #055a63;
            border-radius: 8px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .card-number {
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Include Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="content-wrapper">
        <!-- Responsive Dashboard Cards -->
        <div class="card-container">
            <!-- Ketua Rapat Section -->
            <div class="card">
                <div class="card-title">Ketua Rapat</div>
                <div class="card-number">7</div>
            </div>
            <div class="card">
                <div class="card-title">Ketua</div>
                <div class="card-number">12</div>
            </div>
            <div class="card">
                <div class="card-title">Notulensi</div>
                <div class="card-number">5</div>
            </div>

            <!-- Notulen Section -->
            <div class="card">
                <div class="card-title">Anggota</div>
                <div class="card-number">23</div>
            </div>
            <div class="card">
                <div class="card-title">Notulensi Rapat</div>
                <div class="card-number">3</div>
            </div>
            <div class="card">
                <div class="card-title">Tidak Diikuti</div>
                <div class="card-number">5</div>
            </div>

            <!-- Undangan Rapat Section -->
            <div class="card">
                <div class="card-title">Sudah Konfirmasi</div>
                <div class="card-number">8</div>
            </div>
            <div class="card">
                <div class="card-title">Belum Konfirmasi</div>
                <div class="card-number">13</div>
            </div>
        </div>
    </div>

</body>

</html>