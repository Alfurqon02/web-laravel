@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Category</h1>
  </div>

  <div class="table-responsive col-lg-15">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i class="bi bi-plus-lg"></i> Create New Category</a>
    
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection