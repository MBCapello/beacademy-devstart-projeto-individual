@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!') }}
                    <span>Clique <a href="{{ route('products.index') }}">aqui</a> para ir ver os Pets 😍</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
