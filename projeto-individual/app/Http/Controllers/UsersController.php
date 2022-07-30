<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function edit($id)
    {
        $user = $this->model->findOrFail($id);

        return view('users.perfil', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        $user = $this->model->findOrFail($id);

        $data = $request->all();
        $user->update($data);
        ;
        return redirect()->route('products.index')->with('message', 'Perfil atualizado com sucesso!');
    }

    public function productRequest(Request $request)
    {
        $idProduct = $request->input('id');

        $product = Product::findOrfail('id');

        $idUser = Auth::id();

        
    }

}
