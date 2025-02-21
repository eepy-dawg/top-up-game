<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); // Menampilkan halaman login.php
    }

    public function process()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        // Aturan validasi
        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Validasi input
        if (!$this->validate($validation->getRules())) {
            // Ambil pesan kesalahan
            $errors = $this->validator->getErrors();
            session()->setFlashdata('errors', json_encode($errors)); // Mengubah ke JSON
            return redirect()->back()->withInput();
        }

        // Ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cek pengguna di database
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && $user['password'] === $password) {
            // Jika login berhasil, simpan data pengguna ke session
            session()->set('loggedIn', true);
            session()->set('username', $user['username']);
            return redirect()->to('transaksi.php'); // Redirect ke halaman transaksi
        } else {
            session()->setFlashdata('error', 'Username atau password salah.');
            return redirect()->to('daftar')->withInput();
        }
    }
}
