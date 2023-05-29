<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\UserMobile;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
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

    public function index()
    {
        $income = Transaction::where('transaction_status','SUCCESS')->sum('transaction_total');
        $user = UserMobile::count();
        $sales = Transaction::count();
        $services = Service::count();
        $service = Service::orderBy('id', 'DESC')->take(5)->get();
        $items = Transaction::with('details')->orderBy('id','DESC')->take(5)->get();
        $pie = [
            'pending' => Transaction::where('transaction_status','PENDING')->count(),
            'failed' => Transaction::where('transaction_status','FAILED')->count(),
            'success' => Transaction::where('transaction_status','SUCCESS')->count(),
        ];

        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'items' => $items,
            'pie' => $pie,
            'user' => $user,
            'service' => $service,
            'services' => $services
        ]);
    }
}
