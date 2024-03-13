@extends('layouts.app')

@section('content')
    <h1 class="text-center m-5">Detalle del producto</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{ asset('u/comp.png'}}" alt="">
            </div>
            <div class="col-md-4">
                <h1>Computador portatil</h1>
                <p>jvblfrbvlebvlbflbfnbnfudhuishbrenbsbfiubn</p>
                <h3>$5.000.000</h3>
                <button type="button" class="btn btn-primary">Añadir al carrito</button>
            </div>
        </div>
    </div>
@endsection