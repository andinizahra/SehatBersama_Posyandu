<?php

namespace App\Http\Controllers;

use App\Models\DataAnak;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataAnakController extends Controller
{

    public function index(): View
    {
        $data_anak = DataAnak::all(); 

        return view('dashboard_kader.data_anak.index', compact('data_anak'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'data_anak' => ['required', 'max:40']
        ]);

        if ($data) {
            if ($request->input('id') !== null) {
                // TODO: Update data anak
                $data_anak = DataAnak::query()->find($request->input('id'));
                $data_anak->fill($data);
                $data_anak->save();

                return response()->json([
                    'message' => 'Data Anak berhasil diupdate!'
                ], 200);
            }

            $dataInsert = DataAnak::create($data);
            if ($dataInsert) {
                return redirect()->to('/dashboard_kader/data_anak')->with('success', 'Data Anak berhasil ditambah');
            }
        }

        return redirect()->to('/dashboard_kader/data_anak')->with('error', 'Gagal tambah data');
    }

    public function delete(int $id): JsonResponse
    {
        $data_anak = DataAnak::query()->find($id)->delete();

        if ($data_anak):
            //Pesan Berhasil
            $pesan = [
                'success' => true,
                'pesan' => 'Data berhasil dihapus'
            ];
        else:
            //Pesan Gagal
            $pesan = [
                'success' => false,
                'pesan' => 'Data gagal dihapus'
            ];
        endif;
        return response()->json($pesan);
    }
}
