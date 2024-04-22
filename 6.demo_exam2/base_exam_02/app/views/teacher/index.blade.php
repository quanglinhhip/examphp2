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
    
<a href="{{route('add-teacher')}}">
    <button>Thêm giảng viên</button>
</a>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Salary</th>
        <th>School</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($teachers as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->salary }}</td>
                <td>{{ $c->school }}</td>
                <th>
                    <a href="">Sửa</a>
                    <button onclick="confirmDelete('{{route('delete-teacher/'.$c->id)}}')">Xoá</button>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
