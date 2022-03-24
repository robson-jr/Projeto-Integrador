@extends('layouts.app')

@section('content')
<form action="{{route('category.update', $category->id)}}" method="POST">
    @csrf
    @method('PUT')
    Nome da Categoria: <input type="text" name="name" value="{{$category->name}}">
    <button type="submit">Enviar</button>
</form>
@endsection
