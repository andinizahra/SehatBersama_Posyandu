<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Symfony\Component\HttpKernel\Profiler\all;

class DataIbuHamilController extends Controller
{
    public function index()
    {
        $data_ibu_hamil = ibuHamil::all();
        return view('data_ibu_hamil.index', ['ibuHamil' => $data_ibu_hamil]);
    }

    public function add()
    {
        return view('Data_Ibu_Hamil.add');
    }

    public function addsubmit(Request $request)
    {
        $data = $request->validate([
            'nama_ibu_hamil' => 'required',
            'no_kk' => 'required',
            'nik' => 'required|integer',
            'tanggal_lahir' => 'required',
            'nomor_telepon' => 'required',
            'foto' => 'mimes:png,jpg,jpeg,csv,txt,pdf',
        ]);

        if ($data) :

            $file = $request->file('foto');
            $filename = '';

            if ($file) {
                $filename = time() . '_' . $file->getClientOriginalName();
            }
            $generatedId = DB::select('SELECT procedure_kode() AS generated_id')[0]->generated_id;

            $data['kode'] = $generatedId;
            $data['foto'] = $filename;


            $dataInsert = ibuHamil::query()->create($data);
            if ($dataInsert) :
                if ($file) {
                    $file->storePubliclyAs('', $filename, 'public');
                }
                return redirect('/data_ibu_hamil')->with('success', 'Data baru berhasil ditambah :D');
            else :
                return redirect('/data_ibu_hamil')->with('error', 'Data baru gagal ditambah :(');
            endif;
        endif;
    }

    public function destroy(ibuHamil $data_ibu_hamil, Request $request)
    {
        $delete_dataIbu = $data_ibu_hamil->newQuery()->find($request->kode);
        if (!empty($delete_dataIbu->file) && Storage::disk('public')->exists($data_ibu_hamil
        ->file)) {
            Storage::disk('public')->delete($data_ibu_hamil->file);
        }
        if ($data_ibu_hamil->delete()) {
            return redirect()->to('/data_ibu_hamil')->with('success', 'Data sudah di hapus :(');
        } else
            return redirect()->to('/data_ibu_hamil')->with('error', 'Data gagal dihapus :0');

    }
}
