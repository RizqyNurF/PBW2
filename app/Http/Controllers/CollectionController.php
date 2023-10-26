<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\CollectionsDataTable;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $collections = Collection::all();
    //     return view("koleksi.daftarKoleksi", compact('collections'));
    // }

    public function index(CollectionsDataTable $dataTable)
    {
        return $dataTable->render('koleksi.daftarKoleksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("koleksi.registrasi");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaKoleksi' => ['required', 'string', 'max:100'],
            'jenisKoleksi' => ['required', 'numeric', 'in:1,2,3'],
            'jumlahKoleksi' => ['required', 'integer']
        ]);

        DB::beginTransaction();

        try {

            Collection::create([
                'namaKoleksi' => $request->namaKoleksi,
                'jenisKoleksi' => $request->jenisKoleksi,
                'jumlahKoleksi' => $request->jumlahKoleksi
            ]);

            DB::commit();

            return redirect()->route("koleksi.daftarKoleksi")->with("success", "Added collection successfully");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route("koleksi.daftarKoleksi")->with("error", "Added collection failed");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('koleksi.infoKoleksi', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        return view("koleksi.editKoleksi", compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                "namaKoleksi" => ["required"],
                "jenisKoleksi" => ["required"],
                "jumlahKoleksi" => ["required"],
            ]);

            $affected = DB::table('collections')
                ->where("id", $request->id)
                ->update($request->except(['_token']));

            DB::commit();
            return redirect()->route("koleksi.daftarKoleksi")->with("success", "Updated collection successfully");
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route("koleksi.daftarKoleksi")->with("error", "Updated collection failed");
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

// Rizqy Nurfauzella 6706223074 D3 IF 46-04
