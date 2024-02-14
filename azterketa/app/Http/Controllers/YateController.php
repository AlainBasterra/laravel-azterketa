<?php

namespace App\Http\Controllers;

use App\Models\Yate;
use Illuminate\Http\Request;

class YateController extends Controller
{
    public function index()
    {
        $yates = Yate::all();
        return view('yates.index', compact('yates'));
    }

    public function edit($id)
    {
        $yate = Yate::findOrFail($id);
        return view('yates.edit', compact('yate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'izena' => 'required',
            'fabrikazio_urtea' => 'required|integer',
            'bidaiari_kopurua' => 'required|integer',
        ]);

        $yate = Yate::findOrFail($id);
        $yate->update($request->all());

        return redirect()->route('yates.index')->with('success', 'Yatea eguneratua');
    }

}
