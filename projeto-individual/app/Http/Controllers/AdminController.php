<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminControlle extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {
        $users = User::latest()->paginate(8);

        return view('admin.users', compact('users'));
    }

    public function search(Request $request)
    {
        $filters =  $request->all();

        $users = $this->model->getUser($request);

        return view('admin.users', compact('users', 'filters'));
    }


}
