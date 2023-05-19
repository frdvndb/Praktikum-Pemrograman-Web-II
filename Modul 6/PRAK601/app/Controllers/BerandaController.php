<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;

// Pembuatan kelas sebagai controller
class BerandaController extends BaseController
{
    // Method index
    public function index()
    {
        // Pembuatan objek
        $mahasiswa = new MahasiswaModel();

        // Menampilkan halaman beranda
        // serta memanggil nilai variabel
        // yang diperlukan oleh halaman
        return view('Beranda',[
            'nama' => $mahasiswa->getNama(),
            'nim' => $mahasiswa->getNim(),
            'gambarProfil' => $mahasiswa->getGambarProfil(),
            'github'  => $mahasiswa->getGithub(),
            'gambarBackground' => $mahasiswa->getgambarBackground()
        ]);
    }

    // Method profile
    public function profil()
    {
    
    // Pembuatan objek
    $mahasiswa = new MahasiswaModel();

    // Menampilkan halaman profile
    // serta memanggil nilai variabel
    // yang diperlukan oleh halaman
    return view('Profil',[
        'nama' => $mahasiswa->getNama(),
        'nim' => $mahasiswa->getNim(),
        'gambarProfil' => $mahasiswa->getGambarProfil(),
        'prodi' => $mahasiswa->getProdi(),
        'hobi' => $mahasiswa->getHobi(),
        'skill' => $mahasiswa->getSkill(),
        'github'  => $mahasiswa->getGithub(),
        'gambarBackground' => $mahasiswa->getgambarBackground()
    ]);
    }
}