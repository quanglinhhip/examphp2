@extends('layout.main')
@section('content')
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    @if (isset($_SESSION['success']) && isset($_GET['msg']))
        <span>{{$_SESSION['success']}}</span>
    @endif
    <form action="{{route('post-teacher')}}" method="POST">
        <label for="">Name: </label>        
        <input type="text" name="name" id="name">
        
        <label for="">Email: </label>        
        <input type="text" name="email" id="email">

        <label for="">Salary: </label>
        <input type="text" name="salary" id="salary">

        <label for="">School:</label>
        <input type="text" name="school" id="school">

        <input type="submit" value="Add", name="btn-submit">
    </form>
@endsection