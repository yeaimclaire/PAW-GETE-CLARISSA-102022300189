<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = [
            'nama' => 'Clarissa Wemona',    
            'nim' => '102022300189',    
            'email' => 'clarissawemona@gmail.com',    
            'jurusan' => 'S1 Sistem Informasi',    
            'fakultas' => 'Fakultas Rekayasa Industri',    
            'foto' => 'avatar.jpg'
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
