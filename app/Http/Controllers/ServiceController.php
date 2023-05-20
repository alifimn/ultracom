<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\ServiceRequest;

use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $items = Service::where('nama_kategori', 'LIKE', '%'.$keyword.'%')
        ->orWhere('jml_service', $keyword)
        ->paginate(15);

        return view('pages.service.index')->with([
            'items' => $items
        ]);
    }
    public function destroy($id)
    {
        $item = Service::findOrFail($id);
        $item->delete();

        return redirect()->route('service.index');
    }

    public function edit($id)
    {
        $item = Service::findOrFail($id);

        return view('pages.service.edit')->with([
            'item' => $item
        ]);
    }

    public function update(ServiceRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $item = Service::findOrFail($id);
        $item->update($data);

        return redirect()->route('service.index');
    }

    public function show($id)
    {
        $item = Service::findOrFail($id);

        return view('pages.service.show')->with([
            'item' => $item,
        ]);
    }

}
