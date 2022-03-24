@extends('layouts.app')

@section('content')
<form action="{{route('tag.store')}}" method="POST">
    @csrf
    Nome da tag: <input type="text" name="name">
    <button type="submit">Enviar</button>
</form>
@endsection
