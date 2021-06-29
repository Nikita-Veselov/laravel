@extends('layouts.admin')

@section('content')
    
    <div class="row">
        <div class="col-8 offset-2">
            <h2 id="name">Edit category</h2>
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                
            @endif
            <form method="post" action=" {{ route('admin.categories.update', ['category' => $category ]) }} ">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $category->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control" >{{ $category->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="is_visible">Show</label>
                    <input type="checkbox" id="is_visible" name="is_visible" value="1"
                        @if ( $category->is_visible === true) checked @endif>
                </div>
                
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
