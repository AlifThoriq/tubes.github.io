<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapat - Sistem Notulen</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS for Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <style>
        .custom-button {
            background-color: #319795;
            color: white;
            border-radius: 8px;
            padding: 10px 16px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #2c7a7b;
        }

        .table-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e0f7fa;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-row:hover {
            background-color: #b2ebf2;
        }

        .container {
            margin-top: 20rem;
            /* Tambahan jarak agar tidak ketutupan navbar */
        }

        /* Modal styling */
        .modal-header,
        .modal-body {
            font-size: 16px;
            color: #333;
        }

        /* Heading style */
        .section-heading {
            font-size: 24px;
            font-weight: 600;
            color: #444;
            text-align: center;
            margin-bottom: 20px;
        }

        .mx-custom {
            margin-top: 130px;
            /* Sesuaikan dengan tinggi navbar atau kebutuhan lainnya */
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mx-custom ">
        <!-- Buttons for Role Selection -->
        <div class="flex space-x-4 mb-6 justify-center">
            <button id="btnKetua" class="custom-button">Sebagai Ketua Rapat</button>
            <button id="btnNotulen" class="custom-button">Sebagai Notulen Rapat</button>
            <button id="btnAnggota" class="custom-button">Sebagai Anggota Rapat</button>
        </div>

        <!-- Rapat Table -->
        <div id="tableContainer" class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="section-heading">Daftar Rapat Berdasarkan Peran</h2>
            <div id="dataTable">
                <!-- Content dynamically changes based on the selected role -->
            </div>
        </div>
    </div>

    <!-- Modal for Detail Rapat -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Rapat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama Rapat:</strong> <span id="modalNamaRapat"></span></p>
                    <p><strong>Topik:</strong> <span id="modalTopik"></span></p>
                    <p><strong>Tanggal:</strong> <span id="modalTanggal"></span></p>
                    <p><strong>Status:</strong> <span id="modalStatus"></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Role Selection and Modal -->
    <script>
        const dummyData = {
            ketua: [{
                    nama: "Rapat 1",
                    topik: "Topik A",
                    tanggal: "2024-10-20",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 2",
                    topik: "Topik B",
                    tanggal: "2024-10-22",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 3",
                    topik: "Topik C",
                    tanggal: "2024-10-25",
                    status: "Selesai"
                },
                {
                    nama: "Rapat 4",
                    topik: "Topik D",
                    tanggal: "2024-10-27",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 5",
                    topik: "Topik E",
                    tanggal: "2024-10-30",
                    status: "Belum Aktif"
                },
            ],
            notulen: [{
                    nama: "Rapat 1",
                    topik: "Topik F",
                    tanggal: "2024-10-21",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 2",
                    topik: "Topik G",
                    tanggal: "2024-10-23",
                    status: "Selesai"
                },
                {
                    nama: "Rapat 3",
                    topik: "Topik H",
                    tanggal: "2024-10-26",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 4",
                    topik: "Topik I",
                    tanggal: "2024-10-28",
                    status: "Belum Aktif"
                },
                {
                    nama: "Rapat 5",
                    topik: "Topik J",
                    tanggal: "2024-10-29",
                    status: "Selesai"
                },
            ],
            anggota: [{
                    nama: "Rapat 1",
                    topik: "Topik K",
                    tanggal: "2024-10-24",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 2",
                    topik: "Topik L",
                    tanggal: "2024-10-26",
                    status: "Selesai"
                },
                {
                    nama: "Rapat 3",
                    topik: "Topik M",
                    tanggal: "2024-10-28",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 4",
                    topik: "Topik N",
                    tanggal: "2024-10-29",
                    status: "Belum Aktif"
                },
                {
                    nama: "Rapat 5",
                    topik: "Topik O",
                    tanggal: "2024-10-31",
                    status: "Selesai"
                },
            ],
        };

        function loadTable(role) {
            const data = dummyData[role];
            const tableContainer = document.getElementById("dataTable");
            tableContainer.innerHTML = "";

            data.forEach((rapat) => {
                const row = document.createElement("div");
                row.className = "table-row";
                row.innerHTML = `
                    <span class="font-semibold text-lg">${rapat.nama} - ${rapat.topik} - ${rapat.tanggal}</span>
                    <button class="custom-button" onclick="showDetailModal('${rapat.nama}', '${rapat.topik}', '${rapat.tanggal}', '${rapat.status}')">Detail Rapat</button>
                `;
                tableContainer.appendChild(row);
            });
        }

        function showDetailModal(nama, topik, tanggal, status) {
            document.getElementById("modalNamaRapat").textContent = nama;
            document.getElementById("modalTopik").textContent = topik;
            document.getElementById("modalTanggal").textContent = tanggal;
            document.getElementById("modalStatus").textContent = status;
            new bootstrap.Modal(document.getElementById("detailModal")).show();
        }

        document.getElementById("btnKetua").addEventListener("click", () => loadTable("ketua"));
        document.getElementById("btnNotulen").addEventListener("click", () => loadTable("notulen"));
        document.getElementById("btnAnggota").addEventListener("click", () => loadTable("anggota"));

        // Load initial data for Ketua role
        loadTable("ketua");
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>