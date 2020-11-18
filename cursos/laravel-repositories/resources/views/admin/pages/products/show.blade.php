@extends('admin.layouts.app')

@section('title', 'Detalhes do produto {{ $product->name }}')
    
@section('content')

<h1>
    Produto {{ $product->name }} <a href="{{ route('products.index') }}"> << Voltar</a>
</h1>

<ul>
    <li><strong>Nome: </strong>{{ $product->name }}</li>
    <li><strong>Preço: </strong>{{ $product->price }}</li>
    <li><strong>Descrição: </strong>{{ $product->description }}</li>
</ul>

<form action="{{ route('products.destroy', $product->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Deletar o produto: {{ $product->name }}</button>
</form>

@endsection