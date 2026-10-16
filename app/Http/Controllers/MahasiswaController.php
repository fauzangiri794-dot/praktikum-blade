<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Fauzan Giri Nur Kholis';
        $nim = '242520139';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa();

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    private function dataMahasiswa(): array
    {
        return [
            ['nama' => 'Andi Pratama', 'nim' => '2201001', 'ipk' => 3.75],
            ['nama' => 'Budi Santoso', 'nim' => '2201002', 'ipk' => 3.20],
            ['nama' => 'Citra Lestari', 'nim' => '2201003', 'ipk' => 2.85],
            ['nama' => 'Dewi Anggraini', 'nim' => '2201004', 'ipk' => 3.50],
            ['nama' => 'Eko Wijaya', 'nim' => '2201005', 'ipk' => 1.90],
        ];
    }

    public function detail($nim)
    {
        $mahasiswa = [
            ['nama' => 'Andi Pratama', 'nim' => '2201001', 'ipk' => 3.75],
            ['nama' => 'Budi Santoso', 'nim' => '2201002', 'ipk' => 3.20],
            ['nama' => 'Citra Lestari', 'nim' => '2201003', 'ipk' => 2.85],
            ['nama' => 'Dewi Anggraini', 'nim' => '2201004', 'ipk' => 3.50],
            ['nama' => 'Eko Wijaya', 'nim' => '2201005', 'ipk' => 1.90],
        ];

        $m = collect($mahasiswa)->firstWhere('nim', $nim);

        if (!$m) {
            abort(404);
        }

        return view('mahasiswa.detail', ['m' => $m]);
    }
}