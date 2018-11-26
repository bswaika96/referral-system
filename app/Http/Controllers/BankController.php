<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller {
    public function index() {
		return Bank::all();
	}
	
	public function show(Bank $bank) {
		return $bank;
	}
	
	public function store(Request $request) {
		$bank = Bank::create($request->all());
		return response()->json($bank, 201);
	}
	
	public function update(Request $request, Bank $bank) {
		$bank->update($request->all());
		return response()->json($bank, 200);
	}
	
	public function delete(Bank $bank) {
		$bank->delete();
		return response()->json(null, 204);
	}
}
