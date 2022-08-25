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
    {!! Form::open(['url' => 'admin/search','method'=> 'POST','class' => 'form-control']) !!}
    <table style="width:900px;">
        <tr>
            <td>
                <select id="inputState" class="form-control" name="year">
                    <option selected value="">Choose Year</option>

                    @foreach($years as $year)
                    <option value="{{$year->id}}" {{ old('year')==$year->id ? "selected" :""}}>{{$year->year}}</option>
                    @endforeach
                </select>
            <td>
                <select id="inputState" class="form-control" name="class">
                    <option selected value="">Choose Class</option>
                    @foreach($classes as $class)
                    <option value="{{$class->id}}" {{ old('class')==$class->id ? "selected" :""}}>{{$class->name}}
                    </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select id="inputState" class="form-control" name="major">
                    <option selected value="">Choose Major</option>
                    @foreach($majors as $major)
                    <option value="{{$major->id}}" {{ old('major')==$major->id ? "selected" :""}}>{{$major->name}}
                    </option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="submit" class="btn btn-primary" value="Search" />
            </td>
        </tr>
    </table>
    {!! Form::close() !!}
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
                <th style="width: 20%">Name</th>
                <th style="width: 20%">City</th>
                <th style="width: 10%">Distance</th>
                <th style="width: 10%">moons</th>
                <th style="width: 20%">Parent</th>
                <th style="width: 10%">Delete</th>
                <th style="width: 10%">Edit</th>
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
            @foreach($students as $key => $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->city }}</td>
                <td>{{ $student->distance }}</td>
                <td>{{ $student->moons }}</td>
                <td>{{ ($student->getParent->name != null) ? $student->getParent->name : ''}}</td>
                <td><button
                        style="background:#f74639;color:white;border-radius: 5px;width: 100px;height: 30px;border:1px solid #aba9a9;"
                        onclick="deleteStudent({{ $student->id }})">Delete</button>
                </td>
                <td><button
                        style="background:#156ee3;color:white;border-radius: 5px;width: 100px;height: 30px;border:1px solid #aba9a9;"
                        onclick="editStudent({{ $student->id }})">Edit</button>
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