<?php
public function update(Request $request, Karyawan $karyawan)
{
//
$request->validate([
'nama' => 'required',
'jabatan' => 'required',
'kd_tugas' => 'required',
'gapok' => 'required',
]);
$karyawan->update($request->all());
return redirect()->route('karyawans.index')
->with('success','Karyawan berhasil diubah.');
}
