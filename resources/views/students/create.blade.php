@extends('layouts.app')


@section('content')
    <h1>Create Student</h1>
    <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('students.store')}}">
         @csrf
          <div class="form-group">
            <label>Name</label>
            <input type="text" id="title" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Last name</label>
            <input type="text" id="title" name="lastname" class="form-control" required>
          </div>
          <div class="form-group mt-2">
            <label>Age</label>
            <input type="number" id="quantity" name="age" min="7" max="18">
          </div>
          <div class="form-group mt-2">
            <label>Average</label>
            <input type="number" id="quantity" name="average" step=0.01 min="0" max="20">
          </div>
          <div class="form-group mt-2">
            <label>Kelas </label>
            <input type="number" id="quantity" name="kelas_id"  min="1" max="3">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
@endsection