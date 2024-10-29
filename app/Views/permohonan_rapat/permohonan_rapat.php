<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Notulen - Sistem Notulen</title>
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

        .custom-button-detail {
            background-color: #4CAF50;
            /* Hijau untuk tombol "Detail" */
        }

        .custom-button-print {
            background-color: #2196F3;
            /* Biru untuk tombol "Cetak" */
        }

        .custom-button-download {
            background-color: #FF9800;
            /* Oranye untuk tombol "Unduh" */
        }

        .custom-button-edit {
            background-color: #9C27B0;
            /* Ungu untuk tombol "Edit" */
        }

        .custom-button-share {
            background-color: #FF5722;
            /* Merah oranye untuk tombol "Share" */
        }

        .custom-button-acc {
            background-color: #F44336;
            /* Merah untuk tombol "ACC" */
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

        .modal-header,
        .modal-body {
            font-size: 16px;
            color: #333;
        }

        .section-heading {
            font-size: 24px;
            font-weight: 600;
            color: #444;
            text-align: center;
            margin-bottom: 20px;
        }

        .mx-custom {
            margin-top: 130px;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mx-custom">
        <h1 class="section-heading">Lihat Notulen</h1>

        <!-- Buttons for Role Selection -->
        <div class="flex space-x-4 mb-6 justify-center">
            <button onclick="loadRole('ketua')" class="custom-button">Sebagai Ketua Rapat</button>
            <button onclick="loadRole('notulen')" class="custom-button">Sebagai Notulen Rapat</button>
            <button onclick="loadRole('anggota')" class="custom-button">Sebagai Anggota Rapat</button>
        </div>

        <!-- Notulen Table for Role-Based Display -->
        <div id="notulenContainer" class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="section-heading">Daftar Notulen Berdasarkan Peran</h2>
            <div id="dataTable"></div>
        </div>

        <!-- Modal for Detail Notulen -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Detail Notulen</h5>
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
    </div>

    <script>
        // Dummy data
        const notulenData = {
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
                }
            ],
            notulen: [{
                    nama: "Rapat 6",
                    topik: "Topik F",
                    tanggal: "2024-10-21",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 7",
                    topik: "Topik G",
                    tanggal: "2024-10-23",
                    status: "Selesai"
                },
                {
                    nama: "Rapat 8",
                    topik: "Topik H",
                    tanggal: "2024-10-26",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 9",
                    topik: "Topik I",
                    tanggal: "2024-10-28",
                    status: "Belum Aktif"
                },
                {
                    nama: "Rapat 10",
                    topik: "Topik J",
                    tanggal: "2024-10-29",
                    status: "Selesai"
                }
            ],
            anggota: [{
                    nama: "Rapat 11",
                    topik: "Topik K",
                    tanggal: "2024-10-24",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 12",
                    topik: "Topik L",
                    tanggal: "2024-10-26",
                    status: "Selesai"
                },
                {
                    nama: "Rapat 13",
                    topik: "Topik M",
                    tanggal: "2024-10-28",
                    status: "Aktif"
                },
                {
                    nama: "Rapat 14",
                    topik: "Topik N",
                    tanggal: "2024-10-29",
                    status: "Belum Aktif"
                },
                {
                    nama: "Rapat 15",
                    topik: "Topik O",
                    tanggal: "2024-10-31",
                    status: "Selesai"
                }
            ]
        };

        // Function to load data based on role
        function loadRole(role) {
            const data = notulenData[role];
            const container = document.getElementById("notulenContainer");
            container.innerHTML = "";

            data.forEach(item => {
                const row = document.createElement("div");
                row.className = "table-row";

                let buttonsHTML = `
    <button class="custom-button custom-button-detail" onclick="showDetail('${item.nama}', '${item.topik}', '${item.tanggal}', '${item.status}')">Detail</button>
    <button class="custom-button custom-button-print" onclick="printDocument('${item.nama}')">Cetak</button>
    <button class="custom-button custom-button-download" onclick="downloadDocument('${item.nama}')">Unduh</button>`;

                if (role === "ketua" || role === "notulen") {
                    buttonsHTML += `<button class="custom-button custom-button-edit" onclick="editDocument('${item.nama}')">Edit</button>`;
                    buttonsHTML += `<button class="custom-button custom-button-share" onclick="shareDocument('${item.nama}')">Share</button>`;
                }
                if (role === "ketua") {
                    buttonsHTML += `<button class="custom-button custom-button-acc" onclick="approveDocument('${item.nama}')">ACC</button>`;
                }


                row.innerHTML = `
                    <div>
                        <p class="font-semibold text-lg">${item.nama} - ${item.topik}</p>
                        <p>${item.tanggal} - Status: ${item.status}</p>
                    </div>
                    <div class="flex space-x-2">
                        ${buttonsHTML}
                    </div>`;
                container.appendChild(row);
            });
        }

        // Placeholder functions for button actions
        function showDetail(nama, topik, tanggal, status) {
            document.getElementById("modalNamaRapat").textContent = nama;
            document.getElementById("modalTopik").textContent = topik;
            document.getElementById("modalTanggal").textContent = tanggal;
            document.getElementById("modalStatus").textContent = status;
            new bootstrap.Modal(document.getElementById("detailModal")).show();
        }

        function printDocument(nama) {
            alert(`Print document: ${nama}`);
        }

        function downloadDocument(nama) {
            alert(`Download document: ${nama}`);
        }

        function editDocument(nama) {
            alert(`Edit document: ${nama}`);
        }

        function shareDocument(nama) {
            alert(`Share document: ${nama}`);
        }

        function approveDocument(nama) {
            alert(`Approve document: ${nama}`);
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>