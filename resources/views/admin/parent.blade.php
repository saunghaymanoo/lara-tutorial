@extends('layouts.app')
@section('title','Home')
@section('content')
@php
$username = getUserName()
@endphp
<p style="float:right: font-size: 22px; color: blue;">
    {{ $username }}
</p>
<h1>Hello Again!</h1>
<article>
    <h2>Repositories</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a href="{{ asset('admin/student/download') }}" class="btn btn-success btn-sm">Download PDF</a>
    <table id="planets" border="3" cellpadding="4" cellspacing="4">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Student</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.<a href="https://www.w3hubs.com" target="_blank">
                            W3hubs</a></p>
                </td>
            </tr>
        </tfoot>
        <tbody>
            @foreach($parents as $key => $parent)
            <tr>
                <td>{{ $parent->id }}</td>
                <td>{{ $parent->name }}</td>
                <td>
                    @if($parent->getStudentByParent != null)
                    @php
                    $name = "";
                    @endphp
                    @foreach($parent->getStudentByParent as $student)
                    @php
                    $name .= $student->name . ",";
                    @endphp
                    @endforeach
                    {{ rtrim($name, ",") }}
                    @endif
                </td>
                <td><button
                        style="background:#f74639;color:white;border-radius: 5px;width: 100px;height: 30px;border:1px solid #aba9a9;"
                        onclick="deleteParent({{ $parent->id }})">Delete</button>
                </td>
                <td><button
                        style="background:#156ee3;color:white;border-radius: 5px;width: 100px;height: 30px;border:1px solid #aba9a9;"
                        onclick="editParent({{ $parent->id }})">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</article>
<script>
    function deleteStudent(id) {
        window.location.href = '/admin/student/delete/' + id;   
    }

    function editStudent(id) {
        window.location.href = '/admin/student/edit/' + id;
    }
</script>
@endsection