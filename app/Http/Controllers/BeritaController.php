<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori_Berita;
class BeritaController extends Controller
{
    public function index()
    {
        $berita=berita::all();
        
        return view('berita.index',compact('berita'));
    }
    public function create(){
    	$KategoriBerita = Kategori_Berita::pluck('nama','id');
		return view('berita.create',compact('KategoriBerita'));
		}
	public function show($id){
		$berita = Berita::find($id);

		return view('berita.show', compact('berita'));
	}
	public function store(Request $request){
		$input = $request->all();
		
		Berita::create($input);
		
		return redirect(route('berita.index'));
	}
	public function edit($id)
    {
        //
        $Berita = Berita::find($id);
        $KategoriBerita = Kategori_Berita::pluck('nama','id');
        if (empty($Berita)){
            return redirect(route('berita.index'));
        }

        return view ('berita.edit',compact('Berita','KategoriBerita'));
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
        $Berita = Berita::find($id);
        $input = $request->all();
        if (empty($Berita)){
            return redirect(route('berita.index'));
        }
        $Berita->update($input);
        return redirect(route('berita.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Berita = Berita::find($id);
        if (empty($Berita)){
            return redirect(route('berita.index'));
        }
         $Berita->delete();
         return redirect(route('Berita.index'));
    }

}

