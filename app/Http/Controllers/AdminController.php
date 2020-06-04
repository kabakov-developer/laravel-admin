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
        return view('admin.history', ['data' => Payment::all()]);
    }

    public function viewHistory($id)
    {
        return view('admin.viewHistory', ['data' => Payment::find($id)]);
    }
}
