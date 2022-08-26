@extends('layouts.app')


@section('content')
    <h1>Students</h1>
    @if (count($students) > 1 )
        @foreach ($students as $student)
            <div class="card p-3 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-4 col-sm-8">
                        <h3><a href="students/{{$student->id}}">{{$student->name}}</a></h3>
                        <small>{{$student->created_at}}</small>
                    </div>
                </div>
               
            </div>
        @endforeach
    @else
        <p>No Student found.</p>    
    @endif
    {{ $students->onEachSide(5)->links() }}
@endsection