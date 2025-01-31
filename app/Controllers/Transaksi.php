<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use CodeIgniter\Controller;

class Transaksi extends Controller
{
    public function index()
    {
        return view('transaksi');
    }

    public function proses()
    {
        $transaksiModel = new TransaksiModel();

        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'game_id' => $this->request->getPost('game_id'),
            'harga_topup_id' => $this->request->getPost('harga_topup_id'),
            'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
            'status' => 'pending',
        ];

        $transaksiModel->insert($data);

        return redirect()->to('/transaksi')->with('message', 'Transaksi berhasil dibuat!');
    }
}
