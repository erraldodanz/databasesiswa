<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiswaModel;

class CRUDSiswaController extends Controller
{
    public function index(){
    	$siswa = SiswaModel::all();
    	return view('data',['siswa' => $siswa]);
    }

    public function add(Request $request){
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required',
    		'notelp' => 'required',
    		'asal_sekolah' => 'required'
    	]);
 
        SiswaModel::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat,
    		'notelp' => $request->notelp,
    		'asal_sekolah' => $request->asal_sekolah,
    	]);
 
    	return redirect(route('data_siswa'));
    }
	public function edit($id)
	{
   		$siswa_edit = SiswaModel::find($id);
   		return view('edit_siswa', ['siswa_edit' => $siswa_edit]);
	} 
	public function delete($id)
	{
    	$siswa = SiswaModel::find($id);
    	$siswa->delete();
    	return redirect(route('data_siswa'));
	} 
	public function update($id, Request $request)
	{
    	$this->validate($request,[
	   		'nama' => 'required',
    		'alamat' => 'required',
    		'notelp' => 'required',
    		'asal_sekolah' => 'required'
    	]);

    	$siswa_edit = SiswaModel::find($id);
    	$siswa_edit->nama = $request->nama;
    	$siswa_edit->alamat = $request->alamat;
    	$siswa_edit->notelp = $request->notelp;
    	$siswa_edit->asal_sekolah = $request->asal_sekolah;
    	$siswa_edit->save();	
    	return redirect(route('data_siswa'));
}  
}
