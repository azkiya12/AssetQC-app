<?php

namespace App\Http\Controllers;

use App\Models\Manufaktur;
use Illuminate\Http\Request;
use DataTables;

class ManufakturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Manufaktur::query();
            return DataTables::of($query)
            ->addColumn('action', function($item){
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="mb-1 mr-1 btn btn-primary dropdown-toggle"
                                        type="button"
                                        data-toggle="dropdown">Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="'. route('manufakturs.edit', $item->id) .'">
                                        Edit
                                    </a>
                                    <form action="'. route('manufakturs.destroy', $item->id) .'" method="POST">
                                        '. method_field('delete') . csrf_field() .'
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
            })
            ->editColumn('created_at', function($item){
                return $item->created_at ? $item->created_at->format('Y-m-d') : '';
            })
            ->rawColumns(['action', 'created_at'])
            ->make();
        }
        return view('pages.manufakturs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manufakturs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Manufaktur::create($data);
        return redirect()->route('manufakturs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function show(Manufaktur $manufaktur)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufaktur $manufaktur)
    {
        return view('pages.manufakturs.edit', ['item'=> $manufaktur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufaktur $manufaktur)
    {
        $data = $request->all();
        $manufaktur->update($data);
        return redirect()->route('manufakturs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manufaktur  $manufaktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufaktur $manufaktur)
    {
        $manufaktur->delete();
        return redirect()->route('manufakturs.index');
    }
}
