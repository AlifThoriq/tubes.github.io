<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notulensi Rapat - MRapat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
        }

        .btn-add-point {
            background-color: #28a745;
            color: white;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table-container {
            margin-top: 40px;
        }

        .input-group-text {
            background-color: #007bff;
            color: #fff;
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        .btn-excel {
            background-color: #28a745;
        }

        .btn-pdf {
            background-color: #dc3545;
        }
    </style>
</head>

<body>

    <!-- Include Navbar -->
    <?= $this->include('navbar/navbar'); ?>

    <div class="container mt-5">
        <!-- Button to Add New Notulensi Point -->
        <button class="btn btn-add-point btn-lg" data-toggle="modal" data-target="#notulensiModal">
            <i class="fas fa-plus"></i> Tambah Poin Notulensi
        </button>

        <!-- List of notulensi -->
        <div class="table-container mt-5">
            <h1 class="dashboard-title mb-4">Daftar Hasil Notulensi</h1>
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Rapat</th>
                        <th>Waktu</th>
                        <th>Notulen</th>
                        <th>Ketua</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rapat Evaluasi Proyek A</td>
                        <td>15 Oktober 2024, 10:00 - 12:00</td>
                        <td>John Doe</td>
                        <td>Jane Smith</td>
                        <td>
                            <a href="/path/to/pdf_dummy1.pdf" target="_blank" class="btn btn-sm btn-view-pdf">
                                <i class="fas fa-file-pdf"></i> Lihat PDF
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Rapat Strategi Pemasaran Q4</td>
                        <td>20 Oktober 2024, 14:00 - 16:00</td>
                        <td>Alice Johnson</td>
                        <td>Michael Brown</td>
                        <td>
                            <a href="/path/to/pdf_dummy2.pdf" target="_blank" class="btn btn-sm btn-view-pdf">
                                <i class="fas fa-file-pdf"></i> Lihat PDF
                            </a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>