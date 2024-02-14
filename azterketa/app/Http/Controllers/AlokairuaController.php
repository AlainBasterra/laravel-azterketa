<?php

namespace App\Http\Controllers;

use App\Models\Yate;
use App\Models\Alokairua;
use Illuminate\Http\Request;

class AlokairuaController extends Controller
{
    public function index()
    {
        $alokairuas = Alokairua::all();
        return view('alokairuas.index', compact('alokairuas'));
    }

    public function edit($id)
    {
        $alokairua = Alokairua::findOrFail($id);
        $yates = Yate::all();
        return view('alokairuas.edit', compact('alokairua', 'yates'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'izena' => 'required',
            'yate_id' => 'required|exists:yates,id',
        ]);

        $alokairua = Alokairua::findOrFail($id);
        $alokairua->update($request->all());

        return redirect()->route('alokairuas.index')->with('success', 'Alokairua eguneratua');
    }

    
    public function destroy($id)
    {
        $alokairua = Alokairua::findOrFail($id);
        $alokairua->delete();

        return redirect()->route('alokairuas.index')->with('success', 'Alokairua ondo ezabatu da');
    }


}
