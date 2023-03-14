<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GuestBook;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GuestBook::all();
        return view('admin.guest.index', [
            'guests' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function export()
    {
        $data = GuestBook::all();
        return view('admin.guest.export', [
            'guests' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = GuestBook::findOrFail($id);
        $data->delete();

        return redirect()->route('guest.index')->with('message','Data berhasil dihapus!');
    }
}
