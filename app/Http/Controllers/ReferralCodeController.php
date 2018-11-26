<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\ReferralCode;
use App\Referrer;
use App\Person;

class ReferralCodeController extends Controller {
	private function generateById(int $id) {
		return $this->generate(Referrer::findOrFail($id));
	}
	
	private function generate(Referrer $referrer) {
		if ($referrer->Active) {
			$person = Person::find($referrer->Person);
			$fields = $person->toArray();
			$fields['currentTime'] = microtime(true);
			$encoded = json_encode($fields);
			return [
				'Referrer' => $referrer->Id,
				'Code' => hash('sha256', $encoded),
				'ShortCode' => hash('crc32', $encoded),
			];
		} else {
			return null;
		}
	}
	
    public function index() {
		return ReferralCode::all();
	}
	
	public function show(ReferralCode $referralcode) {
		return $referralcode;
	}
	
	public function valid($id) {
		return ReferralCode::where('Referrer', $id)->orderBy('LastChanged', desc)->first();
	}
	
	public function store(Request $request) {
		$reqs = $request->all();
		$data = $this->generateById($reqs['Referrer']);
		$referralcode = ReferralCode::create($data);
		return response()->json($referralcode, 201);
	}
	
	public function update(Request $request, ReferralCode $referralcode) {
		$reqs = $request->all();
		$data = $this->generate($reqs['Referrer']);
		$referralcode->update($data);
		return response()->json($referralcode, 200);
	}
	
	public function delete(ReferralCode $referralcode) {
		$referralcode->delete();
		return response()->json(null, 204);
	}
}
