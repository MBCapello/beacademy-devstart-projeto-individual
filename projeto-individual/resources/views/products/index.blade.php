@extends('layouts.app')

@section('title', 'Pets para adoção')

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show position-absolute top-0 end-0 p-5 m-3" role="alert">
            {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="card shadow p-1">
        <div class="row p-3 mb-3">
            <div class="col-6">
                <h1 class="display-3">@if (isset($filters['search']))
                    Buscando por: "{{$filters['search']}}"
                @else
                    Lista de animais
                @endif</h1>
            </div>
            <div class="col-6 card p-3 shadow">
                <form class="mt-3" action="{{ route('product.search') }}" method="GET">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="search">🔍</span>
                        <input type="search" class="form-control" placeholder="Busca por nome" name="search">
                        <button class="btn btn-primary" type="submit">Buscar</button>
                    </div>
                    <div class="d-flex">
                        <select class="form-select form-select-sm mb-3" name="type">
                            <option selected disabled>-- Escolha o tipo do pet -- </option>
                            <option value="Gato">Gato 🐱</option>
                            <option value="Cachorro">Cachorro 🐶</option>
                          </select>
                          <select class="form-select form-select-sm mb-3" name="sex">
                            <option selected disabled>-- Escolha o sexo do pet --</option>
                            <option value="Macho">Macho 👔</option>
                            <option value="Fêmea">Fêmea 🎀</option>
                          </select>
                    </div>
                </form>
                @if (isset($filters))
                <a href="{{ route('products.index') }}">Mostrar todos.</a>
            @endif
            </div>
        </div>
        <hr>
        @if (Auth::user())
            @if (Auth::user()->admin == 1)
                <a class="btn btn-primary" href="{{ route('product.create') }}">Adicionar novo animal</a>
            @endif
        @endif

        <div class="d-flex flex-wrap">
                @if (count($products) == 0)
                    <p class="display-5 m-3 p-3">Não foi possível encontrar nenhum Pet com essas características. 😿</p>
                @endif
            @foreach ($products as $product)
                @if ($product->available)
                    <div class="card m-3" style="width: 18rem; height: 24rem">
                        @if (substr($product->image , 0, 4) == 'http')
                        <img src="{{ $product->image }}" class="card-img-top" style="height: 12rem" alt="...">
                        @else
                        <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" style="height: 12rem" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text overflow-auto" style="height: 4rem">{{ $product->bio }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{$product->name}}">
                                Mais informações
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="{{$product->name}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Adotar {{ $product['name'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if (substr($product->image , 0, 4) == 'http')
                                <img src="{{ $product->image }}" class="card-img-top" alt="...">
                                @else
                                <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="...">
                                @endif
                                <ul class="list-group rounded-bottom">
                                    <li class="list-group-item active" aria-current="true">Adote agora {{ $product->sex == 'Macho' ? 'o':'a'}} {{ $product->name }}</li>
                                    <li class="list-group-item"><b>Sexo:</b> {{ $product->sex }}</li>
                                    <li class="list-group-item"><b>Data de Nascimento:</b> {{ $product->birth_date }}</li>
                                    <li class="list-group-item overflow-auto"><p><b>Sobre:<br></b>{{ $product->bio }}.</p></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                   @if (Auth::user())
                                        @if (Auth::user()->admin == 1)
                                            <a type="button" class="btn btn-warning" href="{{ route('product.edit', $product->id) }}" >Alterar informações</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Deletar Pet</button>
                                            </form>
                                        @endif
                                   @endif

                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <form action="{{ route('product.store') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">adotar</button>

                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="justify-content-center pagination">
            <div class="justify-content-center pagination">
                @if (isset($filters))
                    {{ $products->appends($filters)->links('pagination::bootstrap-4') }}
                @else
                    {{ $products->links('pagination::bootstrap-4') }}
                @endif
            </div>
        </div>
    </div>
@endsection
