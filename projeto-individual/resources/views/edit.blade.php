@extends('layouts.app')

@section('title', 'Editar Pet')

@section('content')
    <div class="card mb-3 shadow p-1">
        <div class="row g-0">
            <div class="col-md-7 border-3 border-end border-secondary">
                <div class="card-body">
                    <form class="col-10" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <h1>Editar Pet</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome do Pet</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type">Tipo do Pet</label>
                            <select class="form-select" id="type" name="type">
                                <option value="Cachorro" @if ($product->type == "Cachorro") selected @endif>Cachorro</option>
                                <option value="Gato" @if ($product->type == "Gato") selected @endif>Gato</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sex">Sexo do Pet</label>
                            <select class="form-select" id="sex" name="sex">
                                <option value="Macho" @if ($product->sex == "Macho") selected @endif>Macho</option>
                                <option value="Fêmea" @if ($product->sex == "Fêmea") selected @endif>Fêmea</option>
                            </select>
                            @error('sex')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Data de nascimento</label>
                            <input type="text" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date" name="birth_date" value="{{ $product->birth_date }}">
                            @error('birth_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto do Pet</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{ $product->image }}">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio do Pet</label>
                            <textarea class="form-control" id="bio @error('bio') is-invalid @enderror" rows="3" name="bio">{{ $product->bio }}</textarea>
                            @error('bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="m-3 d-flex justify-content-center">
                            <button class="btn btn-lg btn-primary p-3 shadow" type="submit">Adicionar novo Pet</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 shadow">
                <img src="https://cdn.pixabay.com/photo/2020/03/18/22/35/cats-4945658_960_720.png" class="img-fluid rounded-end" style="height:100%;" alt="...">
            </div>
        </div>
    </div>
@endsection
