<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Pengumuman;
class Kategori_PengumumanController extends Controller
{
    public function index()
    {
        $kategori_pengumuman=kategori_pengumuman::all();
        
        return view('kategori_pengumuman.index',compact('kategori_pengumuman'));
    }

    public function create(){
		return view('kategori_pengumuman.create');
		}
	public function show($id){
		$kategori_pengumuman = Kategori_Pengumuman::find($id);

		return view('kategori_pengumuman.show', compact('kategori_pengumuman'));
	}
	public function store(Request $request){
		$input = $request->all();
		
		Kategori_Pengumuman::create($input);
		
		return redirect(route('kategori_pengumuman.index'));
    }
    public function edit($id)
    {
        //
        $kategori_pengumuman = Kategori_Pengumuman::find($id);
        if (empty($kategori_pengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }

        return view ('kategori_pengumuman.edit',compact('kategori_pengumuman'));
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
        $kategori_pengumuman = Kategori_Pengumuman::find($id);
        $input = $request->all();
        if (empty($kategori_pengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }
        $kategori_pengumuman->update($input);
        return redirect(route('kategori_pengumuman.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori_pengumuman = Kategori_Pengumuman::find($id);
        if (empty($kategori_pengumuman)){
            return redirect(route('kategori_pengumuman.index'));
        }
         $kategori_pengumuman->delete();
         return redirect(route('kategori_pengumuman.index'));
    }

}


