@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header lead">
                        Detalles del producto #{{ $product->id }}
                    </div>

                    <div class="card-body shadow-lg p-3 bg-white rounded">
                        <label class="font-weight-bold" for="name">
                            Nombre:
                        </label>
                        <p class="form-control">{{ $product->name }}</p>

                        <label class="font-weight-bold" for="name">
                            Descripcion:
                        </label>
                        <p class="form-control">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
