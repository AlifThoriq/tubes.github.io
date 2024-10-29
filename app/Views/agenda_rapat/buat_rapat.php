<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Rapat - Sistem Notulen</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS for Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <style>
        /* Custom Styles */
        .icon-button {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .icon-button:hover {
            background-color: #319795;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .fixed-fab {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #319795;
            color: white;
            border-radius: 50%;
            padding: 16px;
            cursor: pointer;
        }

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

        /* Custom Styles */
        .icon-button {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .icon-button:hover {
            background-color: #319795;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .fixed-fab {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #319795;
            color: white;
            border-radius: 50%;
            padding: 16px;
            cursor: pointer;
        }

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

        /* Styles for Status Button */
        .status-badge {
            padding: 6px 12px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .status-badge:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .status-aktif {
            background-color: #48BB78;
            /* Green for Active */
        }

        .status-belum-aktif {
            background-color: #A0AEC0;
            /* Gray for Not Active */
        }

        .status-selesai {
            background-color: #4299E1;
            /* Blue for Finished */
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <?= $this->include('navbar/navbar'); ?>


    <div class="container mx-custom">
        <!-- Rapat Table -->
        <div id="tableContainer" class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="section-heading">Undangan Rapat</h2>
            <div id="dataTable">
                <!-- Content dynamically added here -->
            </div>
        </div>
    </div>

    <!-- Modal Detail/Edit Rapat -->
    <div class="modal fade" id="detailEditModal" tabindex="-1" aria-labelledby="detailEditModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailEditModalLabel">Detail/Edit Rapat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="detailNamaRapat" class="form-label">Nama Rapat</label>
                            <input type="text" class="form-control" id="detailNamaRapat" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="detailTopikRapat" class="form-label">Topik Rapat</label>
                            <input type="text" class="form-control" id="detailTopikRapat" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="detailTanggalRapat" class="form-label">Tanggal Rapat</label>
                            <input type="text" class="form-control" id="detailTanggalRapat" readonly>
                        </div>
                        <button type="button" class="btn btn-primary mt-3">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Buat Notulen -->
    <div class="modal fade" id="notulenModal" tabindex="-1" aria-labelledby="notulenModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notulenModalLabel">Buat Notulen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="namaRapat" class="form-label">Nama Rapat</label>
                            <input type="text" class="form-control" id="namaRapat" readonly>
                        </div>
                        <!-- Speech-to-Text Notulensi -->
                        <div class="form-group">
                            <label for="notulensi">Notulensi</label>
                            <textarea class="form-control" id="notulensi" rows="5" placeholder="Catatan notulensi" required></textarea>
                            <button type="button" id="start-btn" class="btn btn-secondary btn-speech">Mulai Rekam</button>
                            <button type="button" id="stop-btn" class="btn btn-secondary btn-speech">Hentikan Rekam</button>
                            <p id="output"></p>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Notulensi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for displaying rapat data and showing modal -->
    <script>
        const dummyData = [{
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
        ];

        function loadTable() {
            const tableContainer = document.getElementById("dataTable");
            tableContainer.innerHTML = "";

            dummyData.forEach((rapat) => {
                const row = document.createElement("div");
                row.className = "table-row";

                // Set CSS class based on status
                let statusClass = "";
                if (rapat.status === "Aktif") {
                    statusClass = "status-badge status-aktif";
                } else if (rapat.status === "Belum Aktif") {
                    statusClass = "status-badge status-belum-aktif";
                } else if (rapat.status === "Selesai") {
                    statusClass = "status-badge status-selesai";
                }

                row.innerHTML = `
            <span class="font-semibold text-lg">${rapat.nama} - ${rapat.topik} - ${rapat.tanggal}</span>
            <div class="flex space-x-2">
                <span class="${statusClass}">${rapat.status}</span>
                <button class="custom-button" onclick="showNotulenModal('${rapat.nama}')">Buat Notulensi</button>
                <button class="custom-button" onclick="showDetailEditModal('${rapat.nama}', '${rapat.topik}', '${rapat.tanggal}')">Detail/Edit</button>
            </div>
        `;

                tableContainer.appendChild(row);
            });
        }


        function showNotulenModal(namaRapat) {
            document.getElementById("namaRapat").value = namaRapat;
            new bootstrap.Modal(document.getElementById("notulenModal")).show();
        }

        function showDetailEditModal(nama, topik, tanggal) {
            document.getElementById("detailNamaRapat").value = nama;
            document.getElementById("detailTopikRapat").value = topik;
            document.getElementById("detailTanggalRapat").value = tanggal;
            new bootstrap.Modal(document.getElementById("detailEditModal")).show();
        }

        // Load initial data
        loadTable();
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Floating Action Button for Adding Rapat -->
    <div class="fixed-fab" onclick="openAddRapatModal()">
        <i class="bi bi-plus-lg text-white text-2xl"></i>
    </div>


    <!-- Modal Tambah Rapat Baru -->
    <div class="modal fade" id="addRapatModal" tabindex="-1" aria-labelledby="addRapatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRapatModalLabel">Tambah Rapat Baru</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="namaRapatBaru" class="form-label">Nama Rapat</label>
                            <input type="text" class="form-control" id="namaRapatBaru">
                        </div>
                        <div class="mb-3">
                            <label for="ruangan" class="form-label">Ruangan</label>
                            <input type="text" class="form-control" id="ruangan">
                        </div>
                        <div class="mb-3">
                            <label for="waktuMulai" class="form-label">Waktu Mulai</label>
                            <input type="datetime-local" class="form-control" id="waktuMulai">
                        </div>
                        <div class="mb-3">
                            <label for="waktuSelesai" class="form-label">Waktu Selesai</label>
                            <input type="datetime-local" class="form-control" id="waktuSelesai">
                        </div>
                        <div class="mb-3">
                            <label for="ketuaRapat" class="form-label">Nama Ketua</label>
                            <input type="text" class="form-control" id="ketuaRapat">
                        </div>
                        <div class="mb-3">
                            <label for="notulenRapat" class="form-label">Nama Notulen</label>
                            <input type="text" class="form-control" id="notulenRapat">
                        </div>
                        <div id="anggotaFields">
                            <div class="mb-3">
                                <label for="anggota1" class="form-label">Anggota 1</label>
                                <input type="text" class="form-control" id="anggota1">
                            </div>
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="addAnggotaField()">Tambah Anggota</button>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openAddRapatModal() {
            new bootstrap.Modal(document.getElementById('addRapatModal')).show();
        }

        function addAnggotaField() {
            const anggotaFields = document.getElementById('anggotaFields');
            const newField = document.createElement('div');
            newField.className = 'mb-3';
            newField.innerHTML = `<label class="form-label">Anggota</label><input type="text" class="form-control">`;
            anggotaFields.appendChild(newField);
        }
    </script>
    <script>
        const output = document.getElementById('output');
        const startBtn = document.getElementById('start-btn');
        const stopBtn = document.getElementById('stop-btn');
        let recognition;
        let finalTranscript = '';

        if ('webkitSpeechRecognition' in window) {
            recognition = new webkitSpeechRecognition();
            recognition.lang = 'id-ID';
            recognition.continuous = true;
            recognition.interimResults = true;

            recognition.onresult = (event) => {
                let interimTranscript = '';
                for (let i = event.resultIndex; i < event.results.length; i++) {
                    let transcript = event.results[i][0].transcript;
                    if (event.results[i].isFinal) {
                        finalTranscript += transcript + ' ';
                        document.getElementById('notulensi').value = finalTranscript;
                    } else {
                        interimTranscript += transcript;
                    }
                }
                output.innerHTML = `<strong>Final:</strong> ${finalTranscript}<br><strong>Interim:</strong> ${interimTranscript}`;
            };

            recognition.onerror = (event) => {
                console.error('Error occurred in recognition:', event.error);
                output.innerText = 'Error: ' + event.error;
            };

            recognition.onend = () => {
                console.log("Speech recognition ended.");
            };

            startBtn.addEventListener('click', () => {
                recognition.start();
                output.innerText = "Listening...";
            });

            stopBtn.addEventListener('click', () => {
                recognition.stop();
                output.innerText += "\nRecording stopped.";
            });
        } else {
            output.innerText = 'Web Speech API is not supported in this browser.';
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>