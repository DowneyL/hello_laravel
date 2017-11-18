@extends('layouts.app')
@section('content')
    <h1>这是第 {{ $photo->id }} 个图片</h1>
    <div>
        <ul>
            <li>图片名称：{{ $photo->name }}</li>
            <li>图片大小：{{ $photo->size }}</li>
        </ul>
    </div>
    <div>
        <form action="{{ route('photos.destroy', $photo->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="删除">
        </form>
        <a href="{{ route('photos.edit', $photo->id) }}">修改</a>
    </div>
@endsection