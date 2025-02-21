<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar'); // Menampilkan halaman daftar.php
    }

    public function process()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'password' => 'required|min_length[6]'
        ]);

        // Validasi input
        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Menyimpan data pengguna
        $userModel = new UserModel();
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        if ($userModel->insert($data)) {
            return redirect()->to('/transaksi.php')->with('success', 'Akun berhasil didaftarkan!');
        } else {
            return redirect()->back()->with('error', 'Registrasi gagal, coba lagi.');
        }
    }
}
