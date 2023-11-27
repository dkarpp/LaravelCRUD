@extends('layout')

@section('content')
    <h3>Edit a product</h3>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')

        @include('products.form')

        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="{{ route('products.index') }}">Cancel</a>
        </div>
    </form>
@endsection
