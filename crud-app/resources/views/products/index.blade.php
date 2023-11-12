@extends('layout')
@section('content')
    {{ $products->links() }}


    <table class="table
        table-striped table-hover" style="font-size: 20px;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Item Number</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td> <img src="{{ $product->image }}" style="max-width: 75px; max-height: 75px;" ?> </td>


                    <td><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</td>

                    <td> ${{ $product->price }}</td>
                    <td>{{ $product->item_number }}</td>

                    <!--
                                                                            <td>{{ $product->description }}</td>
                                                                            <td>{{ $product->item_number }}</td>
                                                                            <td>{{ $product->image }}</td>-->

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
@endsection
