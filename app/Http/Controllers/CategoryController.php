<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::orderBy('name', 'desc')->paginate(10);
        return view('category.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required|unique:categories,name',
        ], [
            'name.required' => 'Nama Category Tidak Boleh Kosong!!',
            'name.unique' => 'Nama Category Sudah Tersedia!!',
        ]);

        $data = [
            'name' => $request->name,
        ];
        Category::create($data);
        return redirect()->to('category')->with('success', 'Berhasil Menambahkan Data Category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $id)
    {
        $data = Category::where('id', $id)->first();
        return view('category.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Session::flash('name', $request->name);
        $request->validate([
            'name' => 'required|unique:categories,name',
        ], [
            'name.required' => 'Nama Category Tidak Boleh Kosong!!',
            'name.unique' => 'Nama Category Sudah Tersedia!!',
        ]);

        $data = [
            'name' => $request->name,
        ];
        Category::where('id', $id)->update($data);
        return redirect()->to('category')->with('success', 'Berhasil Update Data Category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
