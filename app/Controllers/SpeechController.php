<?php

namespace App\Controllers;

class SpeechController extends BaseController
{
    public function index()
    {
        return view('voicetotext/voice_input');
    }

    public function saveText()
    {
        // Dapatkan teks dari request
        $input = $this->request->getJSON();

        // Simpan ke database atau lakukan sesuatu dengan teks
        $text = $input->text;

        // Tanggapan JSON untuk konfirmasi
        return $this->response->setJSON(['status' => 'success', 'text' => $text]);
    }
}
