<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {
        $users = User::latest()->paginate(8);

        return view('users', compact('users'));
    }

    public function search(Request $request)
    {
        $filters =  $request->all();

        $users = $this->model->getUser($request);

        return view('users', compact('users', 'filters'));
    }

    public function edit($id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('products.index');
        }

        return view('perfil', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = $this->model->find($id)) {
            return redirect()->route('user.edit');
        }
        $data = $request->all();
        $user->update($data);
        ;
        return redirect()->route('products.index');
    }

}
