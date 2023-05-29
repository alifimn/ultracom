<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMobile;
use App\Http\Requests\UserMobileRequest;

class UserMobileController extends Controller
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
        $items = UserMobile::where('username', 'LIKE', '%'.$keyword.'%')
        ->orWhere('email', 'LIKE', '%'.$keyword.'%')
        ->paginate(15);

        return view('pages.user.index')->with([
            'items' => $items
        ]);
    }
    public function destroy($id)
    {
        $item = UserMobile::findOrFail($id);
        $item->delete();

        return redirect()->route('user.index');
    }
}