@extends('layouts.plantilla2')

@section('titulo', 'Registro de Productos')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Registro de Productos
                    </h4>
                </div>
            </div>
        </div>
        <div class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif

            <form action="{{route('products.registrarProducto')}}" method="POST">
                @csrf
                @method('POST')

                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Codigo</label>
                            <input type="text" name="codigo" id="codigo" maxlength="13" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>nombre</label>
                            <input type="text" name="nombre" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>descripción</label>
                            <input type="text"  name="descripcion" class="form-control" >
                            <input type="hidden" name="control" value="form">
                        </div>
                    </div>
                </div>

                <!-- Mostrar las marcas de productos que están alamacenadas en la BD  -->
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Marca</label>
                            <select name="marca" class="form-control" >
                                <option value="">--Seleccione--</option>

                            @foreach( $marcas as $marca)
                                <option value="{{$marca->id_marca}}"> {{$marca->descripcion}}  </option>
                            @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <!-- Termina la muestra de las marcas de productos de la BD  -->

                <div class="row">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection