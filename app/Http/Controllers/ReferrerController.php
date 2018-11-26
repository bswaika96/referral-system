<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referrer;

class ReferrerController extends Controller {
    public function index() {
		return Referrer::all();
	}
	
	public function show(Referrer $referrer) {
		return $referrer;
	}
	
	public function store(Request $request) {
		$referrer = Referrer::create($request->all());
		return response()->json($referrer, 201);
	}
	
	public function update(Request $request, Referrer $referrer) {
		$referrer->update($request->all());
		return response()->json($referrer, 200);
	}
	
	public function delete(Referrer $referrer) {
		$referrer->delete();
		return response()->json(null, 204);
	}
}
