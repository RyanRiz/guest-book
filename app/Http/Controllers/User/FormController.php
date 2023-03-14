<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\GuestBook;
use App\Models\Residence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Residence::all();
        return view('home.index', [
            'residences' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'number',
            'address',
            'residence',
            'info'
        ]);

        $validator = Validator::make($data, [
            'name' => ['required', 'max:100'],
            'number' => ['required', 'max:50'],
            'address' => ['required', 'max:100'],
            'residence' => ['required'],
            'info' => ['required']
        ]);
        $validator->validate();

        $info = $request->input('info');
        $info = implode(',', $info);

        $form = new GuestBook;
        $form->name = $request->name;
        $form->number = $request->number;
        $form->address = $request->address;
        $form->residence = $request->residence;
        $form->info = $info;
        $form->save();

        return redirect()->back()->with('message', 'Data berhasil ditambahkan!');
    }
}
