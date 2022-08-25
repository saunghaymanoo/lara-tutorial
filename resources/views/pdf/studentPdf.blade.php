<div class="container">
    <h1>User list</h1>
    <table border="1" cellpadding="10" width="100%" style="margin-bottom: 100px;">
        <tr>
            <th width="10%">ID</th>
            <th width="30%">Name</th>
            <th width="30%">CITY</th>
            <th width="15%">DISTANCE</th>
            <th width="15%">MOONS</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->city }}</td>
            <td>{{ $student->distance }}</td>
            <td>{{ $student->moons }}</td>
        </tr>
        @endforeach
    </table>
</div>