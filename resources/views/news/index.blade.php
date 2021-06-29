@extends('layouts.main')

@section('content')
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">

        <!-- Post preview-->
        @forelse ($news as $newsItem) 

        <div class="post-preview">
            
            <a href="{{ route('news.show', ['id' => $newsItem->id]) }}">
                <h2 class="post-title">{!! $newsItem->title !!}</h2>
                <h3 class="post-subtitle">{!! $newsItem->description !!}</h3>
            </a>
            <p class="post-meta">
                Posted by
                Admin
                on {{ $newsItem->created_at ?? now() }}
                <i>Category: {{ $newsItem->category->title }}</i>
            </p>
        </div>
        @empty 
            <h2 class="post-title">Новостей нет</h2>

        @endforelse 
        <!-- Divider-->
        <hr class="my-4" />
        <!-- Pager-->
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
    </div>
</div>

@endsection

