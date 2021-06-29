@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-8 offset-2">
            <h2 id="name">Add report</h2>
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                
            @endif
            <form method="post" action=" {{ route('admin.news.store') }} ">
                @csrf
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select id="category" name="category_id" class="form-control">
                        <option value="0">Choose</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control" >{!! old('description') !!}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
