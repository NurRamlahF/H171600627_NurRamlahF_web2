<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Artikel;

class Kategori_ArtikelController extends Controller
{
   public function index()
    {
        $kategori_artikel=Kategori_Artikel::all();
        
        return view('kategori_artikel.index',compact('kategori_artikel'));
    }
	public function create(){
		return view('kategori_artikel.create');
		}
	public function show($id){
		$kategori_artikel = Kategori_Artikel::find($id);

		return view('kategori_artikel.show');
	}
	public function store(Request $request){
		$input = $request->all();
		
		Kategori_Artikel::create($input);
		
		return redirect(route('kategori_artikel.index'));
	}
	public function edit($id)
    {
        //
        $kategori_artikel = Kategori_Artikel::find($id);
        if (empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }

        return view ('kategori_artikel.edit',compact('kategori_artikel'));
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
        $kategori_artikel = Kategori_Artikel::find($id);
        $input = $request->all();
        if (empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }
        $kategori_artikel->update($input);
        return redirect(route('kategori_artikel.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_artikel = Kategori_Artikel::find($id);
        if (empty($kategori_artikel)){
            return redirect(route('kategori_artikel.index'));
        }
         $kategori_artikel->delete();
         return redirect(route('kategori_artikel.index'));
    }

    public function trash($id)
    {
    	
    }

}

