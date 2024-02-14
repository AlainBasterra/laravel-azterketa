<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Yate;
use Illuminate\Http\Request;

class YateApiController extends Controller
{
    public function index()
    {
        return Yate::all();
    }

    public function show($id)
    {
        return Yate::findOrFail($id);
    }

    public function destroy($id)
    {
        Yate::findOrFail($id)->delete();
        return response()->json(['message' => 'Yatea ondo ezabatu da'], 204);
    }
}
