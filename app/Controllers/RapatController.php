<?php

namespace App\Controllers;

class RapatController extends BaseController
{
    public function index()
    {
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
    public function absen()
    {
        return view('absensi/absensi_rapat');
    }

    public function persetujuan()
    {
        return view('admin/persetujuan_rapat');
    }
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
}
