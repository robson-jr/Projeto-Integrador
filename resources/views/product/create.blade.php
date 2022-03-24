@extends('layouts.app')

@section('content')
<form action="{{route('product.store')}}" method="POST">
    @csrf
    Nome do Produto: <input type="text" name="name">
    Drescrição: <input type="text" name="description">
    Preço: <input type="number" step="0.1" name="price">
    Estoque: <input type="number" name="stock">
    Selecione uma categoria:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{ $category->name }}</option>
        @endforeach
    </select>
    <select multiple name="tags[]">
        @foreach($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>
</form>
@endsection
