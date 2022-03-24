@extends('layouts.app')

@section('content')
<a class="btn btn-lg btn-success float-end me-5" href="{{route('category.create')}}">Criar Categoria</a>
<div class="container mt-3">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Cat ID</th>
                <th>Categoria</th>
                <th>Tag</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->Category->id}}</td>
                <td>{{$product->Category->name}}</td>
                <td>@foreach($product->Tags()->get() as $tag)
                {{$tag->name}}
                @endforeach</td>
                <td>{{$product->price}}</td>
                <td>{{$product->stock}}</td>
                <td><a href="{{ route('product.edit', $product->id) }}">Editar</a></td>
                <td><a href="{{ route('product.destroy', $product->id) }}">Apagar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
