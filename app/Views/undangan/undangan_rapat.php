<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Undangan - Sistem Undangan</title>
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
            /* Green for "Detail" button */
        }

        .custom-button-attend {
            background-color: #4db6ac;
            /* Color for "Hadir" button */
        }

        .custom-button-not-attend {
            background-color: #e57373;
            /* Color for "Tidak Hadir" button */
        }

        .meeting-item {
            background-color: #e0f7fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .tab-button {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #0288d1;
            color: white;
            border-radius: 8px;
            margin: 0 5px;
            transition: background-color 0.3s ease;
        }

        .tab-button.active {
            background-color: #4db6ac;
            /* Active tab color */
        }

        .modal-content {
            border-radius: 8px;
        }

        .close-btn {
            float: right;
            cursor: pointer;
            color: red;
        }

        /* Additional styles for headings */
        .section-heading {
            font-size: 24px;
            font-weight: 600;
            color: #444;
            text-align: center;
            margin-bottom: 20px;
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
        <h1 class="section-heading">Lihat Undangan</h1>

        <!-- Tabs for category -->
        <div class="flex space-x-4 mb-6 justify-center">
            <button class="custom-button" onclick="showTab('not-followed')">Tidak Diikuti</button>
            <button class="custom-button" onclick="showTab('confirmed')">Sudah Konfirmasi</button>
            <button class="custom-button" onclick="showTab('not-confirmed')">Belum Konfirmasi</button>
        </div>

        <!-- Meeting lists for each tab -->
        <div id="not-followed" class="meeting-list">
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik A - 2024-10-01</span>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat A', 'Topik A', '10:00', '12:00', 'Tidak Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik D - 2024-10-04</span>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat D', 'Topik D', '09:00', '11:00', 'Tidak Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik E - 2024-10-05</span>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat E', 'Topik E', '13:00', '15:00', 'Tidak Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik F - 2024-10-06</span>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat F', 'Topik F', '08:00', '10:00', 'Tidak Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik G - 2024-10-07</span>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat G', 'Topik G', '14:00', '16:00', 'Tidak Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik H - 2024-10-08</span>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat H', 'Topik H', '15:00', '17:00', 'Tidak Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
        </div>

        <div id="confirmed" class="meeting-list hidden">
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik B - 2024-10-02</span>
                <button class="custom-button custom-button-attend" onclick="showStatus('Hadir')">
                    <i class="bi bi-check-circle"></i> Status
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showEdit('Rapat B', 'Topik B', '10:00', '12:00')">
                    <i class="bi bi-pencil-square"></i> Edit Konfirmasi
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat B', 'Topik B', '10:00', '12:00', 'Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik I - 2024-10-09</span>
                <button class="custom-button custom-button-attend" onclick="showStatus('Hadir')">
                    <i class="bi bi-check-circle"></i> Status
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showEdit('Rapat I', 'Topik I', '11:00', '13:00')">
                    <i class="bi bi-pencil-square"></i> Edit Konfirmasi
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat I', 'Topik I', '11:00', '13:00', 'Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik J - 2024-10-10</span>
                <button class="custom-button custom-button-attend" onclick="showStatus('Hadir')">
                    <i class="bi bi-check-circle"></i> Status
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showEdit('Rapat J', 'Topik J', '14:00', '16:00')">
                    <i class="bi bi-pencil-square"></i> Edit Konfirmasi
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat J', 'Topik J', '14:00', '16:00', 'Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik K - 2024-10-11</span>
                <button class="custom-button custom-button-attend" onclick="showStatus('Hadir')">
                    <i class="bi bi-check-circle"></i> Status
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showEdit('Rapat K', 'Topik K', '09:00', '11:00')">
                    <i class="bi bi-pencil-square"></i> Edit Konfirmasi
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat K', 'Topik K', '09:00', '11:00', 'Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik L - 2024-10-12</span>
                <button class="custom-button custom-button-attend" onclick="showStatus('Hadir')">
                    <i class="bi bi-check-circle"></i> Status
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showEdit('Rapat L', 'Topik L', '12:00', '14:00')">
                    <i class="bi bi-pencil-square"></i> Edit Konfirmasi
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat L', 'Topik L', '12:00', '14:00', 'Hadir')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
        </div>

        <div id="not-confirmed" class="meeting-list hidden">
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik C - 2024-10-03</span>
                <button class="custom-button custom-button-attend" onclick="showConfirm('Hadir')">
                    <i class="bi bi-check-circle"></i> Hadir
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showConfirm('Tidak Hadir')">
                    <i class="bi bi-x-circle"></i> Tidak Hadir
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat C', 'Topik C', '12:00', '14:00', 'Belum Konfirmasi')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik M - 2024-10-13</span>
                <button class="custom-button custom-button-attend" onclick="showConfirm('Hadir')">
                    <i class="bi bi-check-circle"></i> Hadir
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showConfirm('Tidak Hadir')">
                    <i class="bi bi-x-circle"></i> Tidak Hadir
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat M', 'Topik M', '08:00', '10:00', 'Belum Konfirmasi')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik N - 2024-10-14</span>
                <button class="custom-button custom-button-attend" onclick="showConfirm('Hadir')">
                    <i class="bi bi-check-circle"></i> Hadir
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showConfirm('Tidak Hadir')">
                    <i class="bi bi-x-circle"></i> Tidak Hadir
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat N', 'Topik N', '15:00', '17:00', 'Belum Konfirmasi')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik O - 2024-10-15</span>
                <button class="custom-button custom-button-attend" onclick="showConfirm('Hadir')">
                    <i class="bi bi-check-circle"></i> Hadir
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showConfirm('Tidak Hadir')">
                    <i class="bi bi-x-circle"></i> Tidak Hadir
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat O', 'Topik O', '09:00', '11:00', 'Belum Konfirmasi')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
            <div class="meeting-item flex justify-between items-center">
                <span>Rapat - Topik P - 2024-10-16</span>
                <button class="custom-button custom-button-attend" onclick="showConfirm('Hadir')">
                    <i class="bi bi-check-circle"></i> Hadir
                </button>
                <button class="custom-button custom-button-not-attend" onclick="showConfirm('Tidak Hadir')">
                    <i class="bi bi-x-circle"></i> Tidak Hadir
                </button>
                <button class="custom-button custom-button-detail" onclick="showDetail('Rapat P', 'Topik P', '13:00', '15:00', 'Belum Konfirmasi')">
                    <i class="bi bi-info-circle"></i> Detail Undangan
                </button>
            </div>
        </div>

        <!-- Modal structure -->
        <div id="detailModal" class="modal hidden fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="modal-dialog flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white rounded-lg shadow-lg w-11/12 md:w-1/3">
                    <div class="modal-header flex justify-between p-4 border-b">
                        <h2 id="modal-title" class="font-bold">Detail Rapat</h2>
                        <span class="close-btn" onclick="closeModal()">&times;</span>
                    </div>
                    <div class="modal-body p-4">
                        <p id="meetingDetails"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal structure for Edit Confirmation -->
        <div id="editModal" class="modal hidden fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="modal-dialog flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white rounded-lg shadow-lg w-11/12 md:w-1/3">
                    <div class="modal-header flex justify-between p-4 border-b">
                        <h2 id="edit-modal-title" class="font-bold">Edit Konfirmasi</h2>
                        <span class="close-btn" onclick="closeEditModal()">&times;</span>
                    </div>
                    <div class="modal-body p-4">
                        <p id="editDetails"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal structure for Attendance Status -->
        <div id="statusModal" class="modal hidden fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="modal-dialog flex items-center justify-center min-h-screen">
                <div class="modal-content bg-white rounded-lg shadow-lg w-11/12 md:w-1/3">
                    <div class="modal-header flex justify-between p-4 border-b">
                        <h2 id="status-modal-title" class="font-bold">Status Kehadiran</h2>
                        <span class="close-btn" onclick="closeStatusModal()">&times;</span>
                    </div>
                    <div class="modal-body p-4">
                        <p id="statusDetails"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to show the selected tab
        function showTab(tabName) {
            const tabs = document.querySelectorAll('.meeting-list');
            tabs.forEach(tab => tab.classList.add('hidden'));
            document.getElementById(tabName).classList.remove('hidden');
        }

        // Function to show meeting details in modal
        function showDetail(name, topic, startTime, endTime, status) {
            const details = `Nama Rapat: ${name}<br>Topik: ${topic}<br>Waktu: ${startTime} - ${endTime}<br>Status: ${status}`;
            document.getElementById('meetingDetails').innerHTML = details;
            document.getElementById('detailModal').classList.remove('hidden');
        }

        // Function to close the detail modal
        function closeModal() {
            document.getElementById('detailModal').classList.add('hidden');
        }

        // Function to show edit confirmation in modal
        function showEdit(name, topic, startTime, endTime) {
            const details = `Nama Rapat: ${name}<br>Topik: ${topic}<br>Waktu: ${startTime} - ${endTime}`;
            document.getElementById('editDetails').innerHTML = details;
            document.getElementById('editModal').classList.remove('hidden');
        }

        // Function to close edit confirmation modal
        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }

        // Function to show status in modal
        function showStatus(status) {
            const details = `Status Kehadiran: ${status}`;
            document.getElementById('statusDetails').innerHTML = details;
            document.getElementById('statusModal').classList.remove('hidden');
        }

        // Function to close status modal
        function closeStatusModal() {
            document.getElementById('statusModal').classList.add('hidden');
        }
    </script>

</body>

</html>