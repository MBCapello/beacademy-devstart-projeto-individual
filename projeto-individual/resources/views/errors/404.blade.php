
@extends('layouts.app')

@section('title', '404 página não encontrada')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 80vh">
        <div class="d-flex justify-content-center align-items-center" >
            <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">404 </h1>
            <div class="inline-block align-middle">
                <h2 class="font-weight-normal lead" id="desc"> | <strong>Desculpe.</strong>Mas a página que você solicitou não foi encontrada.</h2>
            </div>
        </div>
        <a class="justify-self-start" href="{{ route('welcome') }}">Retornar para página inicial</a>
    </div>
@endsection
