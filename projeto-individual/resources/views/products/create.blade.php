@extends('layouts.app')

@section('title', 'Adicionar novo Pet')

@section('content')
    <div class="card mb-3 shadow p-1">
        <div class="row g-0">
            <div class="col-md-7 border-3 border-end border-secondary">
                <div class="card-body">
                    <form class="col-10" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 class="display-5 mb-3">Adicionar Pet</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome do pet</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Ex: Kiko">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="type">Tipo do pet</label>
                            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                                <option selected disabled>-- Escolha o tipo --</option>
                                <option value="Cachorro">Cachorro</option>
                                <option value="Gato">Gato</option>
                            </select>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="sex">Sexo do pet</label>
                            <select class="form-select @error('sex') is-invalid @enderror" id="sex" name="sex">
                                <option selected disabled>-- Escolha o tipo --</option>
                                <option value="Macho">Macho</option>
                                <option value="Fêmea">Fêmea</option>
                            </select>
                            @error('sex')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Data de nascimento</label>
                            <input type="text" class="form-control @error('birth_date') is-invalid @enderror" id="birth_date" name="birth_date" placeholder="ex: 12/10/2022">
                            @error('birth_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Foto do pet</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio do pet</label>
                            <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" rows="3" name="bio" placeholder="Ex: Médio porte e adora passear."></textarea>
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
                <img src="https://cdn.pixabay.com/photo/2016/07/14/20/54/animals-1517642_960_720.jpg" class="img-fluid rounded-end" style="width:100%;" alt="...">
            </div>
        </div>
    </div>
@endsection
