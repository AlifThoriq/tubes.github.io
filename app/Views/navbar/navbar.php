<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">
            <i class="fas fa-clipboard-list"></i> MRapat
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notulen"><i class="fas fa-pencil-alt"></i> Notulensi Rapat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/persetujuan-notulen"><i class="fas fa-check-circle"></i> Persetujuan Notulensi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/agenda-rapat"><i class="fas fa-calendar-alt"></i> Agenda Rapat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notulen/hasil_rapat"><i class="fas fa-file-alt"></i> Hasil Notulensi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
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