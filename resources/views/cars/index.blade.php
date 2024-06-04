@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Lista de Veículos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container mt-5">
                        <div class="row mt-3">
                            @foreach($cars as $car)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ asset($car->image) }}" class="card-img-top" alt="{{ $car->name }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $car->name }}</h5>
                                            <p class="card-text">{{ $car->description }}</p>
                                            <p class="card-text">Ano: {{ $car->year }}</p>
                                            <p class="card-text">País: {{ $car->country }}</p>
                                            <p class="card-text">Preço diária: R$
                                                {{ number_format($car->preco_diaria, 2, ',', '.') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
