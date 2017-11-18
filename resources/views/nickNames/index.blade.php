@extends('layouts.app')
@section('content')
    <form action="{{ route('nick_names.store') }}" method="post">
        {{ csrf_field() }}
        <p>
            <input type="text" name="product[0][name]">
        </p>
        <p>
            <input type="text" name="product[1][name]">
        </p>
        <p>
            <input type="text" name="product[2][name]">
        </p>
        <p>
            <input type="submit" value="ok">
        </p>
    </form>
@endsection