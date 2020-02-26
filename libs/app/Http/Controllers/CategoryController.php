<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $data =
            [
                'categories' => $categories,
            ];
        return view('panel.category.index')->with($data);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $save = $category->store($request);
        if ($save) {
            return redirect()->route('');
        } else
            return 'failed to store';

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $data =
            [
                'category' => $category,
            ];
        return view('')->with($data);
    }

    public function update(Request $request)
    {
        $id = $request->catId;
        $category = Category::findOrfail($id);
        $update = $category->edit($request, $category);
        if ($update) {
            return redirect('');
        } else
            return 'Filed to update';
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $data =
            [
                'category'=>$category,
            ];
        return view('')->with($data);
    }

    public function destroy()
    {

    }

    public function trash()
    {

    }

    public function restore()
    {

    }

    public function delete($id)
    {
        $category=Category::withTrashed()->findOrfail($id);
        $category->forceDelete();
        return redirect('');
    }
}
