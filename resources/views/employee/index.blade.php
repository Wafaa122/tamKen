@extends("layouts.employee")
@section("title","Index ")
@section("content")

<a href='{{route("employee.create")}}' class='btn btn-success'>Create New Student</a>

<table class="table table-striped table-sm mt-3">
    <thead>
        <tr>
            <th width="5%">#</th>
            <th> First Name</th>
            <th>last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>EmpNo</th>
            <th>Active</th>
            <th width="22%">Options</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->first_name }}</td>
            <td>{{ $item->last_name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->gender=='m'?"Male":"Female" }}</td>
            <td>{{ $item->EmpNo }}</td>
            <td>{{ $item->active }}</td>
            <td>
                <form method='post' action='{{asset("employes/".$item->id)}}'>
                    @csrf
                    @method("delete")
                    <a href='{{ route("employee.show",$item->id) }}' class='btn btn-sm btn-info'>Show</a>
                    <a href='{{ route("employee.edit",$item->id) }}' class='btn btn-sm btn-primary'>Edit</a>
                    <input type='submit' onclick='return confirm("Are you sure?")' value='Delete' class='btn btn-danger btn-sm ' />
                    <a href='{{ route("employee.delete",$item->id) }}' class='btn btn-warning btn-sm' onclick='return confirm("Are you sure?")'>Delete</a>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
