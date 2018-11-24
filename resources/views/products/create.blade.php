@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header lead">
                        Crear nuevo producto
                    </div>

                    <div class="card-body shadow-lg p-3 bg-white rounded">
                        {!! Form::open(['route' => 'products.store'])!!}
                            @include('products.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
