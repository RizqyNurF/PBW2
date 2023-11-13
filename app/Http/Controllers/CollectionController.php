<?php

namespace App\Http\Controllers;

// Rizqy Nurfauzella 6706223074 D3 IF 46-04

use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CollectionController extends Controller
{
    public function index() {
        return view('koleksi.daftarKoleksi');
    }

    public function create() {
        return view('koleksi.registrasi');
    }

    public function show(Collection $collection) {
        return view('koleksi.infoKoleksi', compact('collection'));
    }

    public function getAllCollections() {
            $collections = DB::table('collections')
            ->select(
                'id as id',
                'nama as judul',
                DB::raw('
                    (CASE
                    WHEN jenis="1" THEN "Buku"
                    WHEN jenis="2" THEN "Majalah"
                    WHEN jenis="3" THEN "Cakram Digital"
                    END) AS jenis
                    '),
                'jumlahSisa as jumlahSisa',
                'jumlahAwal as jumlahAwal',
                'jumlahKeluar as jumlahKeluar')
            ->orderBy('nama', 'asc')
            ->get();

            return DataTables::of($collections)
            ->addColumn('action', function($collection) {
                $html = '
                <div class="btn-group btn-group-sm flex gap-4" role="group" aria-label="Action Buttons">
                    <a href="/koleksiEdit/' . $collection->id . '" class="btn btn-gray">Edit</a>
                    <a href="/koleksiView/' . $collection->id . '" class="btn btn-gray">View</a>
                    <a href="/users/'       . $collection->id . '/delete" class="btn btn-gray">Delete</a>
                </div>
                ';
                return $html;
            })
            ->make(true);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'      => ['required', 'string', 'max:255', 'unique:collections'],
            'jenis'     => ['required', 'gt:0'],
            'jumlahAwal'    => ['required', 'gt:0']
        ],
        [
            'nama.unique'   => 'Nama koleksi tersebut sudah ada'
        ]);

        $koleksi = [
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'jumlahAwal' => $request->jumlahAwal,
            'jumlahSisa' => $request->jumlahAwal,
            'jumlahKeluar' => 0,
        ];

        DB::table('collections')->insert($koleksi);
        return view('koleksi.daftarKoleksi');
    }

    public function edit(Collection $collection)
    {
        return view("koleksi.editKoleksi", compact('collection'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'jenis'     => ['required', 'gt:0'],
            'jumlahSisa'     => ['required', 'gt:0'],
            'jumlahKeluar'     => ['required', 'gt:0'],
        ]);

        $affected = DB::table('collections')
        ->where('id', $request->id)
        ->update([
            'jenis' => $request->jenis,
            'jumlahSisa' => $request->jumlahSisa,
            'jumlahKeluar' => $request->jumlahKeluar,
        ]);

        return view('koleksi.daftarKoleksi');
    }
}
