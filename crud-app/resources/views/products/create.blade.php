@extends('layout')

@section('content')

    <h3>Create a Product</h3>
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


    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        @include('products.form')

        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('products.index') }}">Cancel</a>
        </div>
    </form>

@endsection
