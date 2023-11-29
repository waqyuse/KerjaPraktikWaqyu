<?php

namespace App\Http\Controllers;

use App\Models\Bpenjualan;
use App\Models\Jpenjualan;
use App\Models\Tpenjualan;
use Illuminate\Http\Request;

class BotPengelolaanAtributController extends Controller
{
    public function tampilAtribut()
    {
        $response = Jpenjualan::all();
        return json_encode($response);
    }

    public function tampilAtributDetail($barang)
    {
        $response = Jpenjualan::with('barang_penjualan')->firstWhere('jenis_penjualan', 'LIKE', $barang);
        if ($response) {
            return json_encode($response);
        } else {
            return ('Atribut tidak Ditemukan');
        }
    }

    public function pesan(Request $request)
    {
        $barang = Bpenjualan::firstWhere('nama_barang', 'like', $request->barang);
        if ($barang) {
            $pemesanan = new Tpenjualan();
            $pemesanan->nama_barang_id = $barang->id;
            $pemesanan->stok = 0;
            $pemesanan->jumlah_terjual = $request->qty;
            $pemesanan->save();
            return json_encode($pemesanan);
        } else {
            return json_encode('Barang Tidak Ditemukan');
        }
    }
}
