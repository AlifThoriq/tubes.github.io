<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notulensi Rapat - MRapat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 56px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 1.5rem;
        }

        .modal-content {
            padding: 20px;
        }

        .btn-speech {
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .table-responsive {
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
            color: white;
        }

        .btn-excel {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .btn-excel:hover {
            background-color: #218838;
            color: white;
        }

        .btn-pdf {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-pdf:hover {
            background-color: #c82333;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mt-4">
        <h1>Notulensi Rapat</h1>

        <!-- Button for creating a new notulensi -->
        <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#notulensiModal">Buat Notulensi Baru</button>

        <!-- List of notulensi (dummy data) -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Rapat</th>
                        <th>Notulensi</th>
                        <th>Action</th> <!-- New Action Column -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-10-15</td>
                        <td>Rapat Persiapan</td>
                        <td>Notulensi tentang persiapan acara.</td>
                        <td>
                            <button class="btn btn-excel" onclick="exportToExcel('2024-10-15', 'Rapat Persiapan')">Excel</button>
                            <button class="btn btn-pdf" onclick="exportToPDF('2024-10-15', 'Rapat Persiapan')">PDF</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-10-16</td>
                        <td>Rapat Evaluasi</td>
                        <td>Notulensi evaluasi kegiatan bulanan.</td>
                        <td>
                            <button class="btn btn-excel" onclick="exportToExcel('2024-10-16', 'Rapat Evaluasi')">Excel</button>
                            <button class="btn btn-pdf" onclick="exportToPDF('2024-10-16', 'Rapat Evaluasi')">PDF</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for creating new notulensi -->
    <div class="modal fade" id="notulensiModal" tabindex="-1" role="dialog" aria-labelledby="notulensiModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notulensiModalLabel">Buat Notulensi Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formNotulensi">
                        <!-- Pilihan rapat (dummy data) -->
                        <div class="form-group">
                            <label for="namaRapat">Pilih Rapat</label>
                            <select class="form-control" id="namaRapat" name="namaRapat" required>
                                <option value="">Pilih rapat</option>
                                <option>Rapat Persiapan</option>
                                <option>Rapat Evaluasi</option>
                            </select>
                        </div>

                        <!-- Speech-to-Text Notulensi -->
                        <div class="form-group">
                            <label for="notulensi">Notulensi</label>
                            <textarea class="form-control" id="notulensi" rows="5" placeholder="Catatan notulensi" required></textarea>
                            <button type="button" class="btn btn-secondary btn-speech" onclick="startSpeechRecognition()">Mulai Rekam (Speech-to-Text)</button>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Simpan Notulensi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Web Speech API for speech-to-text
        function startSpeechRecognition() {
            if ('webkitSpeechRecognition' in window) {
                var recognition = new webkitSpeechRecognition();
                recognition.lang = 'id-ID'; // Set to Indonesian or adjust as needed
                recognition.continuous = false;
                recognition.interimResults = false;

                recognition.onstart = function() {
                    console.log('Voice recognition started...');
                };

                recognition.onresult = function(event) {
                    var transcript = event.results[0][0].transcript;
                    document.getElementById('notulensi').value += transcript + ' ';
                };

                recognition.onerror = function(event) {
                    console.error('Error occurred in recognition: ' + event.error);
                };

                recognition.onend = function() {
                    console.log('Voice recognition ended.');
                };

                recognition.start();
            } else {
                alert('Browser Anda tidak mendukung Web Speech API');
            }
        }

        // Dummy functions for export
        function exportToExcel(tanggal, namaRapat) {
            alert('Export to Excel for ' + namaRapat + ' on ' + tanggal);
            // Implement your export logic here
        }

        function exportToPDF(tanggal, namaRapat) {
            alert('Export to PDF for ' + namaRapat + ' on ' + tanggal);
            // Implement your export logic here
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>