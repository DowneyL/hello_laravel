@extends('layouts.app')
@section('content')
    <form action="{{ route('photos.store') }}" method="post">
        <p>
        <p>图片名称：</p>
        <input type="text" name="name" placeholder="请输入您的图片名称..." value="{{ old('name') }}">
        </p>
        <p>
        <p>图片大小：</p>
        <input type="text" name="size" placeholder="请输入您的图片大小，单位为Mb..." value="{{ old('size') }}">
        </p>
        <p>
            {{ csrf_field() }}
            <input type="submit" value="提交">
        </p>
    </form>
@endsection