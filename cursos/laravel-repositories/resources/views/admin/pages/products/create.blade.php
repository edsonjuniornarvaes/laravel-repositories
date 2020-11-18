@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h1>Cadastrar novo produto - Blade Laravel</h1>
    
    <form class="form" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @include('admin.pages.products._partials.form')
    </form>
@endsection