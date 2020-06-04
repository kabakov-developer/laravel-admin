<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;

class PaymentsController extends Controller
{

	public function submit(PaymentRequest $req)
	{
		$payment = new Payment();
		$payment->email = $req->input('email');
		$payment->phone = $req->input('phone');
		$payment->username = $req->input('username');
		$payment->card_number = $req->input('card_number');
		$payment->payment_amount = $req->input('payment_amount');

		$payment->save();

		return redirect()->route('welcome');
	}
}
