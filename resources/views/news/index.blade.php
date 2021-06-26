@extends('layouts.main')

@section('content')
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">

        <!-- Post preview-->
        @forelse ($newsList as $key => $news) 

        <div class="post-preview">
            <a href="{{ route('news.show', ['id' => ++$key]) }}">
                <h2 class="post-title">{!! $news !!}</h2>
                <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
            </a>
            <p class="post-meta">
                Posted by
                Admin
                on {{ now() }}
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

