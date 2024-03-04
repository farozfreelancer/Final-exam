@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Products Added</h2>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $products)
                <tr>
                    <th>{{ $products->id }}</th>
                    <td>{{ $products->name }}</td>
                    <td>{{ $products->phone }}</td>
                    <td>{{ $products->description }}</td>
                    <td>
                        <img src="/products/{{ $products->image }}" alt="" class="rounded-circle" width="50" height="50">
                    </td>
                    <td>
                        <a href="{{route('product.edit', $products->id)}}" class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>

                        <form action="{{ route('product.delete', $products->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-align "><i class="fa-solid fa-trash-arrow-up"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection