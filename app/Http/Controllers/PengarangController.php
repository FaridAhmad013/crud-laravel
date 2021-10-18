<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    public function index()
    {
        $pengarangs = Pengarang::get();
        return view('admin.pengarangs.index', compact('pengarangs'));
    }

    public function create()
    {
        return view('admin.pengarangs.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama_pengarang' => 'required',
            'email' => 'required|unique:pengarangs, email',
            'telp' => 'required|unique:pengarangs, telp'
        ]);

        $pengarang = new Pengarang();
        $pengarang->nama_pengarang = $request->nama_pengarang;
        $pengarang->email = $request->email;
        $pengarang->telp = $request->telp;
        $pengarang->save();

        return redirect()->route('pengarang.index');
    }

    public function show($id)
    {
        $pengarang = Pengarang::find($id);
        return view('admin.pengarangs.show', compact('pengarang'));
    }


    public function edit(Pengarang $pengarang)
    {
        return view('admin.pengarangs.edit', compact('pengarang'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengarang' => 'required',
            'email' => 'required|unique:pengarangs,email,' .$id,
            'telp' => 'required|unique:pengarangs,telp,' .$id
        ]);

        $pengarang = Pengarang::find($id);
        $pengarang->nama_pengarang = $request->nama_pengarang;
        $pengarang->email = $request->email;
        $pengarang->telp = $request->telp;
        $pengarang->save();

        return redirect()->route('pengarang.index');

    }


    public function destroy($id)
    {
        Pengarang::find($id)->delete();

        return redirect()->route('pengarang.index');
    }
}
