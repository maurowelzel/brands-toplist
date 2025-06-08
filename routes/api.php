<?php

use App\Http\Controllers\API\BrandController;

Route::apiResource('brands', BrandController::class);

Route::get('/country', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'country' => $request->header('CF-IPCountry', 'MT'),
    ]);
});