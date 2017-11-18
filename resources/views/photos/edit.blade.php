@extends('layouts.app')
@section('content')
    <form action="{{ route('photos.update', $photo->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <p>图片名称：</p>
        <input type="text" name="name" placeholder="请输入您的图片名称..." value="{{ $photo->name }}">
        </p>
        <p>
        <p>图片大小：</p>
        <input type="text" name="size" placeholder="请输入您的图片大小，单位为Mb..." value="{{ $photo->size }}">
        </p>
        <p>
            <input type="submit" value="修改">
        </p>
    </form>
@endsection