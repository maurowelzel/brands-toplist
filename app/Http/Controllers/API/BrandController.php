<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $countryCode = $request->header('CF-IPCountry');

        $brands = Brand::where('country_code', $countryCode)
            ->orWhereNull('country_code')
            ->orderByDesc('rating')
            ->get();

        return response()->json($brands);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required|string',
            'brand_image' => 'required|url',
            'rating' => 'required|integer|min:1|max:5',
            'country_code' => 'nullable|string|size:2',
        ]);

        $brand = Brand::create($validated);

        return response()->json($brand, 201);
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return response()->json($brand);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $validated = $request->validate([
            'brand_name' => 'sometimes|required|string',
            'brand_image' => 'sometimes|required|url',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'country_code' => 'nullable|string|size:2',
        ]);

        $brand->update($validated);

        return response()->json($brand);
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return response()->json(['message' => 'Brand deleted']);
    }
}
