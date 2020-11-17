@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h1>Cadastrar novo produto - Blade Laravel</h1>

    @include('admin.includes.alerts')

<form class="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="description" id="" placeholder="Descrição" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="price" id="" placeholder="Preço" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <input class="form-control" type="file" name="image" id="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
@endsection