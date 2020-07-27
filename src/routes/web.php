  
<?php

// Finances
$route = env('PACKAGE_ROUTE', '').'/ledger/';
$controller = 'Increment\Finance\Http\LedgerController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'retrieve_all', $controller."retrieveAll");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

$route = env('PACKAGE_ROUTE', '').'/payments/';