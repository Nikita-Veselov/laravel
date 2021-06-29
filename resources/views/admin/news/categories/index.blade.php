@extends('layouts.admin')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories List</h1>
        <a href="{{ route('admin.categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i>Add new category</a>
    </div>

    <div class="row">
        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
            
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Update date</th>
                    <th>Creation date</th>
                    <th>Action</th>
                </tr>    
            </thead>
            <tbody>


            

        @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->updated_at }}</td>
                <td>{{ $category->created_at }}</td>

                <td>
                    <a href="{{  route('admin.categories.edit', ['category' => $category]) }}">Edit</a> &nbsp;
                    <a href="">Delete</a> 
                </td>
            </tr>
            
            @empty           
            <tr>
                <td colspan="4">No categories</td>
            </tr>

        @endforelse

            </tbody>
        </table>

        <div>{{ $categories->links() }}</div>
    </div>


@endsection