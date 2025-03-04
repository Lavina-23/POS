<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Clock\now;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    //
    public function index()
    {
        // DB::insert('insert into m_level (level_kode, level_nama, created_at) values (?, ?,?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil!';

        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::delete('DELETE FROM m_level WHERE level_kode = ?', ['CUS']);
        // return 'Delete data berhasil. Jumlah data yang dihapus : ' . $row . ' baris!';

        $data = DB::select('SELECT * FROM m_level');
        return view('level', ['data' => $data]);
    }
}
