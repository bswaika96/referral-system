<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('test', function(Request $request) {
	$modification = $request->all();
	$modification['modify'] = 100;
	return response()->json($modification, 200);
});

Route::get('banks', 'BankController@index');
Route::get('banks/{bank}', 'BankController@show');
Route::post('banks', 'BankController@store');
Route::put('banks/{bank}', 'BankController@update');
Route::delete('banks/{bank}', 'BankController@delete');

Route::get('persons', 'PersonController@index');
Route::get('persons/{person}', 'PersonController@show');
Route::post('persons','PersonController@store');
Route::put('persons/{person}', 'PersonController@update');
Route::delete('persons/{person}', 'PersonController@delete');

Route::get('referralcode', 'ReferralCodeController@index');
Route::get('referralcodes/{referralcode}', 'ReferralCodeController@show');
Route::get('referralcode?valid={id}', 'ReferralCodeController@valid');
Route::post('referralcodes', 'ReferralCodeController@store');
Route::put('referralcodes/{referralcode}', 'ReferralCodeController@update');
Route::delete('referralcodes/{referralcode}', 'ReferralCodeController@delete');

Route::get('referraltransactions', 'ReferralTransactionController@index');
Route::get('referraltransactions/{referraltransaction}','ReferralTransactionController@show');
Route::post('referraltransactions', 'ReferralTransactionController@store');
Route::put('referraltransactions/{referraltransaction}', 'ReferralTransactionController@update');
Route::delete('referraltransactions/{referraltransaction}', 'ReferralTransactionController@delete');

Route::get('referrerbankaccounts', 'ReferrerBankAccountController@index');
Route::get('referrerbankaccounts/{referrerbankaccount}', 'ReferrerBankAccountController@show');
Route::post('referrerbankaccounts', 'ReferrerBankAccountController@store');
Route::put('referrerbankaccounts/{referrerbankaccount}', 'ReferrerBankAccountController@update');
Route::delete('referrerbankaccounts/{referrerbankaccount}', 'ReferrerBankAccountController@delete');

Route::get('referrerbanktransactions', 'ReferrerBankTransactionController@index');
Route::get('referrerbanktransactions/{referrerbanktransaction}', 'ReferrerBankTransactionController@show');
Route::post('referrerbanktransactions', 'ReferrerBankTransactionController@store');
Route::put('referrerbanktransactions/{referrerbanktransaction}', 'ReferrerBankTransactionController@update');
Route::delete('referrerbanktransactions/{referrerbanktransaction}', 'ReferrerBankTransactionController@delete');

Route::get('referrers', 'ReferrerController@index');
Route::get('referrers/{referrer}', 'ReferrerController@show');
Route::post('referrers', 'ReferrerController@store');
Route::put('referrers/{referrer}', 'ReferrerController@update');
Route::delete('referrers/{referrer}', 'ReferrerController@delete');
