<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function index(Request $request)
    {
        $products = Product::latest()->paginate(8);

        return view('products', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreUpdateProductFormRequest $request)
    {
        $data = $request->all();

        $file = $request['image'];
        $path = $file-> store('products', 'public');
        $data['image'] = $path;

        $this->model->create($data);

        return redirect()->route('products.index');

    }

    public function edit($id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('products.index');
        }

        return view('edit', compact('product'));
    }

    public function update(StoreUpdateProductFormRequest $request, $id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('products.index');
        }
        $data = $request->all();
        $product->update($data);

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('products.index');
        }
        $product->delete();
        return redirect()->route('products.index');
    }

    public function search(Request $request)
    {
        $filters =  $request->all();

        $products = $this->model->getProduct($request);

        return view('products', compact('products', 'filters'));
    }


}

