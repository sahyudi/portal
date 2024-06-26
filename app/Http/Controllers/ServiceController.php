<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validate =  $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
        ]);
        // dd($validate);

        Service::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'syarat' => $request->syarat,
        ]);

        return redirect()->route('services')->with('success', 'Service created successfully.');
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
    public function edit(int $id)
    {
        $service = Service::find($id);
        // dd($service->judul);
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $service = Service::find($request->id);
        if (!$service) {
            return redirect()->route('services')->with('error', 'Service not found.');
        }

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
        ]);

        $service->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'syarat' => $request->syarat,
        ]);

        return redirect()->route('services')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);

        $service->delete($id);
        return redirect()->route('services')->with('success', 'Service deleted successfully.');
    }
}
