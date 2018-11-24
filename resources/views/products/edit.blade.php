@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header lead">
                        Editar el producto #{{ $product->id }}
                    </div>

                    <div class="card-body shadow-lg p-3 bg-white rounded">
                        {!! Form::model($product,['route' =>['products.update',$product->id], 'method' => 'PUT']) !!}
                            @include('products.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
