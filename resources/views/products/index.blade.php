@extends('layouts.app') 

@section('content')
    <h1>Products</h1>
    <a href="/products/create" class="btn btn-primary">Create Product</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="/products/{{ $product->id }}" class="btn btn-primary">View</a>
                        <a href="/products/{{ $product->id }}/edit" class="btn btn-secondary">Edit</a>
                        <form action="/products/{{ $product->id }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection