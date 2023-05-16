<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // $keyword = $request->keyword;
        // $items = Product::where('name', 'LIKE', '%'.$keyword.'%')
        // ->orWhere('price', $keyword)
        // ->orWhere('type', 'LIKE', '%'.$keyword.'%')
        // ->paginate(15);

        return view('pages.service.index')->with([
            // 'items' => $items
        ]);
    }
}
