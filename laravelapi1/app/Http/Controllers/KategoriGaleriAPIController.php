<?php

namespace App\Http\Controllers;

use App\KategoriGaleri;
use Illuminate\Http\Request;

class KategoriGaleriAPIController extends Controller
{
    public function index(){
        $kategoriGaleri=KategoriGaleri::all();

        return $kategoriGaleri;
    }
    public function store(Request $request){
        $input=$request->all();

        $kategoriGaleri=KategoriGaleri::create($input);

        return $kategoriGaleri;
    }
    public function show($id)
    {
        $kategoriGaleri=KategoriGaleri::find($id);

        return $kategoriGaleri;
    }
    public function update(Request $request, $id)
    {
        $input=$request->all();

        $kategoriGaleri=KategoriGaleri::find($id);

        if(empty($kategoriGaleri)){
            return response()->json(['message'=>'data tidak ditemukan'], 404);
        }

        $kategoriGaleri->update($input);

        return response()->json($kategoriGaleri);
    }
    public function destroy($id)
    {
        $kategoriGaleri=KategoriGaleri::find($id);

        if(empty($kategoriGaleri)){
            return response()->json(['message'=>'Data tidak ditemukan'], 404);
        }

        $kategoriGaleri->delete();

        return response()->json(['message'=>'Data telah dihapus']);
    }
}
