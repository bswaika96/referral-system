<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReferralTransaction;
use App\ReferralCode;
use App\Referrer;

class ReferralTransactionController extends Controller {
    public function index() {
		return ReferralTransaction::all();
	}
	
	public function show(ReferralTransaction $referraltransaction) {
		return $referraltransaction;
	}
	
	public function store(Request $request) {
		$referraltransaction = ReferralTransaction::create($request->all());
		// Find Referral Code
		$referralCode = ReferralCode::where('Code', $request->Code)->get();
		// Find Referrer
		$referrer = Referrer::find($referralCode->Referrer);
		// Add points
		$referrer->Points += $request->Points;
		// Save
		$referrer->update($referrer);
		// Return
		return response()->json($referraltransaction, 201);
	}
	
	public function update(Request $request, ReferralTransaction $referraltransaction) {
		$referraltransaction->update($request->all());
		return response()->json($referraltransaction, 200);
	}
	
	public function delete(ReferralTransaction $referraltransaction) {
		$referraltransaction->delete();
		return response()->json(null, 204);
	}
}
