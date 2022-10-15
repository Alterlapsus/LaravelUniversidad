@extends('layouts.plantilla2')

@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Productos</h3>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nombre del comercio" id="nom_buscar">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary rounded-right" onclick="searchComercio()" id="btn-comercio" ><i class="fas fa-search"></i></button>
            </div>
            <a href="{{route('products.index')}}" class="btn btn-success ml-5" ><i class="fas fa-plus text-white"></i> Nuevo</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CODIGO</th>
                    <th scope="col">PRODUCTO</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">MARCA</th>
                    <th scope="col" ></th>
                    <th scope="col" ></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $producto)
                    <tr>
                        <td>{{ $producto->id_producto}}</td>
                        <td>{{$producto->codigo_producto}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{ \App\Http\Controllers\ProductsController::getMarca($producto->id_marca) }}</td>
                        <td class="d-flex d-inline"><a href=""><i class="far fa-edit fa-lg"></i></a><a onclick="" class="mx-3" href="#" ><i class="fas fa-trash-alt fa-lg text-danger" ></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection