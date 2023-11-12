@extends('layout')

@section('content')
    <h3>Show Product Detail</h3>





    <table class="table
    table-striped table-hover" style="font-size: 20px;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Item Number</th>

            </tr>
        </thead>
        <tbody>

            <tr>
                <td> <img src="{{ $product->image }}" style="max-width: 300px; max-height: 300px;" ?> </td>


                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</td>

                <td> ${{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->item_number }}</td>

            </tr>

        </tbody>
    </table>



    <p><a href="{{ route('products.index') }}">All Products</p>
@endsection
