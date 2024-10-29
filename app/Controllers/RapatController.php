<?php

namespace App\Controllers;

use App\Models\loginmodel;

class RapatController extends BaseController
{
    public function index()
    {

        $user = [
            'role' => 'SEKRETARIS JURUSAN',
            'name' => 'Alif Yasir',
        ];
        // Dummy data for the tables
        $permohonanRapat = [
            [
                'waktu_masuk' => '2024-10-15 09:00',
                'waktu_keluar' => '2024-10-15 10:30',
                'nama_rapat' => 'Rapat Persiapan',
                'ruangan_rapat' => 'Aula Rendan',
                'jumlah_peserta' => 10
            ],
            [
                'waktu_masuk' => '2024-10-16 11:00',
                'waktu_keluar' => '2024-10-16 12:00',
                'nama_rapat' => 'Rapat Evaluasi',
                'ruangan_rapat' => 'Ruang Meeting',
                'jumlah_peserta' => 8
            ],
        ];

        $kehadiranRapat = [
            [
                'waktu_masuk' => '2024-10-13 09:00',
                'waktu_keluar' => '2024-10-13 10:30',
                'nama_rapat' => 'Rapat Bulanan',
                'ruangan_rapat' => 'Aula Utama',
                'jumlah_peserta' => 12
            ],
        ];

        return view('home', ['permohonanRapat' => $permohonanRapat, 'kehadiranRapat' => $kehadiranRapat]);
    }

    public function create()
    {
        return view('permohonan_rapat/permohonan_rapat');
    }
    public function mow()
    {
        return view('notulen/notulensi_rapat');
    }
    public function undangan()
    {
        return view('undangan/undangan_rapat');
    }

    public function persetujuan()
    {
        return view('persetujuan_notulen/persetujuan_notulen');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }

    public function agenda()
    {
        return view('agenda_rapat/buat_rapat');
    }

    public function hasil()
    {
        return view('notulen/hasil_notulensi');
    }
}
