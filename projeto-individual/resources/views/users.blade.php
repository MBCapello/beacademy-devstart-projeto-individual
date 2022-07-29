@extends('layouts.app')

@section('title', 'Lista de tutores')

@section('content')
    <div class="d-flex flex-column">
        <div class="d-flex justify-content-between">
            <div>
                <h1 class="display-3">@if (isset($filters['search']))
                    Buscando por: "{{$filters['search']}}"
                @else
                    Lista de Tutores
                @endif</h1>
            </div>
            <div class="d-flex flex-column align-self-end card p-3 m-3">
                <form class="mt-3" action="{{ route('user.search') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="Busca por nome" name="search">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </div>
                </form>
                @if (isset($filters))
                    <a href="{{ route('users.index') }}">Mostrar todos.</a>
                @endif
            </div>
        </div>
        <table class="table table-striped mb-3">
            <thead class="table-primary">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">email</th>
                    <th scope="col">cpf</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if ($user->admin == 0)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->cpf }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="align-self-center mt-5">
            {{ $users->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
