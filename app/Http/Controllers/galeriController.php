<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\Kategori_Galeri;
class galeriController extends Controller
{
    public function index()
    {
        $galeri=galeri::all();
        
        return view('galeri.index',compact('galeri'));
    }
    public function create(){
    	$Kategori_Galeri = Kategori_Galeri::pluck('nama','id');
		return view('galeri.create');
		}
	public function show($id){
		$galeri = Galeri::find($id);

		return view('galeri.show', compact('galeri'));
	}
	public function store(Request $request){
		$input = $request->all();
		
		Galeri::create($input);
		
		return redirect(route('galeri.index'));
    }
    public function edit($id)
    {
        //
        $Galeri = Galeri::find($id);
        $KategoriGaleri = Kategori_Galeri::pluck('nama','id');
        if (empty($Galeri)){
            return redirect(route('galeri.index'));
        }

        return view ('galeri.edit',compact('Galeri','KategoriGaleri'));
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
        $Gerita = Galeri::find($id);
        $input = $request->all();
        if (empty($Galeri)){
            return redirect(route('galeri.index'));
        }
        $Galeri->update($input);
        return redirect(route('galeri.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Galeri = Galeri::find($id);
        if (empty($Galeri)){
            return redirect(route('galeri.index'));
        }
         $Galeri->delete();
         return redirect(route('Galeri.index'));
    }

}


