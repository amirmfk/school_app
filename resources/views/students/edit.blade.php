@extends('layouts.app')


@section('content')
    <h1 class="ms-2">Edit Student</h1>
    <div class="card-body ms-3">
        <form name="add-blog-post-form" id="add-blog-post-form" method="put" action="{{route('students.update',$student->id)}}">
         @csrf
          <div class="form-group">
            <label>Name</label>
            <input type="text" id="title" name="name" class="form-control" value="{{$student->name}}" required>
          </div>
          <div class="form-group">
            <label>Last name</label>
            <input type="text" id="title" name="lastname" class="form-control" value="{{$student->lastname}}" required>
          </div>
          <div class="form-group mt-2">
            <label>Age</label>
            <input type="number" id="quantity" name="age" min="7" max="18" value="{{$student->age}}">
          </div>
          <div class="form-group mt-2">
            <label>Average</label>
            <input type="number" id="quantity" name="average" step=0.01 min="0" max="20" value="{{$student->average}}">
          </div>
          <div class="form-group mt-2">
            <label>Kelas </label>
            <input type="number" id="quantity" name="kelas_id"  min="1" max="3" value="{{$student->kelas_id}}">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
@endsection