<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Berita;

class Kategori_BeritaController extends Controller
{
    public function index()
    {
        $kategori_berita=kategori_berita::all();
        
        return view('kategori_berita.index',compact('kategori_berita'));
	}
        public function create(){
		return view('kategori_berita.create');
		}
	public function show($id){
		$kategori_berita = Kategori_Berita::find($id);

		return view('kategori_berita.show', compact('kategori_berita'));
	}
	
    public function store(Request $request){
		$input = $request->all();
		
		Kategori_Berita::create($input);
		
		return redirect(route('kategori_berita.index'));
	}
	public function edit($id)
    {
        //
        $kategori_berita = Kategori_Berita::find($id);
        if (empty($kategori_berita)){
            return redirect(route('kategori_berita.index'));
        }

        return view ('kategori_berita.edit',compact('kategori_berita'));
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
        $kategori_berita = Kategori_Berita::find($id);
        $input = $request->all();
        if (empty($kategori_berita)){
            return redirect(route('kategori_berita.index'));
        }
        $kategori_berita->update($input);
        return redirect(route('kategori_berita.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_berita = Kategori_Berita::find($id);
        if (empty($kategori_berita)){
            return redirect(route('kategori_berita.index'));
        }
         $kategori_berita->delete();
         return redirect(route('kategori_berita.index'));
    }

}


