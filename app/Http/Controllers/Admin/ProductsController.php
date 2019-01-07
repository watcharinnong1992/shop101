<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductsRequest;

class ProductsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $products = Product::where('title', 'LIKE', "%$keyword%")
                            ->orWhere('content', 'LIKE', "%$keyword%")
                            ->orWhere('category_id', 'LIKE', "%$keyword%")
                            ->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
        }

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $categorys = Category::latest()->paginate();
        return view('admin.products.create', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreProductsRequest $request) {

        $requestData = $request->all();

        Product::create($requestData);

        return redirect('admin/products')->with('flash_message', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $product = Product::findOrFail($id);


        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $product = Product::findOrFail($id);
        $categorys = Category::latest()->paginate();

        return view('admin.products.edit', compact('product', 'categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(StoreProductsRequest $request, $id) {

        $requestData = $request->all();

        $product = Product::findOrFail($id);
        $product->update($requestData);

        return redirect('admin/products')->with('flash_message', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id) {
        Product::destroy($id);

        return redirect('admin/products')->with('flash_message', 'Product deleted!');
    }

}
