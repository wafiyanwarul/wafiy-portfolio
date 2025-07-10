<?php

use Illuminate\Support\Facades\Route;
use App\Services\ImageKitService;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-imagekit', function () {
    return view('test-imagekit');
});

Route::post('/test-imagekit', function (Request $request, ImageKitService $imageKitService) {
    if ($request->hasFile('image')) {
        try {
            $file = $request->file('image');
            $result = $imageKitService->upload($file, $file->getClientOriginalName(), 'portfolio');
            return response()->json(['message' => 'Upload successful', 'data' => $result]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    return response()->json(['error' => 'No image provided'], 400);
});
