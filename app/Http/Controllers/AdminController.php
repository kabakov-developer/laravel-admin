<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PaymentsController;
use App\Models\Payment;


class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function history()
    {
        $data = Payment::paginate(10);
        return view('admin.history', compact('data'));
    }

    public function viewHistory($id)
    {
        $viewHistory = new Payment;
        return view('admin.viewHistory', ['data' => $viewHistory->find($id)]);
    }
}
