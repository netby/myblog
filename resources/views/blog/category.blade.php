@extends('layouts.app')
{{--@section('title', $catgory->title)--}}
@section('title')
    {{$category->title}}
@endsection
@section('content')
    <div class="container">
        @forelse($articles as $article)
            <div class="row">
                <div class="col-sm-12">
                    <h2><a href="{{route('article', $article->slug)}}">{{$article->title}}</a></h2>
                    <p>{!! $article->description_short !!}</p>
                </div>
            </div>
            @empty
            <h2 class="text-center">Nothing found </h2>
        @endforelse
        {{$articles->links()}}
    </div>
@endsection