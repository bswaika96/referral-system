<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReferrerBankTransaction;
use App\Referrer;

class ReferrerBankTransactionController extends Controller {
    public function index() {
		return ReferrerBankTransaction::all();
	}
	
	public function show(ReferrerBankTransaction $referrerbanktransaction) {
		return $referrerbanktransaction;
	}
	
	public function store(Request $request) {
		$referrerbanktransaction = ReferrerBankTransaction::create($request->all());
		// Find Referrer
		$referrer = Referrer::find($referrerbanktransaction->Referrer);
		// Subtract points
		$referrer->Points -= $request->Points;
		// Save
		$referrer->update($referrer);
		// Return
		return response()->json($referrerbanktransaction, 201);
	}
	
	public function update(Request $request, ReferrerBankTransaction $referrerbanktransaction) {
		$referrerbanktransaction->update($request->all());
		return response()->json($referrerbanktransaction, 200);
	}
	
	public function delete(ReferrerBankTransaction $referrerbanktransaction) {
		$referrerbanktransaction->delete();
		return response()->json(null, 204);
	}
}
