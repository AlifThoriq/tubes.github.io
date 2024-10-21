<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuous Voice to Text (Unlimited)</title>
</head>

<body>
    <h1>Voice to Text (Continuous Recording with Unlimited Input)</h1>
    <button id="start-btn">Start Recording</button>
    <button id="stop-btn">Stop Recording</button>
    <p id="output"></p>

    <script>
        const output = document.getElementById('output');
        const startBtn = document.getElementById('start-btn');
        const stopBtn = document.getElementById('stop-btn');
        let recognition;
        let finalTranscript = ''; // Variabel untuk menyimpan semua teks yang dihasilkan

        // Cek apakah Web Speech API tersedia di browser
        if ('webkitSpeechRecognition' in window) {
            recognition = new webkitSpeechRecognition();
            recognition.lang = 'en-US'; // Sesuaikan bahasa pengenalan suara
            recognition.continuous = true; // Rekaman berjalan terus menerus
            recognition.interimResults = true; // Menampilkan hasil sementara saat merekam

            // Event ketika hasil pengenalan suara diterima
            recognition.onresult = (event) => {
                let interimTranscript = ''; // Variabel sementara untuk menampung transkrip sementara

                // Loop melalui hasil dan pisahkan antara hasil sementara dan final
                for (let i = event.resultIndex; i < event.results.length; i++) {
                    let transcript = event.results[i][0].transcript;
                    if (event.results[i].isFinal) {
                        finalTranscript += transcript + ' '; // Gabungkan hasil final ke dalam variabel global
                    } else {
                        interimTranscript += transcript;
                    }
                }

                // Tampilkan teks final dan teks sementara
                output.innerHTML = `<strong>Final:</strong> ${finalTranscript}<br><strong>Interim:</strong> ${interimTranscript}`;
            };

            recognition.onerror = (event) => {
                console.error('Error occurred in recognition:', event.error);
                output.innerText = 'Error: ' + event.error;
            };

            recognition.onend = () => {
                console.log("Speech recognition ended.");
            };

            // Mulai rekaman ketika tombol start ditekan
            startBtn.addEventListener('click', () => {
                recognition.start();
                output.innerText = "Listening...";
            });

            // Hentikan rekaman ketika tombol stop ditekan
            stopBtn.addEventListener('click', () => {
                recognition.stop();
                output.innerText += "\nRecording stopped.";
            });
        } else {
            output.innerText = 'Web Speech API is not supported in this browser.';
        }
    </script>
</body>

</html>