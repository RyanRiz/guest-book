<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Residence;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Residence::all();
        return view('admin.residence.index', [
            'residences' => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.residence.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name" => ['required']
        ]);

        $data = new Residence;
        $data->name = $request->name;
        $data->save();

        return redirect()->route('residence.index')->with('message','Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Residence::findOrFail($id);
        return view('admin.residence.edit', [
            'residence' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "name" => ['required']
        ]);

        $data = Residence::findOrFail($id);
        $data->name = $request->name;
        $data->update();

        return redirect()->route('residence.index')->with('message','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Residence::findOrFail($id);
        $data->delete();

        return redirect()->route('residence.index')->with('message','Data berhasil dihapus!');
    }
}
