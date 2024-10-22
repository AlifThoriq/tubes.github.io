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
                            <button type="button" id="start-btn" class="btn btn-secondary btn-speech">Mulai Rekam</button>
                            <button type="button" id="stop-btn" class="btn btn-secondary btn-speech">Hentikan Rekam</button>
                            <p id="output"></p>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Notulensi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const output = document.getElementById('output');
        const startBtn = document.getElementById('start-btn');
        const stopBtn = document.getElementById('stop-btn');
        let recognition;
        let finalTranscript = ''; // Variabel untuk menyimpan semua teks yang dihasilkan

        // Cek apakah Web Speech API tersedia di browser
        if ('webkitSpeechRecognition' in window) {
            recognition = new webkitSpeechRecognition();
            recognition.lang = 'id-ID'; // Sesuaikan bahasa pengenalan suara
            recognition.continuous = true; // Rekaman berjalan terus menerus
            recognition.interimResults = true; // Menampilkan hasil sementara saat merekam

            recognition.onresult = (event) => {
                let interimTranscript = '';

                for (let i = event.resultIndex; i < event.results.length; i++) {
                    let transcript = event.results[i][0].transcript;
                    if (event.results[i].isFinal) {
                        finalTranscript += transcript + ' ';
                        document.getElementById('notulensi').value = finalTranscript; // Tambahkan hasil akhir ke textarea
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>