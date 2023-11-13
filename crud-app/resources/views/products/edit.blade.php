@extends('layout')

@section('content')

    <h3>Edit a product</h3>
    <!--
                                        Can also just add required to the input and it will validate.
                                     -->
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span><br />
            @endforeach
        </div>
    @endif


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
