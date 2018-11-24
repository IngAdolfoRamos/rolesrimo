@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header lead">
                        Productos
                    </div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th colspan="3">
                                        @can('products.create')
                                            <a href="{{ route('products.create') }}"
                                               class="btn btn-primary btn-sm btn-block lead shadow p-1 rounded">
                                                Nuevo
                                            </a>
                                        @endcan
                                    </th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <th scope="row">
                                            {{ $product->id }}
                                        </th>
                                        <td>
                                            {{ $product->name }}
                                        </td>
                                        <td>
                                            @can('products.show')
                                                <a href="{{ route('products.show', $product->id) }}"
                                                class="btn btn-sm btn-success btn-sm btn-block shadow p-1 rounded">
                                                    Ver
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.edit')
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                   class="btn btn-sm btn-warning btn-sm btn-block shadow p-1 rounded">
                                                    Editar
                                                </a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('products.destroy')
                                                {!! Form::open
                                                    ([
                                                        'route' =>
                                                            [
                                                                'products.destroy',
                                                                $product->id
                                                            ],
                                                        'method' => 'DELETE'
                                                    ])
                                                !!}
                                                    <button class="btn btn-danger btn-sm btn-block shadow p-1 rounded">
                                                        Eliminar
                                                    </button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            {{ $products->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
