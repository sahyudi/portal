<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Beranda';
        $data['services'] = Service::limit(9)->get();
        return view('content.home', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }

    public function informations()
    {
        $data['title'] = 'Informasi';
        return view('content.contact', $data);
    }

    public function contact()
    {
        $data['title'] = 'Kontak Kami';
        return view('content.contact', $data);
    }

    public function services()
    {
        $data['title'] = 'Daftar Layanan';
        $data['services'] = Service::all();
        return view('content.services', $data);
    }

    public function showService(string $slug)
    {
        $data['title'] = 'Detail Layanan';
        $data['service'] = Service::where(['slug' => $slug])->first();
        // dd($data['service']);
        return view('content.service-detail', $data);
    }
    public function articles()
    {
        $data['title'] = 'Daftar Artikel';
        $data['articles'] = Article::all();
        return view('content.articles', $data);
    }

    public function showArticles(string $slug)
    {
        $data['title'] = 'Detail Artikel';
        $data['article'] = Article::where(['slug' => $slug])->first();
        // dd($data['service']);
        return view('content.article-detail', $data);
    }
}
