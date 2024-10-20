<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">MRapat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Vertical Navbar -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/permohonan-rapat">Permohonan Rapat</a>
            <a class="nav-link" href="/notulen">Notulensi Rapat</a>
            <a class="nav-link" href="/absensi">Absensi Rapat</a>
        </li>
    </ul>
</div>

<style>
    .sidebar {
        position: fixed;
        top: 56px;
        /* Jarak dari navbar horizontal */
        left: 0;
        width: 200px;
        /* Lebar sidebar */
        height: calc(100% - 56px);
        /* Sesuaikan tinggi sidebar */
        background-color: #f8f9fa;
        /* Warna latar belakang sidebar */
        padding-top: 20px;
        /* Ruang atas di sidebar */
        border-right: 1px solid #ddd;
        /* Garis pemisah */
    }

    .sidebar .nav-link {
        color: #333;
        /* Warna teks untuk link sidebar */
    }

    .sidebar .nav-link:hover {
        background-color: #007bff;
        /* Warna latar belakang saat hover */
        color: white;
        /* Warna teks saat hover */
    }
</style>