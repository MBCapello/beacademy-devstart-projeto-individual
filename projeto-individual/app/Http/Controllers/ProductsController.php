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

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreUpdateProductFormRequest $request)
    {
        $data = $request->all();

        $file = $request['image'];
        $path = $file-> store('products', 'public');
        $data['image'] = $path;

        $this->model->create($data);

        return redirect()->route('products.index')->with('message', 'Pet adicionado com sucesso!');

    }

    public function edit($id)
    {
        $product = $this->model->findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(StoreUpdateProductFormRequest $request, $id)
    {
        $product = $this->model->find($id);

        $data = $request->all();

        $product->update($data);

        return redirect()->route('products.index')->with('message', 'informações do Pet atualizadas com sucesso!');
    }

    public function destroy($id)
    {
        $product = $this->model->findOrFail($id);

        $product->delete();

        return redirect()->route('products.index')->with('message', 'informações do Pet apagadas com sucesso');
    }

    public function search(Request $request)
    {
        $filters =  $request->all();

        $products = $this->model->getProduct($request);

        return view('products', compact('products.index', 'filters'));
    }


}

