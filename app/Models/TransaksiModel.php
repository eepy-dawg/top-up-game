<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'game_id', 'harga_topup_id', 'metode_pembayaran', 'status'];
}
