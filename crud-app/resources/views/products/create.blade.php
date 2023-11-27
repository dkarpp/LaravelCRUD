@extends('layout')

@section('content')
    <h3>Create a Product</h3>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        @include('products.form')

        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('products.index') }}">Cancel</a>
        </div>
    </form>
@endsection
