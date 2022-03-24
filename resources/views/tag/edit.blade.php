@extends('layouts.app')

@section('content')
<form action="{{route('tag.update', $tag->id)}}" method="POST">
    @csrf
    @method('PUT')
    Nome da Tag: <input type="text" name="name" value="{{$tag->name}}">
    <button type="submit">Enviar</button>
</form>
@endsection
