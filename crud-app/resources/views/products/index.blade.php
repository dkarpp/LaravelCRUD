@extends('layout')
@section('content')
    <a class="btn btn-primary mb-3" href="{{ route('products.create') }}">Create</a>
    {{ $products->links() }}


    <table class="table
        table-striped table-hover" style="font-size: 20px;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Item Number</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td> <img src="{{ $product->image }}" style="max-width: 75px; max-height: 75px;" ?> </td>

                    <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</td>

                    <td> ${{ $product->price }}</td>
                    <td>{{ $product->item_number }}</td>
                    <td><a href="{{ route('products.edit', $product->id) }}">Edit</td>

                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
@endsection
