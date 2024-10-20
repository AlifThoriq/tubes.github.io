<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">MRapat - Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Vertical Navbar for Admin -->
<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/permohonan-rapat">Permohonan Rapat</a>
            <a class="nav-link" href="/notulen">Notulensi Rapat</a>
            <a class="nav-link" href="/absensi">Absensi Rapat</a>
            <a class="nav-link" href="/admin">Persetujuan Rapat</a> <!-- New Link -->
        </li>
    </ul>
</div>

<style>
    .sidebar {
        position: fixed;
        top: 56px;
        left: 0;
        width: 200px;
        height: calc(100% - 56px);
        background-color: #f8f9fa;
        padding-top: 20px;
        border-right: 1px solid #ddd;
    }

    .sidebar .nav-link {
        color: #333;
    }

    .sidebar .nav-link:hover {
        background-color: #007bff;
        color: white;
    }
</style>