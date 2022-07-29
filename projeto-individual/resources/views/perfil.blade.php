@extends('layouts.app')

@section('title', 'Editar perfil')

@section('content')
    <div class="card mb-3 shadow p-1">
        <div class="row g-0">
            <div class="col-md-7 border-3 border-end border-secondary">
                <div class="card-body">
                    <form class="col-10" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <h1 class="display-3 mb-3">Editar Perfil</h1>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nome completo</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                            @error('birth_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone de contato</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $user->phone }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                         <div class="mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" value="{{ $user->cpf }}" @if (isset($user->cpf)) disabled @endif>
                            @error('cpf')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Data de nascimento</label>
                            <input type="text" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date" name="birth_date" value="{{ $user->birth_date }}">
                            @error('birth_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="m-5 d-flex justify-content-center">
                            <button class="btn btn-lg btn-primary p-3 shadow" type="submit">Editar informações</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 shadow">
                <img src="https://cdn.pixabay.com/photo/2021/01/30/15/15/dog-5964181_960_720.jpg" class="img-fluid rounded-end" style="height:100%; width:100%" alt="...">
            </div>
        </div>
    </div>
@endsection
