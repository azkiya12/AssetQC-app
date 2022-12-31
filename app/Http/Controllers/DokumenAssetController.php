<?php

namespace App\Http\Controllers;

use App\Models\DokumenAsset;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DokumenAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // buat validasi
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'asset_id'=> 'required',
        ]);

        //cek jika validasi salah
        if ($validator ->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $file = $request->file('name');
		$fileName = 'asset-' . $request->asset_id . '-' . $file->getClientOriginalName();
		$filePath = $file->storeAs('uploads', $fileName, 'public');
        $fileSize = $file->getSize();
        
        //create post
        $data = DokumenAsset::create([
            'fileName' => $fileName,
            'filePath' => $filePath,
            'fileSize' => $fileSize,
            'note' => $request->note,
            'asset_id' => $request->asset_id,
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil disimpan',
            'data' => $data,
            'status' => 200,
            'imagePath' => Storage::url($filePath)
        ]);
    }

    public function download($id)
    {
        $path = DokumenAsset::where('id',$id)->value();
        return Storage::download($path);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DokumenAsset  $dokumenAsset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokumenAsset = DokumenAsset::findOrFail($id);
        if (Storage::delete('public/' .$dokumenAsset->filePath)) {
			$dokumenAsset->delete();
            //return response
            return response()->json([
                'success'=> true,
                'status' => 200,
                'message'=> 'Data post berhasil di hapus!.'
            ]);
        };
        
    }
}
