@extends('layouts.plantilla')

@section('content')
<br>



<div class="container title">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center title">{{ __('REGISTRO DE HEROE') }}</div>

                <div class="card-body background">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO HEROE') }}
                    {{ session('status') }}

                    <form class="form" action="{{route('guardarheroe')}}" method="POST">
                        @csrf
                        <label class="title">
                            Nombre: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label class="title">
                            Empresa: <br>
                            <input name="empresa" type="text">
                        </label>
            
                        <button class="btn btn-primary boton" type="submit">Guardar</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection