@extends('layouts.plantilla')

@section('content')
<br>

<style>
 

</style>

<div class="container title">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center title">{{ __('EDITAR HEROE') }}</div>

                <div class="card-body background">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('INGRESE NUEVOS DATOS') }}
                    {{ session('status') }}

                    <form class="form" action="{{route('editarheroe',$heroes->id)}}" method="POST">
                        @csrf
                        <label class="title">
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$heroes->nombre}}">
                        </label>
                        <label class="title">
                            Empresa: <br>
                            <input name="empresa" type="text" value="{{$heroes->Empresa}}">
                        </label>
            
                        <button class="boton" type="submit">Guardar cambios</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection