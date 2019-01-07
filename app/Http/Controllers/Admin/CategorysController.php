<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorysRequest;

class CategorysController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $categorys = Category::where('name', 'LIKE', "%$keyword%")
                            ->orWhere('content', 'LIKE', "%$keyword%")
                            ->latest()->paginate($perPage);
        } else {
            $categorys = Category::latest()->paginate($perPage);
        }

        return view('admin.categorys.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('admin.categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreCategorysRequest $request) {

        $requestData = $request->all();

        Category::create($requestData);

        return redirect('admin/categorys')->with('flash_message', 'Category added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $category = Category::findOrFail($id);

        return view('admin.categorys.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $category = Category::findOrFail($id);

        return view('admin.categorys.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreCategorysRequest $request, $id) {

        $requestData = $request->all();

        $category = Category::findOrFail($id);
        $category->update($requestData);

        return redirect('admin/categorys')->with('flash_message', 'Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Category::destroy($id);

        return redirect('admin/categorys')->with('flash_message', 'Category deleted!');
    }

}
