<?php

namespace App\Http\Controllers;

use App\KategoriPengumuman;
use Illuminate\Http\Request;

class KategoriPengumumanAPIController extends Controller
{
    public function index(){
        $kategoriPengumuman=KategoriPengumuman::all();

        return $kategoriPengumuman;
    }
    public function store(Request $request){
        $input=$request->all();

        $kategoriPengumuman=KategoriPengumuman::create($input);

        return $kategoriPengumuman;
    }
    public function show($id)
    {
        $kategoriPengumuman=KategoriPengumuman::find($id);

        return $kategoriPengumuman;
    }
    public function update(Request $request, $id)
    {
        $input=$request->all();

        $kategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($kategoriPengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $kategoriPengumuman->update($input);

        return response()->json($kategoriPengumuman);
    }
    public function destroy($id)
    {
        $kategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($kategoriPengumuman)){
            return response()->json(['message'=>'Data tidak ditemukan'], 404);
        }

        $kategoriPengumuman->delete();

        return response()->json(['message'=>'Data telah dihapus']);
    }
}
