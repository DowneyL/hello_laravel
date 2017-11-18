@extends('layouts.app')
@section('content')
    @if( !empty($photos) )
        @foreach($photos as $photo)
            <h1><a href="{{ route('photos.show', $photo->id) }}">这是第 {{ $photo->id }} 个图片</a></h1>
            <div>
                <ul>
                    <li>图片名称：{{ $photo->name }}</li>
                    <li>图片大小：{{ $photo->size }}</li>
                </ul>
            </div>
            <hr>
        @endforeach
    @else
        <h1>没有数据哦！</h1>
    @endif
    <a href="{{ route('photos.create') }}">我要新建图片</a>
@endsection