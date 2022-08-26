@extends('layouts.app')


@section('content')
    <a href="/students" class="btn btn-alert">Go Back</a>
    <h1>Name : {{$student ->name}}</h1>
    
    <div>
        Lastname : {!! $student->lastname !!}
    </div>
    <div>
        Age : {!! $student->age !!}
    </div>
    <div>
       Average:  {!! $student->average !!}
    </div>
    <hr>
    <small>Written on {{$student->created_at}} by {{$student->name}}</small>
    <hr>
    <a class="btn btn-primary mt-3" href="{{$student->id}}/edit">Edit Student</a>
    <form action="{{ route('students.destroy', $student->id) }}" method="POST">  @csrf @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">Delete post </button>
    </form>
@endsection