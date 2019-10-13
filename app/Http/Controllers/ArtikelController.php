<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori_Artikel;
class ArtikelController extends Controller
{
    public function index()
    {
        $artikel=artikel::all();
        
        return view('artikel.index',compact('artikel'));
    }
    public function create(){
    	$KategoriArtikel = Kategori_Artikel::pluck('nama','id');
		return view('artikel.create',compact('KategoriArtikel'));
		}
	public function show($id){
		$artikel = Artikel::find($id);

		return view('artikel.show', compact('artikel'));
	}
	public function store(Request $request){
		$input = $request->all();
		
		Artikel::create($input);
		
		return redirect(route('artikel.index'));
	}
	public function edit($id)
    {
        //
        $Artikel = Artikel::find($id);
        $KategoriArtikel = Kategori_Artikel::pluck('nama','id');
        if (empty($Artikel)){
            return redirect(route('artikel.index'));
        }

        return view ('artikel.edit',compact('Artikel','KategoriArtikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Artikel = Artikel::find($id);
        $input = $request->all();
        if (empty($Artikel)){
            return redirect(route('artikel.index'));
        }
        $Artikel->update($input);
        return redirect(route('artikel.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Artikel = Artikel::find($id);
        if (empty($Artikel)){
            return redirect(route('artikel.index'));
        }
         $Artikel->delete();
         return redirect(route('artikel.index'));
    }

}
