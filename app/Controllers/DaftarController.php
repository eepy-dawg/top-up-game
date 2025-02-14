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

        $validation->setRules([
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'password' => 'required|min_length[6]'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data ke database
        $userModel = new UserModel();
        $userModel->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT) // Hash password
        ]);

        return redirect()->to('/daftar')->with('success', 'Akun berhasil didaftarkan!');
    }
}
