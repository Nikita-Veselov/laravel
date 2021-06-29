@extends('layouts.main')

@section('content')
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
        <h2>{{ $news->title }}</h2>
        <p>{{ $news->description }}</p>
    </div>
</div>
@endsection