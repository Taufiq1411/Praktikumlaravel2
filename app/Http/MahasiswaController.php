<?php

namespace praktikkum2\Http\Controllers;

use praktikkum2\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
public function index(request $request)
{
	$karyawans = Mahasiswa::latest()->paginate(10);
	return view(‘mahasiswas.index',compact(‘mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
}

?>
