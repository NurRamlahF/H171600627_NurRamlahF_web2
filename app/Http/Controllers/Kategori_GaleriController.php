<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Galeri;
class Kategori_GaleriController extends Controller
{
    public function index()
    {
        $kategori_galeri=kategori_galeri::all();
        
        return view('kategori_galeri.index',compact('kategori_galeri'));
    }

    public function create(){
		return view('kategori_galeri.create');
		}
	public function show($id){
		$kategori_galeri = Kategori_Galeri::find($id);

		return view('kategori_galeri.show', compact('kategori_galeri'));
	}
	public function store(Request $request){
		$input = $request->all();
		
		Kategori_Galeri::create($input);
		
		return redirect(route('kategori_galeri.index'));
    }
     public function edit($id)
    {
        //
        $kategori_galeri = Kategori_Galeri::find($id);
        if (empty($kategori_galeri)){
            return redirect(route('kategori_galeri.index'));
        }

        return view ('kategori_galeri.edit',compact('kategori_galeri'));
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
        $kategori_galeri = Kategori_Galeri::find($id);
        $input = $request->all();
        if (empty($kategori_galeri)){
            return redirect(route('kategori_galeri.index'));
        }
        $kategori_galeri->update($input);
        return redirect(route('kategori_galeri.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_galeri = Kategori_Galeri::find($id);
        if (empty($kategori_galeri)){
            return redirect(route('kategori_galeri.index'));
        }
         $kategori_galeri->delete();
         return redirect(route('kategori_galeri.index'));
    }

}


