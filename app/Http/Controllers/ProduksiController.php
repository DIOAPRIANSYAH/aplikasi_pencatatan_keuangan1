<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProduksiController extends Controller
{
    public function index()
    {

        //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
        //menggunakan ->join() untuk menggabungkan tabel lainnya
        //diakhir get() untuk mengambil data array

        //diakhir first() jika hanya satu data yang diambil

        $data = DB::connection('mysql4')->table('laporan_produksi')
            ->join('pic_produksis', 'pic_produksis.id_pic', '=', 'laporan_produksi.id_pic')
            ->join('operasional_produksis', 'operasional_produksis.id_op', '=', 'laporan_produksi.id_op')
            ->join('pemasukan_produksis', 'pemasukan_produksis.id_pem', '=', 'laporan_produksi.id_pem')
            ->get();
            
        $countOp = DB::connection('mysql4')->table('operasional_produksis')->sum('jumlah');
        $countPem = DB::connection('mysql4')->table('pemasukan_produksis')->sum('jumlah');
        $countPeng = DB::connection('mysql4')->table('pengeluaran_produksis')->sum('jumlah');
        //tampilkan view barang dan kirim datanya ke view tersebut
        return view('pages.produksi.laporan', compact('data', 'countOp', 'countPem', 'countPeng'));
    }
}
