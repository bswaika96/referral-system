<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReferrerBankAccount;

class ReferrerBankAccountController extends Controller {
    public function index() {
		return ReferrerBankAccount::all();
	}
	
	public function show(ReferrerBankAccount $referrerbankaccount) {
		return $referrerbankaccount;
	}
	
	public function store(Request $request) {
		$referrerbankaccount = ReferrerBankAccount::create($request->all());
		return response()->json($referrerbankaccount, 201);
	}
	
	public function update(Request $request, ReferrerBankAccount $referrerbankaccount) {
		$referrerbankaccount->update($request->all());
		return response()->json($referrerbankaccount, 200);
	}
	
	public function delete(ReferrerBankAccount $referrerbankaccount) {
		$referrerbankaccount->delete();
		return response()->json(null, 204);
	}
}
