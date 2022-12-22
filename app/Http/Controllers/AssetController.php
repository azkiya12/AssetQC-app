<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Location;
use App\Models\Manufaktur;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Requests\AssetRequest;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Asset::with('category','location','manufaktur', 'status');
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="mb-1 mr-1 btn btn-primary dropdown-toggle"
                                        type="button"
                                        data-toggle="dropdown">Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('asset.edit', $item->id) . '">
                                        Edit
                                    </a>
                                    <form action="' . route('asset.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->editColumn('photo', function($item){
                    return $item->photo ? '<img src="'. asset('storage/' . $item->photo) .'" style="max-height: 48px;">' : '';
                })
                ->editColumn('created_at', function($item){
                    return $item->created_at ? $item->created_at->format('Y-m-d') : ''; 
                })
                ->editColumn('asset_taq', function($item){
                    return '<a href="'. route('asset.show', $item->id) .'">'. $item->asset_taq .'</a>';
                })
                ->rawColumns(['action', 'photo','created_at','asset_taq'])
                ->make();
        }
        return view('pages.assets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $locations = Location::all();
        $manufakturs = Manufaktur::all();
        $statuses = Status::all();
        
        return view('pages.assets.create', [
            'categories'=>$categories,
            'locations'=>$locations,
            'manufakturs'=>$manufakturs,
            'statuses'=>$statuses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['photo'] = $request->file('photo')->store('assets/img', 'public');
        Asset::create($data);
    
        return redirect()->route('asset.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        $categories = Category::all();
        $locations = Location::all();
        $manufakturs = Manufaktur::all();
        $statuses = Status::all();
        return view('pages.assets.show', [
            'item'=>$asset, 
            'categories'=>$categories,
            'locations'=>$locations,
            'manufakturs'=>$manufakturs,
            'statuses'=>$statuses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        $categories = Category::all();
        $locations = Location::all();
        $manufakturs = Manufaktur::all();
        $statuses = Status::all();
        return view('pages.assets.edit', [
            'item'=>$asset, 
            'categories'=>$categories,
            'locations'=>$locations,
            'manufakturs'=>$manufakturs,
            'statuses'=>$statuses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {  
        // $asset->photo
        
        $data = $request->all();
        // dd($data);

        $data['user_id'] = Auth::user()->id;

        //perbarui photo jika ada request yang masuk
        if($request->file('photo')){
            //hapus photos lama
            if($asset->photo && file_exists(storage_path('app/public/' . $asset->photo))){
                Storage::delete('public/' . $asset->name);
            }

            //buat value photos baru
            $new_image = $request->file('photo')->store('assets/img', 'public');
            $data['photo'] = $new_image;
        }
        $asset->update($data);   
        return redirect()->route('asset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        //delete file storage
        if($asset->photo && file_exists(storage_path('app/public/' . $asset->photo))){
                Storage::delete('public/' . $asset->name);
        }

    }
}
